<?php
   
use Carbon\Carbon;

/**
 * Write code for dynamic Date fromate change
 *
 * @return response()
 */
function dynamicDateFormat($date, $toType) {
    if (empty($date)) {
        return '-';
    }
    return Carbon::parse($date)
                    ->format(getDateFormat($toType));
}

/**
 * Write code for get Date Format
 *
 * @return response()
 */
function getDateFormat($type) {
    $dateFormat = [
        1 => 'Y-m-d H:i:s',
        2 => 'Y-m-d',
        3 => 'm/d/Y - h:m A',
        4 => 'd/m/Y - h:m A',
        5 => 'm/d/Y',
        6 => 'd/m/Y',
        7 => 'h:m A',
        8 => 'h:m:i',
    ];
    return $dateFormat[$type];
}