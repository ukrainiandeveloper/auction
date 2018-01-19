<?php
/**
 * Index Controller
 */

class AdminController extends Controller {

    private $pageTpl = '/views/templates/admin/main.tpl.php';

    public function __construct() {
        $this->model = new AdminModel();
        $this->view = new View();
    }

    public function index() {
        $this->pageData['title'] = 'Admin Main Page';
        $this->view->load($this->pageTpl, $this->pageData);
    }

    public function second() {
        $this->pageData['title'] = 'Admin Second Page';
        $this->view->load($this->pageTpl, $this->pageData);
    }

}