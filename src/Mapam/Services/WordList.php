<?php

namespace Mapam\Services;

use \Mapam\Services\BaseService as BaseService;

class WordList extends BaseService {

  public function get() {
    return response()->json([
      'message' => 'Hello world from API json!',
      'code' => 'CA'
    ]);
  }

}
