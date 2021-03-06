<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea5231d9baa0a53f297a02b1efd3e6b3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea5231d9baa0a53f297a02b1efd3e6b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea5231d9baa0a53f297a02b1efd3e6b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea5231d9baa0a53f297a02b1efd3e6b3::$classMap;

        }, null, ClassLoader::class);
    }
}
