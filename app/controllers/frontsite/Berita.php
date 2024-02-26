<?php
    class Berita extends Controller {
      
        public function index()
    {
        $data['title'] = 'Berita';
        $data['berita'] = $this->model('BeritaModel')->getAllBerita();
        $this->view('frontsite/templates/style', $data);
        $this->view('frontsite/templates/header', $data);
        $this->view('frontsite/berita/index', $data);
        $this->view('frontsite/templates/footer');
        $this->view('frontsite/templates/script');
    }
    }
