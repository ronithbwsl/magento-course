<?php

declare(strict_types= 1);

namespace Playlist\DependancyInjection\Model\VirtualType;

class Name{
    public function getName(string $name): string{
        return $name;
    }
}

?>