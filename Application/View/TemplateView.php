<?php
namespace Application\View;

class TemplateView {

  public $cssFiles = [];
  public $jsFiles = [];

  public $layout = 'content';

  public function __construct()
  {
    $this->loadDefaultAssets();
  }

  protected function loadDefaultAssets()
  {
    $this->loadDefaultCSS();
    $this->loadDefaultJS();
  }

  protected function loadDefaultCSS()
  {
    foreach($this->defaultCSS() as $css){
      $this->addCSS($css);
    }
  }

  protected function loadDefaultJS()
  {
    foreach($this->defaultJS() as $file){
      $this->addJS($file);
    }
  }

  public function addJS($file)
  {
    array_push($this->jsFiles, BASE_URL . '/' . $file);
  }

  public function addCSS($file)
  {
    array_push($this->cssFiles, BASE_URL . '/' . $file);
  }

  public function render($data = [])
  {
    include("template/{$this->layout}.php");
  }

  private function defaultCSS()
  {
    return [
      'style.css'
    ];
  }

  private function defaultJS()
  {
    return [
      'script.js'
    ];
  }
}