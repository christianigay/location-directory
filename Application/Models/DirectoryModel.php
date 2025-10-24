<?php

namespace Application\Models;

class DirectoryModel
{

  /*
    * Get data from the data.php file
    * If a city parameter is provided, filter the data by city
    * Sanitize the city parameter to prevent XSS
    * Sanitize the data before returning
    */
  public function getData($city = null)
  {
    $file = __DIR__ . '/../../data.php';

    if (!file_exists($file)) {
      return [];
    }

    $data = include $file;

    if (empty($city)) {
      return $this->sanitizeData($data);
    }

    $sanitizeCity = $this->sanitizeData([['city' => $city]])[0]['city'];

    $filtered = array_filter($data, function ($item) use ($sanitizeCity) {
      return stripos($item['city'], $sanitizeCity) !== false;
    });

    return $this->sanitizeData(array_values($filtered));
  }

  private function sanitizeData(array $data)
  {
    return array_map(function ($item) {
      $sanitized = [];
      foreach ($item as $key => $value) {
        if (is_scalar($value)) {
          $sanitized[$key] = htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
        } else {
          $sanitized[$key] = $value;
        }
      }
      return $sanitized;
    }, $data);
  }

}
