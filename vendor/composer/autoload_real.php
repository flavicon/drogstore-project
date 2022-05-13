<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite1039a422d47a9649a1e5a13e04f6b61
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

        spl_autoload_register(array('ComposerAutoloaderInite1039a422d47a9649a1e5a13e04f6b61', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite1039a422d47a9649a1e5a13e04f6b61', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite1039a422d47a9649a1e5a13e04f6b61::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}