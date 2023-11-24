<?php

declare(strict_types=1);

namespace Playlist\DependancyInjection\Block;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;
use Playlist\DependancyInjection\Model\Main;

class Example extends Template{
    public function __construct(Context $context,protected Main $main, array $data = []){
        parent::__construct($context, $data);
    }

    public function getMain() : Main {
        return $this->main;
    }
}
?>