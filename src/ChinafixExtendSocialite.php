<?php

namespace SocialiteProviders\Chinafix;

use SocialiteProviders\Manager\SocialiteWasCalled;

class ChinafixExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('chinafix', __NAMESPACE__.'\Provider');
    }
}
