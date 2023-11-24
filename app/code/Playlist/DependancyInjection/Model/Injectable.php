<?php

declare(strict_types=1);

namespace Playlist\DependancyInjection\Model;
use Playlist\DependancyInjection\Model\InjectableInterface;

class Injectable implements InjectableInterface{
    public function getId(): string{
        return "Injectable Class";
    }
}

?>