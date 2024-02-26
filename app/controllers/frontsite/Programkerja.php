<?php
    class Programkerja extends Controller {
        public function index() {
            $data['programkerja'] = $this->model('ProgramkerjaModel')->getAllProgramkerja();
            $data['title'] = 'Programkerja';
            $this->view('frontsite/templates/style', $data);
            $this->view('frontsite/templates/header', $data);
            $this->view('frontsite/programkerja/index', $data);
            $this->view('frontsite/templates/footer');
            $this->view('frontsite/templates/script');
        }
    }
