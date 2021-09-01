# Country Flag Emoji

A tiny PHP package to convert [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code to the country flag emoji Unicode character sequence.

For example, “RU” is converted to “🇷🇺”.

## Installation

Install via [Composer](https://getcomposer.org/):

```bash
$ composer require sergeyakovlev/country-flag-emoji
```

## Usage

```php
require_once '/path_to_project/vendor/autoload.php';

use function SergeYakovlev\CountryFlagEmoji\country_flag_emoji;

// ISO Code: "RU"
// Output: "🇷🇺"
echo country_flag_emoji('RU'), PHP_EOL;
// or
echo country_flag_emoji('RU', null, null), PHP_EOL;
// or
echo country_flag_emoji('RU', '', ''), PHP_EOL;

// ISO Code: "RU"
// Extension Left: "&nbsp;"
// Output: "&nbsp;🇷🇺"
echo country_flag_emoji('RU', '&nbsp;'), PHP_EOL;
// or
echo country_flag_emoji('RU', '&nbsp;', null), PHP_EOL;
// or
echo country_flag_emoji('RU', '&nbsp;', ''), PHP_EOL;

// ISO Code: "RU"
// Extension Right: "&nbsp;"
// Output: "🇷🇺&nbsp;Russia"
echo country_flag_emoji('RU', null, '&nbsp;'), 'Russia', PHP_EOL;
// or
echo country_flag_emoji('RU', '', '&nbsp;'), 'Russia', PHP_EOL;

// ISO Code: "RU"
// Extension Left: " "
// Extension Right: "&nbsp;"
// Output: " 🇷🇺&nbsp;Russia"
echo country_flag_emoji('RU', ' ', '&nbsp;'), 'Russia', PHP_EOL;
```
