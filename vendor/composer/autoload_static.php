<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23be2f45e8b552a8f2e0fec724fc6d81
{
    public static $files = array (
        '5bebe6b1d2aecbc948b7a201abb3a2d4' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'ONSBKS_Slots\\Includes\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ONSBKS_Slots\\Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23be2f45e8b552a8f2e0fec724fc6d81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23be2f45e8b552a8f2e0fec724fc6d81::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23be2f45e8b552a8f2e0fec724fc6d81::$classMap;

        }, null, ClassLoader::class);
    }
}