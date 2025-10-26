<?php

namespace Application\Controllers;

use Application\Interfaces\ViewInterface;
use Application\Models\InspireModel;

class InspireController
{

  protected $view;
  protected $data;
  public $model;

  public function __construct(ViewInterface $view)
  {
    $this->view = $view;
    $this->model = new InspireModel;
  }

  public function index()
  {
    $this->data['meta'] = ['title' => 'inspire'];
    $this->data['data'] = $this->model->getData();
    return $this->view->view($this->data);
  }

}
