<?php
function es($data, $charset='UTF-8') {
    if (is_array($data)) {
        return array_map(__METHOD__, $data); # 재귀호출
    } else {
        return htmlspecialchars($data, ENT_QUOTES, $charset);
    }
}
function cken(array $data) {
    $result = true;
    foreach ($data as $key => $value) {
        if(is_array($value)) {
            $value = implode("", $value);
        }
        if (!mb_check_encoding($value, "UTF-8")) {
            $result = false;
            break;
        }
    }
    return $result;
}
function arrayToQueryString(array $variable) {
    $data = [];
    foreach ($variable as $key => $value) {
        $data[] = "{$key}={$value}";
    }
    $queryString = implode("&", $data);
    return $queryString;
}
function time_kr ($h = 0, $m = 0, $s = 0) {
    $time_kr = 60 * 60 * 9;
    $time_kr += 60 * 60 * $h;
    $time_kr += 60 * $m;
    $time_kr += $s;
    return time() + $time_kr;
}