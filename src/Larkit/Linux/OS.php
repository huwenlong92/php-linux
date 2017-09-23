<?php
/**
 * Created by PhpStorm.
 * User: henly
 * Date: 2017/9/23
 * Time: 23:58
 */

namespace Larkit\Linux;


class OS
{
    public static function get_os_type()
    {
        if ('Darwin' == PHP_OS) {
            return 'Mac';
        } elseif ('Linux' == PHP_OS) {
            return 'Linux';
        } else {
            return 'Unknown';
        }
    }
}