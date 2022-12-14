<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4f618bda911a3dd288ddc3be8fb9e61
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4f618bda911a3dd288ddc3be8fb9e61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4f618bda911a3dd288ddc3be8fb9e61::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd4f618bda911a3dd288ddc3be8fb9e61::$classMap;

        }, null, ClassLoader::class);
    }
}
