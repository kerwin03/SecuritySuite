<?php
/**
 * Created by PhpStorm.
 * User: Sherlock
 * Date: 4/15/2017
 * Time: 2:38 PM
 */

include("init.php.console.php");


$product = "systemd";

$getProductCpe = "https://nvd.nist.gov/NVD/Services/CpeSearchServices.ashx?serviceType=productList&startsWith=$product";
$productCpe = file_get_contents($getVendorsUrl);

$getVendorsUrl = "https://nvd.nist.gov/NVD/Services/CpeSearchServices.ashx?serviceType=vendors&product=$productCpe";
$vendorsCPE = file_get_contents($getVendorsUrl);

$getVersionsUrl = "https://nvd.nist.gov/NVD/Services/CpeSearchServices.ashx?serviceType=versions&product=$product&vendor=$vendorsCPE";
$versions = file_get_contents($getVendorsUrl);

$searchUrl = "https://nvd.nist.gov/vuln/search/results?adv_search=true&form_type=advanced&results_type=overview&cpe_vendor=cpe:/:gnu&cpe_product=cpe:/::wget";
$content = "";//file_get_contents($searchUrl);
$matches = [1];
preg_match_all("/CVE-\d+-\d+/", $content, $matches);
$matches = array_unique($matches[0]);

$handler->debug($vendorsCPE);

