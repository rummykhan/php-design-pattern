<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd56f8a5e9989d099b3fd444f3f00211
{
    public static $classMap = array (
        'EmailUser' => __DIR__ . '/../..' . '/src/EmailUser.php',
        'LoggedIn' => __DIR__ . '/../..' . '/src/LoggedIn.php',
        'NotifyStakeHolders' => __DIR__ . '/../..' . '/src/NotifyStakeHolders.php',
        'Observer' => __DIR__ . '/../..' . '/src/Observer.php',
        'Subject' => __DIR__ . '/../..' . '/src/Subject.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitdd56f8a5e9989d099b3fd444f3f00211::$classMap;

        }, null, ClassLoader::class);
    }
}
