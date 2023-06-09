<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd02a305c42c66320dc8eb72283c1a815
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 10,
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd02a305c42c66320dc8eb72283c1a815::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd02a305c42c66320dc8eb72283c1a815::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd02a305c42c66320dc8eb72283c1a815::$classMap;

        }, null, ClassLoader::class);
    }
}
