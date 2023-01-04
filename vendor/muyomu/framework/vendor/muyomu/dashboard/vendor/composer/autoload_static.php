<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit201ba1476c30ea56d1990ccf9768ee3d
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'muyomu\\router\\' => 14,
            'muyomu\\middleware\\' => 18,
            'muyomu\\log4p\\' => 13,
            'muyomu\\http\\' => 12,
            'muyomu\\database\\' => 16,
            'muyomu\\dashboard\\' => 17,
            'muyomu\\config\\' => 14,
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
        'muyomu\\database\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/database/src',
        ),
        'muyomu\\dashboard\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'muyomu\\config\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/config/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit201ba1476c30ea56d1990ccf9768ee3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit201ba1476c30ea56d1990ccf9768ee3d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit201ba1476c30ea56d1990ccf9768ee3d::$classMap;

        }, null, ClassLoader::class);
    }
}
