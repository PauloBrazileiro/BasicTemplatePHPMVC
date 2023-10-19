<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit121e8eb3b575856cd675f4a6c7f07772
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

        spl_autoload_register(array('ComposerAutoloaderInit121e8eb3b575856cd675f4a6c7f07772', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit121e8eb3b575856cd675f4a6c7f07772', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit121e8eb3b575856cd675f4a6c7f07772::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}