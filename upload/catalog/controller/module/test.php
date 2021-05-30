<?php

namespace Opencart\Catalog\Controller\Extension\Test\Module;

class Test extends \Opencart\System\Engine\Controller {
  public function index (): string {
    $this->load->language('extension/test/module/test');

    return $this->load->view('extension/test/module/test', [
      'title' => 'Hello!',
      'description' => 'Is it work?'
    ]);
  }
}