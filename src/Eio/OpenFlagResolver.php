<?php

namespace React\Filesystem\Eio;

use React\Filesystem\FlagResolver;

class OpenFlagResolver extends FlagResolver
{
    const DEFAULT_FLAG = EIO_O_NONBLOCK;

    protected $flagMapping = [
        '+' => EIO_O_RDWR,
        'a' => EIO_O_APPEND,
        'c' => EIO_O_CREAT,
        'e' => EIO_O_EXCL,
        'f' => EIO_O_FSYNC,
        'n' => EIO_O_NONBLOCK,
        'r' => EIO_O_RDONLY,
        't' => EIO_O_TRUNC,
        'w' => EIO_O_WRONLY,
    ];

    public function defaultFlags() {
        return static::DEFAULT_FLAG;
    }
}
