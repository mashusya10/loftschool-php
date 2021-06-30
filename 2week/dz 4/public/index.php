<?php
include "../tariffinterface.php";
include "../serviceInterface.php";
include "../tariffAbstract.php";
include "../tariffBasic.php";
include "../ServiceGPS.php";
include "../ServiceDriver.php";
include "../tariffHour.php";
include "../tariffStudent.php";
/*
$tariff = new TariffBasic(5,60);
$tariff -> addService(new ServiceGPS(15));
echo $tariff ->countPrice(); */

$tariff = new TariffStudent(4, 49);
//$tariff->addService(new ServiceGPS(15));
//$tariff->addService(new ServiceDriver(100));
echo $tariff->countPrice();