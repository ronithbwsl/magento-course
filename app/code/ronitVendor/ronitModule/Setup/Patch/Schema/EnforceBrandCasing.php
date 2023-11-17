<?php 

declare(strict_types= 1);

namespace ronitVendor\ronitModule\Setup\Patch\Schema;

use Magento\Framework\DB\Ddl\TriggerFactory;
use Magento\Framework\Setup\Patch\SchemaPatchInterface;
use Magento\Framework\DB\Ddl\Trigger;
use Magento\Framework\Setup\SchemaSetupInterface;
use ronitVendor\ronitModule\Setup\StoredRoutinesProvider;


class EnforceBrandCasing implements SchemaPatchInterface{
    private $storedRoutinesProvider;
    private $schemaSetup;
    private $triggerFactory;
    public function __construct(StoredRoutinesProvider $storedRoutinesProvider,
     SchemaSetupInterface $schemaSetup,
     TriggerFactory $triggerFactory){
        $this->storedRoutinesProvider = $storedRoutinesProvider;
        $this->schemaSetup = $schemaSetup;
        $this->triggerFactory = $triggerFactory;
    }
    public function apply(){
        $db = $this->schemaSetup->getConnection();
        if($db instanceof Mysql){
            foreach($this->storedRoutinesProvider->getStoredFunctionSql() as $sql){
                strpos(rtrim($sql, "; \n\t"),';') !== false ?
                $db->multiQuery($sql) :
                $db->query($sql);
            }
            $this->createTriggerToEnforceConsistentCasing();
        }
    }

    public static function getDependencies(){
        return [];
    }

    public function getAliases(){
        return [];
    }

    private function createTriggerToEnforceConsistentCasing(){
        
        $db = $this->schemaSetup->getConnection();
        $tableName = $this->schemaSetup->getTable('ronitVendor_ronitModule');
        foreach([Trigger::EVENT_INSERT, Trigger::EVENT_UPDATE] as $event){
            $trigger = $this->triggerFactory->create();
            $triggerName = $db->getTriggerName($tableName, Trigger::TIME_BEFORE, $event);
            $trigger->setName($triggerName);
            $trigger->setTime(Trigger::TIME_BEFORE);
            $trigger->setEvent($event);
            $trigger->setTable($tableName);
            $trigger->addStatement('SET NEW.name = UCWORDS(NEW.name), NEW.description = CONCAT(UCFIRST_WORD(NEW.descripton), " ", BUT_FIRST_WORD(NEW.description))');
            $db->dropTrigger($triggerName);
            $db->createTrigger($trigger);
        }        
    }
}

?>