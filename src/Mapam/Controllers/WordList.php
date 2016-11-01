<?php

namespace Mapam\Controllers;

use \Illuminate\Routing\Controller as BaseController;

use \Illuminate\Http\Request;
use \App\Http\Requests;

use Mapam\Services\WordList as WordListService;

class WordList extends BaseController {

  protected $wordListService;

  /**
   * Create a new controller instance.
   *
   * @param  UserRepository  $users
   * @return void
   */
  public function __construct(WordListService $wordListServiceParam) {
      $this->wordListService = $wordListServiceParam;
  }

  public function get() {
    return $this->wordListService->get();
  }

}
