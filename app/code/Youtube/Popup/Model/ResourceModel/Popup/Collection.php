<?php
declare(strict_types=1);

namespace Youtube\Popup\Model\ResourceModel\Popup;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Youtube\Popup\Model\Popup;
use Youtube\Popup\Model\ResourceModel\Popup as PopupResource;

class Collection extends AbstractCollection{
    protected function _construct(){
        $this->_init(
            Popup::class,
            PopupResource::class
        );
    }
}
?>