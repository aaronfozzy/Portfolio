<?php
  
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

$riel_to_usd = 0.00026;
$kyat_to_usd = 0.00066;
$krones_to_usd = 0.11;
$lek_to_usd = 0.0090;

$usd_from_riel = $riel * $riel_to_usd;
$usd_from_kyat = $kyat * $kyat_to_usd;
$usd_from_krones = $riel * $krones_to_usd;
$usd_from_lek = $riel * $lek_to_usd;

echo "\nYour $riel riel were exchanged for $usd_from_riel usd.";
echo "\nYour $kyat riel were exchanged for $usd_from_kyat usd.";
echo "\nYour $krones riel were exchanged for $usd_from_krones usd.";
echo "\nYour $lek riel were exchanged for $usd_from_lek usd.";

$final_amount = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek - 4;
echo "\nAfter deducting the transactions fees, you'll be recieving $final_amount usd.";
