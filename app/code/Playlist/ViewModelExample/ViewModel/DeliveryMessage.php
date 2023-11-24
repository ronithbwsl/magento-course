<?php

declare(strict_types=1);

namespace Playlist\ViewModelExample\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class DeliveryMessage implements ArgumentInterface{
    public function getMessage():string{
        return "Hard Code Value From getMessage()";
    }
}

?>