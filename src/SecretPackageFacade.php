<?php

namespace Abkrim\SecretPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abkrim\SecretPackage\Skeleton\SkeletonClass
 */
class SecretPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'secret-package';
    }
}
