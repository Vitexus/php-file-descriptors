<?php declare(strict_types=1);

namespace WyriHaximus\Tests\FileDescriptors;

use PHPUnit\Framework\TestCase;
use WyriHaximus\FileDescriptors\Factory;

/**
 * @internal
 */
final class FactoryTest extends TestCase
{
    public function testCreate()
    {
        if (\DIRECTORY_SEPARATOR === '\\') {
            self::setExpectedException('WyriHaximus\FileDescriptors\NoCompatibleListerException', 'No suitable lister found');
        }

        self::assertInstanceOf('WyriHaximus\FileDescriptors\ListerInterface', Factory::create());
    }
}
