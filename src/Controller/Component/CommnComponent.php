<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class CommnComponent extends Component
{
    public function test($amount1, $amount2)
    {
        return $amount1 + $amount2;
    }
}