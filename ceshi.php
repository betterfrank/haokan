<?php
/**
 * ceshi.php
 * Author: kaixuan
 * Time: 2017/3/9 14:17
 */
$pattern="#\d#";
$sub='1321slfdsd';
$re=preg_match_all($pattern,$sub,$mat);
//print_r($mat);

phpinfo();
xdebug_start_trace();

$pattern="#\d#";
$sub='1321slfdsd';
$re=preg_match_all($pattern,$sub,$mat);
print_r($mat);
xdebug_stop_trace();