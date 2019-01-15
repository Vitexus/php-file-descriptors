<?php declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

use Exception;

final class NoCompatibleListerException extends Exception
{
    public static function create()
    {
        return new self('No suitable lister found');
    }
}
