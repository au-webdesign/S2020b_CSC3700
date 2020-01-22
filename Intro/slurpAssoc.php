<?php

$inFile = 'salesData.csv';
$FH = fopen($inFile, 'r') or die("Cannot open file=$inFile");
$firstLine = true;
$TOTALS = array();
while ($LINE = fgetcsv($FH )){
    if ($firstLine) {
        $firstLine = false;
        continue;
    }
    $date = $LINE[1];
    $region = $LINE[2];
    $person = $LINE[3];
    $item = $LINE[4];
    $count = $LINE[5];
    $price = $LINE[6];
    $TOTALS = setTotals($region, $item, $count, $price );
  }
print "<br> TOTALS=<pre>";
print_r($TOTALS);

function setTotalsByRegion($region, $item, $count, $price) {
    if (!isset($TOTALS["$region"]["$item"])) {
           $TOTALS["$region"]["$item"] = 0;
    }
    $TOTALS["$PART"]["$YEAR"] += $SALES * $PRICE;
    return $TOTALS;
}
