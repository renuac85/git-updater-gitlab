<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7596a1f32bf61b35afb6e73faa97ee8e
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

        spl_autoload_register(array('ComposerAutoloaderInit7596a1f32bf61b35afb6e73faa97ee8e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7596a1f32bf61b35afb6e73faa97ee8e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7596a1f32bf61b35afb6e73faa97ee8e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
