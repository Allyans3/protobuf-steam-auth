<?php

namespace SteamAuth\Traits;

trait CookieMethods
{
    /**
     * @return array|mixed
     */
    public function getCookies()
    {
        return $this->cookieStorage;
    }

    /**
     * @param string $host
     * @return array|mixed
     */
    public function getCookiesByHost(string $host = self::MAIN_HOST)
    {
        if (array_key_exists($host, $this->cookieStorage))
            return $this->cookieStorage[$host];

        return [];
    }

    /**
     * @param $cookies
     * @param string $host
     */
    public function updateCookieStorage($cookies, string $host = self::MAIN_HOST)
    {
        foreach ($cookies as $key => $value) {
            $this->cookieStorage[$host][$key] = $value;
        }
    }
}