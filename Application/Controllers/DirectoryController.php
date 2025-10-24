<?php

namespace Application\Controllers;

use Application\Interfaces\ViewInterface;
use Application\Models\DirectoryModel;

class DirectoryController
{

  protected $view;
  protected $data;
  public $model;

  public function __construct(ViewInterface $view)
  {
    $this->view = $view;
    $this->model = new DirectoryModel;
  }

  /*
    * Handle default page load
    * Get the data from the model
    * Pass the data to the view for rendering
    * TemplateView will handle loading default CSS and JS assets
    * DirectoryView render the Application/View/template/content.php by default
    */  
  public function index()
  {
    $this->data['meta'] = ['title' => 'Cities'];
    $this->data['data'] = $this->model->getData();
    return $this->view->view($this->data);
  }

  /*
    * Handle search requests
    * Get the city parameter from the GET request
    * Get the filtered data from the model
    * Return the data as a JSON response
    */
  public function search()
  {
    $city = isset($_GET['city']) ? trim($_GET['city']) : '';

    echo json_encode([
      'results' => $this->model->getData($city)
    ], JSON_PRETTY_PRINT);
    exit;
  }
}
