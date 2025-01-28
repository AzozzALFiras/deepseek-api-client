<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb004ff8a73c14396c4a9a2b12d302de3
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb004ff8a73c14396c4a9a2b12d302de3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb004ff8a73c14396c4a9a2b12d302de3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb004ff8a73c14396c4a9a2b12d302de3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
