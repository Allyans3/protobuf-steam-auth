<p align="center"><a href="https://github.com/Allyans3/protobuf-steam-auth" target="_blank"><img src="https://raw.githubusercontent.com/Allyans3/protobuf-steam-auth/master/images/protobuf-steam-auth-logo.png" width="600" alt="Protobuf-Steam-Auth"></a></p>

<p align="center">
<a href="https://packagist.org/packages/Allyans3/protobuf-steam-auth"><img src="https://img.shields.io/packagist/v/Allyans3/protobuf-steam-auth?style=flat-square&logo=Composer" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/Allyans3/protobuf-steam-auth"><img src="https://img.shields.io/packagist/dt/Allyans3/protobuf-steam-auth?style=flat-square&logo=Composer" alt="Total Downloads"></a>
<a href="https://github.com/Allyans3/protobuf-steam-auth"><img src="https://img.shields.io/packagist/l/Allyans3/protobuf-steam-auth?style=flat-square&color=3555555" alt="License"></a>
</p>

## About Protobuf Steam Auth

This package provides the ability to authorize to the Steam using Google Protobuf.

## Installation

Run this text in a console to install this package from Packagist:

```
composer require allyans3/protobuf-steam-auth
```

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