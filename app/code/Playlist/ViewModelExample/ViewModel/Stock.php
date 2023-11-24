<?php

declare(strict_types=1);

namespace Playlist\ViewModelExample\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;
class Stock implements ArgumentInterface{

    public function getStatus():string{
        $val = random_int(1,10);

        if($val<6){
            return "Ending Soon";
        }else{
            return sprintf("%d available", $val);
        }
    }
}

?>