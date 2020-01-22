<?php
require_once("salesRow.php");

$inFile = 'salesData.csv';
$salesRows = getSalesData( $inFile );
$sumByRegion = sumByRegion( $salesRows );
print "SumByRegion=<pre>"; print_r( $sumByRegion); print("</pre>");
outputSalesByRegion( $sumByRegion );
function  getSalesData( $inFile ){
     $FH = fopen($inFile, 'r') or die("Cannot open file=$inFile");
     $firstLine = true;
     $TOTALS = array();
     $salesRows = array();
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
         $salesRows[] = new salesRow($date, $region,$person, $count, $item, $price );
     }
     return $salesRows;
  }

function sumByRegion( $salesRows ) {
    $TOTALS = array();
    foreach ( $salesRows as $inx => $row ) {
        $region = $row->getRegion();
        $item = $row->getItem();
        $price = $row->getPrice();
        $count = $row->getCount();
        if (!isset($TOTALS["$region"])) {
            $TOTALS["$region"] = 0;
        }
        $TOTALS["$region"] += $count * $price;
    }
    return $TOTALS;
}
function outputSalesByRegion( $sumByRegion ) {
   print "\n<h2> Total Sales By Region</h2>";
    print "\n<table border='1'>";
    print "\n<tr> <th> Region </th> <th> Total Sales </th> </tr>";
    foreach ( $sumByRegion as $Region => $totalSales ){
        print "\n<tr> <td> $Region </td> <td> $totalSales </td></tr>";
    }
    print "\n</table>";
}
