<?php

namespace Iodev\Whois;

class ServerTest extends \PHPUnit_Framework_TestCase
{
    private static function getServerClass()
    {
        return '\Iodev\Whois\Server';
    }

    private static function getParser()
    {
        return Parser::createByClass(self::getParserClass());
    }

    private static function getParserClass()
    {
        return '\TestCommonParser';
    }


    public function testConstructValid()
    {
        new Server(".abc", "some.host.com", false, self::getParser());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testConstructEmptyZone()
    {
        new Server("", "some.host.com", false, self::getParser());
    }

    /**
    * @expectedException \InvalidArgumentException
    */
    public function testConstructEmptyHost()
    {
        new Server(".abc", "", false, self::getParser());
    }

    public function testGetZone()
    {
        $s = new Server(".abc", "some.host.com", false, self::getParser());
        self::assertEquals(".abc", $s->getZone());
    }

    public function testGetHost()
    {
        $s = new Server(".abc", "some.host.com", false, self::getParser());
        self::assertEquals("some.host.com", $s->getHost());
    }

    public function testIsCentralizedTrue()
    {
        $s = new Server(".abc", "some.host.com", true, self::getParser());
        self::assertTrue($s->isCentralized());

        $s = new Server(".abc", "some.host.com", 1, self::getParser());
        self::assertTrue($s->isCentralized());
    }

    public function testIsCentralizedFalse()
    {
        $s = new Server(".abc", "some.host.com", false, self::getParser());
        self::assertFalse($s->isCentralized());

        $s = new Server(".abc", "some.host.com", 0, self::getParser());
        self::assertFalse($s->isCentralized());
    }

    public function testGetParserViaInstance()
    {
        $p = self::getParser();
        $s = new Server(".abc", "some.host.com", false, $p);
        self::assertSame($p, $s->getParser());
    }

    public function testIsDomainZoneValid()
    {
        $s = new Server(".abc", "some.host.com", false, self::getParser());
        self::assertTrue($s->isDomainZone("some.abc"));
    }

    public function testIsDomainZoneValidComplex()
    {
        $s = new Server(".abc", "some.host.com", false, self::getParser());
        self::assertTrue($s->isDomainZone("some.foo.bar.abc"));
    }

    public function testIsDomainZoneInvalid()
    {
        $s = new Server(".abc", "some.host.com", false, self::getParser());
        self::assertFalse($s->isDomainZone("some.com"));
    }

    public function testIsDomainZoneInvalidEnd()
    {
        $s = new Server(".foo.bar", "some.host.com", false, self::getParser());
        self::assertFalse($s->isDomainZone("some.bar"));
    }


    public function testFromDataFullArgs()
    {
        $s = Server::fromData([
            "zone" => ".abc",
            "host" => "some.host",
            "centralized" => true,
            "parser_class" => self::getParserClass(),
        ]);

        self::assertEquals(".abc", $s->getZone());
        self::assertEquals("some.host", $s->getHost());
        self::assertTrue($s->isCentralized());
        self::assertInstanceOf(self::getParserClass(), $s->getParser());
    }

    public function testFromDataZoneHostOnly()
    {
        $s = Server::fromData([ "zone" => ".abc", "host" => "some.host" ], self::getParser());

        self::assertEquals(".abc", $s->getZone());
        self::assertEquals("some.host", $s->getHost());
        self::assertFalse($s->isCentralized());
        self::assertInstanceOf(self::getParserClass(), $s->getParser());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testFromDataMissingZone()
    {
        Server::fromData([ "host" => "some.host" ], self::getParser());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testFromDataMissingHost()
    {
        Server::fromData([ "zone" => ".abc" ], self::getParser());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testFromDataMissingAll()
    {
        Server::fromData([], self::getParser());
    }

    public function testFromDataListOne()
    {
        $s = Server::fromDataList(
            [ [ "zone" => ".abc", "host" => "some.host" ] ],
            self::getParser()
        );
        self::assertTrue(is_array($s), "Array expected");
        self::assertEquals(1, count($s));
        self::assertInstanceOf(self::getServerClass(), $s[0]);
        self::assertEquals(".abc", $s[0]->getZone());
        self::assertEquals("some.host", $s[0]->getHost());
        self::assertInstanceOf(self::getParserClass(), $s[0]->getParser());
    }

    public function testFromDataListTwo()
    {
        $s = Server::fromDataList([
                [ "zone" => ".abc", "host" => "some.host" ],
                [ "zone" => ".cde", "host" => "other.host", "centralized" => true ],
            ],
            self::getParser()
        );
        self::assertTrue(is_array($s), "Array expected");
        self::assertEquals(2, count($s));

        self::assertInstanceOf(self::getServerClass(), $s[0]);
        self::assertEquals(".abc", $s[0]->getZone());
        self::assertEquals("some.host", $s[0]->getHost());
        self::assertFalse($s[0]->isCentralized());
        self::assertInstanceOf(self::getParserClass(), $s[0]->getParser());

        self::assertInstanceOf(self::getServerClass(), $s[1]);
        self::assertEquals(".cde", $s[1]->getZone());
        self::assertEquals("other.host", $s[1]->getHost());
        self::assertTrue($s[1]->isCentralized());
        self::assertInstanceOf(self::getParserClass(), $s[1]->getParser());
    }
}
