<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit845375011d97b2e2b1d863c327d4753d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'Admin\\Composer\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Admin\\Composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit845375011d97b2e2b1d863c327d4753d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit845375011d97b2e2b1d863c327d4753d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit845375011d97b2e2b1d863c327d4753d::$classMap;

        }, null, ClassLoader::class);
    }
}
