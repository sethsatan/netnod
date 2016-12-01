<?php

namespace Nod\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NodUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
