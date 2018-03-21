<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d532e502a3d2f7153b4e47dd71c8c14
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d532e502a3d2f7153b4e47dd71c8c14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d532e502a3d2f7153b4e47dd71c8c14::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
