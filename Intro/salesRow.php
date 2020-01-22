<?php


class salesRow {
    private $date;
    private $region;
    private $person;
    private $count;
    private $item;
    private $price;
    public function  __construct($date, $region, $person, $count, $item, $price ){
        $this->date = $date;
        $this->region = $region;
        $this->person = $person;
        $this->count = $count;
        $this->item = $item;
        $this->price = $price;
    }
    public function getItem() { return $this->item; }
    public function getDate() { return $this->date; }
    public function getRegion() { return $this->region; }
    public function getPerson() { return $this->person; }
    public function getCount() { return $this->count; }
    public function getPrice() { return $this->price; }
}