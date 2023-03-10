<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd657319cadc3d015edf95cc406f86f43
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fhsinchy\\Inspire\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fhsinchy\\Inspire\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd657319cadc3d015edf95cc406f86f43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd657319cadc3d015edf95cc406f86f43::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd657319cadc3d015edf95cc406f86f43::$classMap;

        }, null, ClassLoader::class);
    }
}
