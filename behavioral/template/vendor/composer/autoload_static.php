<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd6666c3fee7861fe8d20f1d124045d7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd6666c3fee7861fe8d20f1d124045d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd6666c3fee7861fe8d20f1d124045d7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}