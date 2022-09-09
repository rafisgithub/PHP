<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7380ffe05bb4c4879b5eaae68b9ebf8f
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

        spl_autoload_register(array('ComposerAutoloaderInit7380ffe05bb4c4879b5eaae68b9ebf8f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7380ffe05bb4c4879b5eaae68b9ebf8f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7380ffe05bb4c4879b5eaae68b9ebf8f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}