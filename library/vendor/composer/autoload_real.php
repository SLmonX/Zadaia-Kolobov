<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit70f9316b52c80cea8883390e7f3ab42f
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

        spl_autoload_register(array('ComposerAutoloaderInit70f9316b52c80cea8883390e7f3ab42f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit70f9316b52c80cea8883390e7f3ab42f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit70f9316b52c80cea8883390e7f3ab42f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
