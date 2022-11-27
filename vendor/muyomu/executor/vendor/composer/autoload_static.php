<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f458cf6d0953782887f098b0bda9528
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'muyomu\\router\\' => 14,
            'muyomu\\log4p\\' => 13,
            'muyomu\\http\\' => 12,
            'muyomu\\executor\\' => 16,
            'muyomu\\database\\' => 16,
            'muyomu\\config\\' => 14,
            'muyomu\\aop\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'muyomu\\router\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/router/src',
        ),
        'muyomu\\log4p\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/log4p/src',
        ),
        'muyomu\\http\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/http/src',
        ),
        'muyomu\\executor\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'muyomu\\database\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/database/src',
        ),
        'muyomu\\config\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/config/src',
        ),
        'muyomu\\aop\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/aop/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f458cf6d0953782887f098b0bda9528::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f458cf6d0953782887f098b0bda9528::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f458cf6d0953782887f098b0bda9528::$classMap;

        }, null, ClassLoader::class);
    }
}