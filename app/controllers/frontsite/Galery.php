<?php
    class Galery extends Controller {
        public function index() {
            $data['title'] = 'Galery';
            $data['galery'] = $this->model('GaleryModel')->getAllGalery();
            $this->view('frontsite/templates/style', $data);
            $this->view('frontsite/templates/header', $data);
            $this->view('frontsite/galery/index', $data);
            $this->view('frontsite/templates/footer');
            $this->view('frontsite/templates/script');
        }
    }
