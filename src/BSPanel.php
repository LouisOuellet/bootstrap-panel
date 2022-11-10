<?php

//Declaring namespace
namespace LaswitchTech\BSPanel;

//Import stdClass & DOMDocument classes into the global namespace
use \stdClass;
use \DOMDocument;

class BSPanel {

  protected $DOM;
  protected $Document;

  public function __construct(){
    $this->DOM = new DOMDocument("html");
    $this->Document = new stdClass();
    $this->Document->HTML = $this->DOM->createElement('html');
    $this->Document->HTML->setAttribute("lang","en");
    $this->Document->Head = $this->DOM->createElement('head');
    $this->Document->HTML->appendChild($this->Document->Head);
    $this->Document->Head->Meta = new stdClass();
    $this->Document->Head->Meta->Charset = $this->DOM->createElement('meta');
    $this->Document->Head->Meta->Charset->setAttribute("charset","utf-8");
    $this->Document->Head->appendChild($this->Document->Head->Meta->Charset);
    $this->Document->Head->Meta->Viewport = $this->DOM->createElement('meta');
    $this->Document->Head->Meta->Viewport->setAttribute("name","viewport");
    $this->Document->Head->Meta->Viewport->setAttribute("content","width=device-width, initial-scale=1");
    $this->Document->Head->appendChild($this->Document->Head->Meta->Viewport);
    $this->Document->Head->Title = $this->DOM->createElement('title','BSPanel');
    $this->Document->Head->appendChild($this->Document->Head->Title);
    $this->Document->Head->CSS = new stdClass();
    $this->Document->Head->CSS->Bootstrap = $this->DOM->createElement('link');
    $this->Document->Head->CSS->Bootstrap->setAttribute("rel","stylesheet");
    $this->Document->Head->CSS->Bootstrap->setAttribute("href","./dist/css/stylesheet.css");
    $this->Document->Head->appendChild($this->Document->Head->CSS->Bootstrap);
    $this->Document->Body = $this->DOM->createElement('body');
    $this->Document->HTML->appendChild($this->Document->Body);
    $this->DOM->appendChild($this->Document->HTML);
  }

  public function title($title){
    if(is_string($title)){
      $this->Document->Head->Title->nodeValue = $title;
    }
  }

  public function publish(){
    echo $this->DOM->saveHTML();
  }
}

// <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
// <!doctype html>
  // <head>
  //   <meta charset="utf-8">
  //   <meta name="viewport" content="width=device-width, initial-scale=1">
  //   <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
  //   <title>Bootstrap npm starter</title>
  // </head>
