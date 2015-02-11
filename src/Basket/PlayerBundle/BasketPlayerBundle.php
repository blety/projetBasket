<?php

namespace Basket\PlayerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BasketPlayerBundle extends Bundle
{
  public function getParent()
    {
        return 'FOSUserBundle';
    }
}
