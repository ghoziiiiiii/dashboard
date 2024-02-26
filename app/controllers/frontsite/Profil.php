<?php
    class Profil extends Controller {
        public function index() {
            $data['profiltugas'] = $this->model('ProfiltugasModel')->getAllProfiltugas();
            $data['profilfungsi'] = $this->model('ProfilfungsiModel')->getAllProfilfungsi();
            $data['profilvisi'] = $this->model('ProfilvisiModel')->getAllProfilvisi();
            $data['profilmisi'] = $this->model('ProfilmisiModel')->getAllProfilmisi();
            $data['title'] = 'Profil Tugas';
            $this->view('frontsite/templates/style', $data);
            $this->view('frontsite/templates/header', $data);
            $this->view('frontsite/profil/index', $data);
            $this->view('frontsite/templates/footer');
            $this->view('frontsite/templates/script');
        }
    }
