<?php

namespace SteamAuth\Traits;

use Ramsey\Uuid\Uuid;
use SteamTotp\SteamTotp;

trait UsefulMethods
{
    // Get parameters for Mobile Methods

    /**
     * @param string $version
     * @return string
     */
    public function getDeviceIdByUuid(string $version = 'v4'): string
    {
        switch ($version) {
            case 'v1':
                $uuid = Uuid::uuid1()->toString();
                break;
            case 'v6':
                $uuid = Uuid::uuid6()->toString();
                break;
            default:
                $uuid = Uuid::uuid4()->toString();
        }

        return "android:$uuid";
    }

    /**
     * @param string|int $steamid Your SteamID in 64-bit format (as a string or integer)
     * @return string
     */
    public function getDeviceIdBySteamId($steamId): string
    {
        return SteamTotp::getDeviceID($steamId);
    }
}