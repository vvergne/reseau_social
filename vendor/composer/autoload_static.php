<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd46e68c2461d4e3f47c83f97cefa3aa7
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd46e68c2461d4e3f47c83f97cefa3aa7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd46e68c2461d4e3f47c83f97cefa3aa7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}