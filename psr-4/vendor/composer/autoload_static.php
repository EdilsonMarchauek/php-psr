<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc79b84976cc2065036018062f0ad7916
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ETI\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ETI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/eti',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc79b84976cc2065036018062f0ad7916::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc79b84976cc2065036018062f0ad7916::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc79b84976cc2065036018062f0ad7916::$classMap;

        }, null, ClassLoader::class);
    }
}
