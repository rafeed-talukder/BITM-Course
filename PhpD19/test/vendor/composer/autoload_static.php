<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite29fbb5df20b4a47bcad9b3a30eaee28
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite29fbb5df20b4a47bcad9b3a30eaee28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite29fbb5df20b4a47bcad9b3a30eaee28::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite29fbb5df20b4a47bcad9b3a30eaee28::$classMap;

        }, null, ClassLoader::class);
    }
}
