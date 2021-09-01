<?php

/**
 * This file is part of the Country Flag Emoji package.
 *
 * @author Serge Yakovlev <serge.yakovlev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace SergeYakovlev\CountryFlagEmoji\Tests;

use PHPUnit\Framework\TestCase;

use function SergeYakovlev\CountryFlagEmoji\country_flag_emoji;

class CountryFlagEmojiTest extends TestCase
{
    public function testUpperCaseIsoCodeOnly()
    {
        $this->assertSame('🇷🇺', country_flag_emoji('RU'));
    }

    public function testUpperCaseIsoCodeWithAOneExtension()
    {
        $this->assertSame('&nbsp;🇷🇺', country_flag_emoji('RU', '&nbsp;'));

        $this->assertSame('&nbsp;🇷🇺', country_flag_emoji('RU', '&nbsp;', null));
        $this->assertSame('&nbsp;🇷🇺', country_flag_emoji('RU', '&nbsp;', ''));

        $this->assertSame('🇷🇺&nbsp;', country_flag_emoji('RU', null, '&nbsp;'));
        $this->assertSame('🇷🇺&nbsp;', country_flag_emoji('RU', '', '&nbsp;'));

        $this->assertSame(' 🇷🇺', country_flag_emoji('RU', ' '));

        $this->assertSame(' 🇷🇺', country_flag_emoji('RU', ' ', null));
        $this->assertSame(' 🇷🇺', country_flag_emoji('RU', ' ', ''));

        $this->assertSame('🇷🇺 ', country_flag_emoji('RU', null, ' '));
        $this->assertSame('🇷🇺 ', country_flag_emoji('RU', '', ' '));
    }

    public function testUpperCaseIsoCodeWithATwoExtensions()
    {
        $this->assertSame('&nbsp;🇷🇺&nbsp;', country_flag_emoji('RU', '&nbsp;', '&nbsp;'));
        $this->assertSame('&nbsp;🇷🇺 ', country_flag_emoji('RU', '&nbsp;', ' '));
        $this->assertSame(' 🇷🇺&nbsp;', country_flag_emoji('RU', ' ', '&nbsp;'));
        $this->assertSame(' 🇷🇺 ', country_flag_emoji('RU', ' ', ' '));
    }

    public function testLowerCaseIsoCodeOnly()
    {
        $this->assertSame('🇷🇺', country_flag_emoji('ru'));
    }

    public function testLowerCaseIsoCodeWithAOneExtension()
    {
        $this->assertSame('&nbsp;🇷🇺', country_flag_emoji('ru', '&nbsp;'));

        $this->assertSame('&nbsp;🇷🇺', country_flag_emoji('ru', '&nbsp;', null));
        $this->assertSame('&nbsp;🇷🇺', country_flag_emoji('ru', '&nbsp;', ''));

        $this->assertSame('🇷🇺&nbsp;', country_flag_emoji('ru', null, '&nbsp;'));
        $this->assertSame('🇷🇺&nbsp;', country_flag_emoji('ru', '', '&nbsp;'));

        $this->assertSame(' 🇷🇺', country_flag_emoji('ru', ' '));

        $this->assertSame(' 🇷🇺', country_flag_emoji('ru', ' ', null));
        $this->assertSame(' 🇷🇺', country_flag_emoji('ru', ' ', ''));

        $this->assertSame('🇷🇺 ', country_flag_emoji('ru', null, ' '));
        $this->assertSame('🇷🇺 ', country_flag_emoji('ru', '', ' '));
    }

    public function testLowerCaseIsoCodeWithATwoExtensions()
    {
        $this->assertSame('&nbsp;🇷🇺&nbsp;', country_flag_emoji('ru', '&nbsp;', '&nbsp;'));
        $this->assertSame('&nbsp;🇷🇺 ', country_flag_emoji('ru', '&nbsp;',  ' '));
        $this->assertSame(' 🇷🇺&nbsp;', country_flag_emoji('ru', ' ', '&nbsp;'));
        $this->assertSame(' 🇷🇺 ', country_flag_emoji('ru', ' ', ' '));
    }

    public function testEmptyIsoCodeOnly()
    {
        $this->assertSame('', country_flag_emoji(''));
    }

    public function testEmptyIsoCodeWithAOneExtension()
    {
        $this->assertSame('', country_flag_emoji('', '&nbsp;'));

        $this->assertSame('', country_flag_emoji('', '&nbsp;', null));
        $this->assertSame('', country_flag_emoji('', '&nbsp;', ''));

        $this->assertSame('', country_flag_emoji('', null, '&nbsp;'));
        $this->assertSame('', country_flag_emoji('', '', '&nbsp;'));

        $this->assertSame('', country_flag_emoji('', ' '));

        $this->assertSame('', country_flag_emoji('', ' ', null));
        $this->assertSame('', country_flag_emoji('', ' ', ''));

        $this->assertSame('', country_flag_emoji('', null, ' '));
        $this->assertSame('', country_flag_emoji('', '', ' '));
    }

    public function testEmptyIsoCodeWithATwoExtensions()
    {
        $this->assertSame('', country_flag_emoji('', '&nbsp;', '&nbsp;'));
        $this->assertSame('', country_flag_emoji('', '&nbsp;',  ' '));
        $this->assertSame('', country_flag_emoji('', ' ', '&nbsp;'));
        $this->assertSame('', country_flag_emoji('', ' ', ' '));
    }

    public function testInvalidIsoCodeOnly()
    {
        $this->assertSame('', country_flag_emoji('InvalidISO'));
    }

    public function testInvalidIsoCodeWithAOneExtension()
    {
        $this->assertSame('', country_flag_emoji('InvalidISO', '&nbsp;'));

        $this->assertSame('', country_flag_emoji('InvalidISO', '&nbsp;', null));
        $this->assertSame('', country_flag_emoji('InvalidISO', '&nbsp;', ''));

        $this->assertSame('', country_flag_emoji('InvalidISO', null, '&nbsp;'));
        $this->assertSame('', country_flag_emoji('InvalidISO', '', '&nbsp;'));

        $this->assertSame('', country_flag_emoji('InvalidISO', ' '));

        $this->assertSame('', country_flag_emoji('InvalidISO', ' ', null));
        $this->assertSame('', country_flag_emoji('InvalidISO', ' ', ''));

        $this->assertSame('', country_flag_emoji('InvalidISO', null, ' '));
        $this->assertSame('', country_flag_emoji('InvalidISO', '', ' '));
    }

    public function testInvalidIsoCodeWithATwoExtensions()
    {
        $this->assertSame('', country_flag_emoji('InvalidISO', '&nbsp;', '&nbsp;'));
        $this->assertSame('', country_flag_emoji('InvalidISO', '&nbsp;',  ' '));
        $this->assertSame('', country_flag_emoji('InvalidISO', ' ', '&nbsp;'));
        $this->assertSame('', country_flag_emoji('InvalidISO', ' ', ' '));
    }
}
