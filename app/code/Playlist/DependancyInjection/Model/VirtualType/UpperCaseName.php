<?php

declare(strict_types= 1);

namespace Playlist\DependancyInjection\Model\VirtualType;
use Playlist\DependancyInjection\Model\VirtualType\Name;

class UpperCaseName extends Name{
    public function getName(string $name): string{
        return strtoupper(Parent::getName($name));   
    }
}

?>