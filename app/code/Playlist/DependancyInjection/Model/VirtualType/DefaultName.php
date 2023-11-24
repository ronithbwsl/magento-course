<?php

declare(strict_types= 1);

namespace Playlist\DependancyInjection\Model\VirtualType;
use Playlist\DependancyInjection\Model\VirtualType\Name;

class DefaultName{
    public function __construct(private Name $name){}

    public function getName(): string{
        return $this->name->getName("Default Name");
    }
}

?>