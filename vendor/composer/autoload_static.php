<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa64d7e549694d76dbffcdedf5e3249f
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Janknapik\\LaravelSlovakNamedays\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Janknapik\\LaravelSlovakNamedays\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa64d7e549694d76dbffcdedf5e3249f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa64d7e549694d76dbffcdedf5e3249f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaa64d7e549694d76dbffcdedf5e3249f::$classMap;

        }, null, ClassLoader::class);
    }
}