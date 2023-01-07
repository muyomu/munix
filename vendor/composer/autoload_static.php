<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe3febd0604170dde1689a507d1d9e72
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'muyomu\\router\\' => 14,
            'muyomu\\punit\\' => 13,
            'muyomu\\middleware\\' => 18,
            'muyomu\\log4p\\' => 13,
            'muyomu\\inject\\' => 14,
            'muyomu\\http\\' => 12,
            'muyomu\\framework\\' => 17,
            'muyomu\\filter\\' => 14,
            'muyomu\\executor\\' => 16,
            'muyomu\\dpara\\' => 13,
            'muyomu\\database\\' => 16,
            'muyomu\\config\\' => 14,
            'muyomu\\auth\\' => 12,
            'muyomu\\aop\\' => 11,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'muyomu\\router\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/router/src',
        ),
        'muyomu\\punit\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/punit/src',
        ),
        'muyomu\\middleware\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/middleware/src',
        ),
        'muyomu\\log4p\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/log4p/src',
        ),
        'muyomu\\inject\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/inject/src',
        ),
        'muyomu\\http\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/http/src',
        ),
        'muyomu\\framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/framework/src',
        ),
        'muyomu\\filter\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/filter/src',
        ),
        'muyomu\\executor\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/executor/src',
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
            0 => __DIR__ . '/..' . '/muyomu/security/src',
        ),
        'muyomu\\aop\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/aop/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe3febd0604170dde1689a507d1d9e72::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe3febd0604170dde1689a507d1d9e72::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbe3febd0604170dde1689a507d1d9e72::$classMap;

        }, null, ClassLoader::class);
    }
}
