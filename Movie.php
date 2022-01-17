<?php 

class Movie{

  public $title;
  public $genre;
  public $producer;
  public $length;
  public $plot;

  public function __construct($_title, $_genre, $_length)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->length = $_length."min";
  }

  public function getExtractPlot(){
    return substr($this->plot, 0, 50) . "...";
  }

}