<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/pingxiang-portal-config/src/SmartyConfig/Px',
            S_ROOT.'vendor/qixinyun/pingxiang-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/pingxiang-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
