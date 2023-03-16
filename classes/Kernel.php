<?php

namespace {{ SITE_NAMESPACE }};

use NanoSoup\Zeus\Kernel as KernelBase;
use {{ SITE_NAMESPACE }}\ACF\ACF;


class Kernel extends KernelBase
{
    public function __construct()
    {
        parent::__construct();
        $this->registerClasses();
    }

    /**
     * @return array
     */
    public function registerClasses()
    {
        return [
            new ACF(),
        ];
    }
}
