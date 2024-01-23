<?php
const PRICE_CPU = 0.04;
const PRICE_RAM = 0.05;
const PRICE_STORAGE = 0.01;

const CPU_MIN = 1;
const CPU_MAX = 8;
const RAM_MIN = 512;  // in MB
const RAM_MAX = 16384;  // 16GB in MB
const STORAGE_MIN = 20;  // GB
const STORAGE_MAX = 500;  // GB
const BANDWIDTH = 100;  // Mbps
const BANDWIDTH_TRANSFER = 250;  // gb

function mb_to_gb($mb) {
    return $mb / 1024;
}

function gb_to_mb($gb) {
    return $gb * 1024;
}

function mbi_to_gbi($mbit) {
    return $mbit / 1000;
}

function gbi_to_mbi($gbit) {
    return $gbit * 1000;
}

function price_normalizer($price) {
    return round($price, 2);
}

function price_per_hours($cpu, $ram, $storage) {
    return price_normalizer(($cpu * PRICE_CPU) + (mb_to_gb($ram) * PRICE_RAM) + ($storage * PRICE_STORAGE));
}

function price_per_day($cpu, $ram, $storage) {
    return price_normalizer(price_per_hours($cpu, $ram, $storage) * 24);
}

function price_per_month($cpu, $ram, $storage) {
    return price_normalizer(price_per_day($cpu, $ram, $storage) * 30);
}
?>
