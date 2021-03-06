<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit00f767c50427d3d49b48cc35561fbffa
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

        spl_autoload_register(array('ComposerAutoloaderInit00f767c50427d3d49b48cc35561fbffa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit00f767c50427d3d49b48cc35561fbffa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit00f767c50427d3d49b48cc35561fbffa::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
