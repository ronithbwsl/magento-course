<?php

declare(strict_types=1);

namespace Playlist\DependancyInjection\Model;

use Playlist\DependancyInjection\Model\InjectableInterface;
use Playlist\DependancyInjection\Model\NonInjectableInterfaceFactory;
use Playlist\DependancyInjection\Model\HeavyOperation;
use Playlist\DependancyInjection\Model\VirtualType\DefaultName;
use Playlist\DependancyInjection\Model\Optional;
use Playlist\DependancyInjection\Model\MethodInjection;
use Magento\Framework\DataObject;

class Main
{
    public function __construct(
        private InjectableInterface $injectable,
        private NonInjectableInterfaceFactory $nonInjectable,
        private AbstractUtil $util,
        private HeavyOperation $heavyOperation,
        private DefaultName $defaultName,
        private MethodInjection $methodInjection,
        private ?Optional $optional = null,
        private array $data = []
    ) {
        $this->optional = $optional;
    }
    public function getId(): string
    {
        return $this->data["id"];
    }

    public function getInjectable(): Injectable
    {
        return $this->injectable;
    }

    public function getNonInjectable(): NonInjectable
    {
        return $this->nonInjectable->create();
    }

    public function getAbstractUtil(): AbstractUtil
    {
        return $this->util;
    }

    public function getHeavyOperation(): HeavyOperation
    {
        return $this->heavyOperation;
    }

    public function getDefaultName(): DefaultName
    {
        return $this->defaultName;
    }

    public function getOptionalName(): Optional
    {
        return $this->optional;
    }

    public function getMethodInjectionName(): string
    {
        $dataObject = new DataObject(['name' => 'Method Injection']);
        return $this->methodInjection->getName($dataObject);
    }

}

?>