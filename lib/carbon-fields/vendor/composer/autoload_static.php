<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit156ccfdb268285d4e03912d0b91bbd75
{
    public static $files = array (
        '1db9a602f20508d50525f9dad168786f' => __DIR__ . '/..' . '/htmlburger/carbon-field-icon/core/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
            'Carbon_Fields_Plugin\\' => 21,
            'Carbon_Fields\\' => 14,
            'Carbon_Field_Icon\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Carbon_Fields_Plugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
        'Carbon_Field_Icon\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-field-icon/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit156ccfdb268285d4e03912d0b91bbd75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit156ccfdb268285d4e03912d0b91bbd75::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit156ccfdb268285d4e03912d0b91bbd75::$classMap;

        }, null, ClassLoader::class);
    }
}
