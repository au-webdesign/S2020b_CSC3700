<?php


class CountryEmmission {
   private $rows;
   private $emmision
   private $country;
   private $year1;
   private $yearN;
   private $percentChange;
    function __Construct( $rows ) {
        $this->rows=rows;
        $this->summarizeByCountry();
    }
    function summarizeByCountry(){
        foreach( $this->rows as $ct => $row ) {
                $this->country = $row[0];
                $this->year_1  = $row[1];
                $this->yearN  = $row[14];
                $percentChange = ($yearN - $year_1) / $year_1;
        }
    }


}