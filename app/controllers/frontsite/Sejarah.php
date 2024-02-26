<?php
    class Sejarah extends Controller {
        public function index() {
            $data['title'] = 'Sejarah';
            $data['sejarah'] = $this->model('SejarahModel')->getAllSejarah();
            $this->view('frontsite/templates/style', $data);
            $this->view('frontsite/templates/header', $data);
            $this->view('frontsite/sejarah/index', $data);
            $this->view('frontsite/templates/footer');
            $this->view('frontsite/templates/script');
        }
    }
