<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit840f1aad5a8afa7148f78a9d874ca4b3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MCDev\\Components\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MCDev\\Components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit840f1aad5a8afa7148f78a9d874ca4b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit840f1aad5a8afa7148f78a9d874ca4b3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
