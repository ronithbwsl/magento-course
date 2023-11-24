<?php

declare(strict_types= 1);

namespace Playlist\DependancyInjection\Model;
use Playlist\DependancyInjection\Model\AbstractUtil;

class Util extends AbstractUtil{
    public function getName(): string{
        return "Util Class";
    }
}

?>