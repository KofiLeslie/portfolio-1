<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf72fbc0012fe7d60edf75859c2f3b2cd
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitf72fbc0012fe7d60edf75859c2f3b2cd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf72fbc0012fe7d60edf75859c2f3b2cd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf72fbc0012fe7d60edf75859c2f3b2cd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
