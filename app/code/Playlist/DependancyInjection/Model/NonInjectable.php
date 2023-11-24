<?php

declare(strict_types= 1);

namespace Playlist\DependancyInjection\Model;
use Playlist\DependancyInjection\Model\NonInjectableInterface;

class NonInjectable implements NonInjectableInterface{
    public function getId(): string{
        return "Class Non-Injectable";
    }
}

?>