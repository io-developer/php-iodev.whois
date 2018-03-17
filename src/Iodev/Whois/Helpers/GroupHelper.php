<?php

namespace Iodev\Whois\Helpers;

class GroupHelper
{
    /**
     * @param array $group
     * @param string[] $keys
     * @param bool $ignoreCase
     * @return string
     */
    public static function matchFirst($group, $keys, $ignoreCase = true)
    {
        if ($ignoreCase) {
            foreach ($group as $k => $v) {
                $group[mb_strtolower($k)] = $v;
            }
        }
        foreach ($keys as $k) {
            $k = $ignoreCase ? mb_strtolower($k) : $k;
            if (isset($group[$k])) {
                return $group[$k];
            }
        }
        return "";
    }

    /**
     * @param array $groups
     * @param string $domain
     * @param string[] $domainKeys
     * @return array
     */
    public static function findDomainGroup($groups, $domain, $domainKeys)
    {
        foreach ($groups as $group) {
            $foundDomain = self::getAsciiServer($group, $domainKeys);
            if ($foundDomain && DomainHelper::compareNames($foundDomain, $domain)) {
                return $group;
            }
        }
        return null;
    }

    /**
     * @param array $group
     * @param string[] $keys
     * @return string
     */
    public static function getAsciiServer($group, $keys)
    {
        return DomainHelper::toAscii(self::matchFirst($group, $keys));
    }

    /**
     * @param array $group
     * @param string[] $keys
     * @return string[]
     */
    public static function getAsciiServers($group, $keys)
    {
        $raws = self::matchFirst($group, $keys);
        $raws = !empty($raws) ? $raws : [];
        $raws = is_array($raws) ? $raws : [ $raws ];
        $servers = [];
        foreach ($raws as $raw) {
            $s = trim(DomainHelper::toAscii($raw));
            if (!empty($s)) {
                $servers[] = $s;
            }
        }
        return $servers;
    }

    /**
     * @param array $group
     * @param string[] $keys
     * @param array $keysGroups
     * @return string[]
     */
    public static function getAsciiServersComplex($group, $keys, $keysGroups = null)
    {
        $servers = self::getAsciiServers($group, $keys);
        if (!empty($servers) || empty($keysGroups)) {
            return $servers;
        }
        foreach ($keysGroups as $keysGroup) {
            foreach ($keysGroup as $key) {
                $servers = array_merge($servers, self::getAsciiServers($group, [ $key ]));
            }
        }
        return $servers;
    }

    /**
     * @param array $group
     * @param string[] $keys
     * @return int
     */
    public static function getUnixtime($group, $keys)
    {
        return DateHelper::parseDate(self::matchFirst($group, $keys));
    }
}
