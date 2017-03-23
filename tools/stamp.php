<?php
if (count($argv) == 1) {
    printf("%s\n%s\n", date("Y-m-d H:i:s"), time());
    exit(0);
}

$param = $argv[1];

// 判断是日期还是时间戳
$param = strval($param);
if (substr($param, 0, 2) < 19 ) {
    $is_stamp = true;
    printf("%s\n%s\n", $param,  date("Y-m-d H:i:s", $param));
    exit(0);
} else {
    $is_stamp = false;
    printf("%s\n%s\n", $param,  strtotime($param));
    exit(0);
}
