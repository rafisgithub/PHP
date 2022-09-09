<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit48e2ba8acc1394f5989b8d39380f36de
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

        spl_autoload_register(array('ComposerAutoloaderInit48e2ba8acc1394f5989b8d39380f36de', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit48e2ba8acc1394f5989b8d39380f36de', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit48e2ba8acc1394f5989b8d39380f36de::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}