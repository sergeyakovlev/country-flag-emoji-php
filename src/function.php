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

namespace SergeYakovlev\CountryFlagEmoji;

/**
 * Returns the country flag emoji.
 *
 * @param string $countryIsoAlpha2
 * @param ?string $extLeft
 * @param ?string $extRight
 * @return string
 */
function country_flag_emoji(string $countryIsoAlpha2, ?string $extLeft = null, ?string $extRight = null): string
{
    $unicodePrefix = "\xF0\x9F\x87";
    $unicodeAdditionForLowerCase = 0x45;
    $unicodeAdditionForUpperCase = 0x65;

    if (preg_match('/^[A-Z]{2}$/', $countryIsoAlpha2)) {
        $emoji = $unicodePrefix . chr(ord($countryIsoAlpha2[0]) + $unicodeAdditionForUpperCase)
               . $unicodePrefix . chr(ord($countryIsoAlpha2[1]) + $unicodeAdditionForUpperCase);
    } elseif (preg_match('/^[a-z]{2}$/', $countryIsoAlpha2)) {
        $emoji = $unicodePrefix . chr(ord($countryIsoAlpha2[0]) + $unicodeAdditionForLowerCase)
               . $unicodePrefix . chr(ord($countryIsoAlpha2[1]) + $unicodeAdditionForLowerCase);
    } else {
        $emoji = '';
    }

    return strlen($emoji) ? ($extLeft ?? '') . $emoji . ($extRight ?? '') : '';
}
