<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89c6f2c8c29571f5ada5a0075fb64507
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'ST\\' => 3,
        ),
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ST\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'MatthiasMullie\\Minify\\CSS' => __DIR__ . '/../..' . '/src/MatthiasMullie/Minify/src/CSS.php',
        'MatthiasMullie\\Minify\\Exception' => __DIR__ . '/../..' . '/src/MatthiasMullie/Minify/src/Exception.php',
        'MatthiasMullie\\Minify\\Exceptions\\BasicException' => __DIR__ . '/../..' . '/src/MatthiasMullie/Minify/src/Exceptions/BasicException.php',
        'MatthiasMullie\\Minify\\Exceptions\\FileImportException' => __DIR__ . '/../..' . '/src/MatthiasMullie/Minify/src/Exceptions/FileImportException.php',
        'MatthiasMullie\\Minify\\Exceptions\\IOException' => __DIR__ . '/../..' . '/src/MatthiasMullie/Minify/src/Exceptions/IOException.php',
        'MatthiasMullie\\Minify\\JS' => __DIR__ . '/../..' . '/src/MatthiasMullie/Minify/src/JS.php',
        'MatthiasMullie\\Minify\\Minify' => __DIR__ . '/../..' . '/src/MatthiasMullie/Minify/src/Minify.php',
        'MatthiasMullie\\PathConverter\\Converter' => __DIR__ . '/../..' . '/src/MatthiasMullie/PathConverter/src/Converter.php',
        'MatthiasMullie\\PathConverter\\ConverterInterface' => __DIR__ . '/../..' . '/src/MatthiasMullie/PathConverter/src/ConverterInterface.php',
        'MatthiasMullie\\PathConverter\\NoConverter' => __DIR__ . '/../..' . '/src/MatthiasMullie/PathConverter/src/NoConverter.php',
        'ST\\Minify\\Minifier' => __DIR__ . '/../..' . '/src/Minify/Minifier.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89c6f2c8c29571f5ada5a0075fb64507::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89c6f2c8c29571f5ada5a0075fb64507::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit89c6f2c8c29571f5ada5a0075fb64507::$classMap;

        }, null, ClassLoader::class);
    }
}
