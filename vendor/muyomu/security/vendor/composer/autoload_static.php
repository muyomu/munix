<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2c5ce355ae324a1834d914bfd363fb0
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'muyomu\\router\\' => 14,
            'muyomu\\middleware\\' => 18,
            'muyomu\\log4p\\' => 13,
            'muyomu\\http\\' => 12,
            'muyomu\\dpara\\' => 13,
            'muyomu\\database\\' => 16,
            'muyomu\\config\\' => 14,
            'muyomu\\auth\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'muyomu\\router\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/router/src',
        ),
        'muyomu\\middleware\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/middleware/src',
        ),
        'muyomu\\log4p\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/log4p/src',
        ),
        'muyomu\\http\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/http/src',
        ),
        'muyomu\\dpara\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/dynamic/src',
        ),
        'muyomu\\database\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/database/src',
        ),
        'muyomu\\config\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/config/src',
        ),
        'muyomu\\auth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2c5ce355ae324a1834d914bfd363fb0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2c5ce355ae324a1834d914bfd363fb0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite2c5ce355ae324a1834d914bfd363fb0::$classMap;

        }, null, ClassLoader::class);
    }
}
