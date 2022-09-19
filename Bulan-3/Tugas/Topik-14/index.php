<?php

include("CurrentWeather.php");
include("BadWeather.php");
use Weather\Rain as Hujan;
$hujan = new Hujan;
$hujan->__construct();
use Weather\Sunny as Cerah;
$cerah = new Cerah;
$cerah->__construct();
