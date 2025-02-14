<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdc1b2971f86d992a6b76a387a31ac91
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdc1b2971f86d992a6b76a387a31ac91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdc1b2971f86d992a6b76a387a31ac91::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcdc1b2971f86d992a6b76a387a31ac91::$classMap;

        }, null, ClassLoader::class);
    }
}
