<?php
//Pertemuan 4

class Controller
{
  public function view($view, $data = [])
  {
    require_once '../app/views/' . $view . '.php';
  }
}
