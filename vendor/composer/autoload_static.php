<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2173b0aca6a9e0cebdb5b1ed4441692
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite2173b0aca6a9e0cebdb5b1ed4441692::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite2173b0aca6a9e0cebdb5b1ed4441692::$classMap;

        }, null, ClassLoader::class);
    }
}