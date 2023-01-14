<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7e424b66f806c95595ef9c2c83dff040
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

        spl_autoload_register(array('ComposerAutoloaderInit7e424b66f806c95595ef9c2c83dff040', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7e424b66f806c95595ef9c2c83dff040', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7e424b66f806c95595ef9c2c83dff040::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}