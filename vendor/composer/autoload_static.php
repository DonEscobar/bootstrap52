<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5c515f36e7b825f3f84b80ac01f24e1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aidantwoods\\SecureHeaders\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aidantwoods\\SecureHeaders\\' => 
        array (
            0 => __DIR__ . '/..' . '/aidantwoods/secureheaders/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5c515f36e7b825f3f84b80ac01f24e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5c515f36e7b825f3f84b80ac01f24e1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
