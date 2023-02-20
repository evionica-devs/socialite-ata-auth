<?php

namespace Evionica\SocialiteAtaAuth;

use SocialiteProviders\Manager\SocialiteWasCalled;

class AtaAuthExtendSocialite
{
  /**
   * Register the provider.
   *
   * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
   */
  public function handle(SocialiteWasCalled $socialiteWasCalled)
  {
    $socialiteWasCalled->extendSocialite('ataauth', Provider::class);
  }
}
