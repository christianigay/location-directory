<?php
namespace Application\View;

use Application\Interfaces\ViewInterface;
use Application\View\TemplateView;

class InspireView extends TemplateView implements ViewInterface {

  public function view($data = [])
  {
    $this->layout = 'inspire';
    $this->addCSS('assets/css/inspire.css');
    $this->addJS('assets/js/inspire.js');
    $this->render($data);
  }
}