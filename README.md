<p align="center"><a href="https://github.com/Allyans3/protobuf-steam-auth" target="_blank"><img src="https://raw.githubusercontent.com/Allyans3/protobuf-steam-auth/master/images/protobuf-steam-auth-logo.png" width="600" alt="Protobuf-Steam-Auth"></a></p>

<p align="center">
<a href="https://packagist.org/packages/allyans3/protobuf-steam-auth"><img src="https://img.shields.io/packagist/v/allyans3/protobuf-steam-auth?style=flat-square&logo=Composer" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/allyans3/protobuf-steam-auth"><img src="https://img.shields.io/packagist/dt/allyans3/protobuf-steam-auth?style=flat-square&logo=Composer" alt="Total Downloads"></a>
<a href="https://github.com/Allyans3/steam-market-api-v2"><img src="https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fgithub.com%2FAllyans3%2Fprotobuf-steam-auth&count_bg=%2344CC10&title_bg=%23555555&icon=github.svg&icon_color=%23E7E7E7&title=visitors&edge_flat=true" alt="Visitors count"></a>
<a href="https://github.com/Allyans3/protobuf-steam-auth"><img src="https://img.shields.io/packagist/l/Allyans3/protobuf-steam-auth?style=flat-square&color=3555555" alt="License"></a>
</p>

> To use this package you need to install php extension `protobuf`. Installation instructions are below.

## About Protobuf Steam Auth

This package provides the ability to authorize to the Steam using Google Protobuf. Support PHP 7+ and PHP 8+.

## Installation

1. Run this text in a console to install this package from Packagist:

```
composer require allyans3/protobuf-steam-auth
```

2. Copy folder `protobuf-ext` from `/vendor/allyans3/protobuf-steam-auth` to your project:

```
cp -a /vendor/allyans3/protobuf-steam-auth/protobuf-ext .
```

3. Build php extension with next commands choosing between `php 7` and `php 8` (Thanks to [Tankonyako](https://github.com/Tankonyako)):

```
cd protobuf-ext/php7 // For PHP 7
cd protobuf-ext/php8 // For PHP 8

phpize
./configure
make
make install
```

4. Add line `extension=protobuf.so` to your php.ini file

## Usage

```php
use SteamAuth\SteamAuth;

require "vendor/autoload.php";

$auth = new SteamAuth('login', 'password', 'shared_secret');

$auth->login();

// You can check if you are authorized
$auth->isAuthorized();

// If auth `true` you can get cookies
$auth->getCookies();
// or by host
$auth->getCookiesByHost();

```

## Cookie storage

By default, cookie saves in `$cookieStorage` attribute and can be retrieved by `getCookies()` or `getCookiesByHost()` methods.

Optional, you can specify the path to your cookie file in `cookie_file` key.

Also, you can send your cookies as array to `cookie_storage` key.

```php
use SteamAuth\SteamAuth;

require "vendor/autoload.php";

$cookieOptions = [
    'cookie_file' => 'path_to_cookie_file',
    
    'cookie_storage' => [
        "steamcommunity.com" => [
            "sessionid"         => "*******",
            "steamCountry"      => "*******",
            "steamLoginSecure"  => "*******"
        ],
        "store.steampowered.com" => [
            "sessionid"         => "*******",
            "steamLoginSecure"  => "*******"
        ],
        "help.steampowered.com" => [
            "sessionid"         => "*******",
            "steamLoginSecure"  => "*******"
        ],
        "steam.tv" => [
            "sessionid"         => "*******",
            "steamCountry"      => "*******",
            "steamLoginSecure"  => "*******"
        ]
    ]   
];

$auth = new SteamAuth('login', 'password', 'shared_secret', $cookieOptions);
```


## Handle Exceptions

```php
use SteamAuth\SteamAuth;

require "vendor/autoload.php";

$auth = new SteamAuth('login', 'password', 'shared_secret');

try {
    $auth->login();
} catch (\SteamAuth\Exceptions\SteamErrorException $e) {
    $e->getMessage();
} catch (\SteamAuth\Exceptions\SteamResponseException $e) {
    $e->getMessage();
}
```

## Support

Report bugs on the [issue tracker](https://github.com/Allyans3/protobuf-steam-auth/issues).

## License

Protobuf Steam Auth is open-sourced Composer package licensed under the [MIT license](https://opensource.org/licenses/MIT).