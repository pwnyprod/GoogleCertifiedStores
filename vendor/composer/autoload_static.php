<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6738aa8f41ff1920f387886cb9435e59
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6738aa8f41ff1920f387886cb9435e59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6738aa8f41ff1920f387886cb9435e59::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}