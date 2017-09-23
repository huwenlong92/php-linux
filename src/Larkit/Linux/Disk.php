<?php
/**
 * Created by PhpStorm.
 * User: henly
 * Date: 2017/9/23
 * Time: 23:50
 */

namespace Larkit\Linux;


class Disk
{
    public static function used_status()
    {
        $fp = popen('df -lh | grep -E "^(/)"', "r");
        $rs = fread($fp, 1024);
        pclose($fp);
        $rs = preg_replace("/\s{2,}/", ' ', $rs); //把多个空格换成 “_”
        $hd = explode(" ", $rs);
        

        print_r($hd);
        $hd_avail = trim($hd[3], 'G'); //磁盘可用空间大小 单位G
        $hd_usage = trim($hd[4], '%'); //挂载点 百分比

    }
}