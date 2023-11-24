<?php

declare(strict_types= 1);

namespace Playlist\DependancyInjection\Model;
use Magento\Framework\DataObject;

class MethodInjection{
    public function getName(DataObject $dataObject): string{
        return $dataObject->getName();
    }
}

?>