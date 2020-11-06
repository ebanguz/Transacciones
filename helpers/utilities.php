<?php

class Utilities {

 public $carreras = [
  1 => "Redes",
  2 => "Software",
  3 => "Multimedia",
  4 => "Mecatronica",
  5 => "Seguridad informática"];

 public function getLastElement($list) {
  $countList = count($list);
  $lastElement = $list[$countList - 1];

  return $lastElement;

 }

 public function GetCookieTime() {
  return time() + 60 * 60 * 24 * 30;
 }

 public function searchProperty($list, $property, $value) {

  $filter = array();
  foreach ($list as $item) {
   if ($item->$property == $value) {
    array_push($filter, $item);
   }
  }
  return $filter;
 }

 public function getElementIndex($list, $property, $value) {

  $index = 0;

  foreach ($list as $key => $item) {
   if ($item->$property == $value) {
    $index = $key;
   }
  }
  return $index;
 }

}

?>