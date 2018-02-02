<?php
/**
 * Index Controller
 */

class IndexController extends Controller {

    private $pageTpl = '/views/templates/main.tpl.php';
    private $page2Tpl = '/views/templates/404.php';

    public function __construct() {
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function index() {
        $this->pageData['title'] = 'Main Page';
        $this->view->load($this->pageTpl, $this->pageData);
    }
}