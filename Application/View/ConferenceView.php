<?php
namespace Application\View;

use Application\Interfaces\ViewInterface;
use Application\View\TemplateView;

class ConferenceView extends TemplateView implements ViewInterface {

  public function view($data = [])
  {
    $this->layout = 'conference';
    $this->addCSS('conference.css');
    $this->addJS('conference.js');
    $this->render($data);
  }
}