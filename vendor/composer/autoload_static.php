<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb004ff8a73c14396c4a9a2b12d302de3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Azozzalfiras\\DeepseekApi\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Azozzalfiras\\DeepseekApi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb004ff8a73c14396c4a9a2b12d302de3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb004ff8a73c14396c4a9a2b12d302de3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb004ff8a73c14396c4a9a2b12d302de3::$classMap;

        }, null, ClassLoader::class);
    }
}
