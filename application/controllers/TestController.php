<?php
namespace application\controllers;

use application\libs\Application;

class TestController extends Controller {
    public function index() {
        $this->addAttribute(_MAIN, $this->getView("user/test.php"));
        return "template/t1.php";
    }
}
