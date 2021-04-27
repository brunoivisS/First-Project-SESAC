<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0d5efa6fce46dc7c6b994e2f412e38f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf0d5efa6fce46dc7c6b994e2f412e38f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf0d5efa6fce46dc7c6b994e2f412e38f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf0d5efa6fce46dc7c6b994e2f412e38f::$classMap;

        }, null, ClassLoader::class);
    }
}