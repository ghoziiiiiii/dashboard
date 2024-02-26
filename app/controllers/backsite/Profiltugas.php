<?php
class Profiltugas extends Controller
{
    public function index()
    {
        $data['title'] = 'Profil Tugas';
        $data['profiltugas'] = $this->model('ProfiltugasModel')->getAllProfiltugas();  
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/profiltugas/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Profil Tugas';
        $data['profiltugas'] = $this->model('ProfiltugasModel')->cariProfiltugas();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/profiltugas/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
    }

    public function store()
    {
        if ($this->model('ProfiltugasModel')->tambahProfiltugas($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/backsite/profiltugas');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/profiltugas');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Profil Tugas';
        $data['profiltugas'] = $this->model('profiltugasModel')->getprofiltugasById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/profiltugas/edit', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function update()
    {
        if ($this->model('ProfiltugasModel')->updateProfiltugas($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . BASEURL . '/backsite/profiltugas');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . BASEURL . '/backsite/profiltugas');
            exit;
        }
    }

    public function deploy($id)
    {
        if ($this->model('profiltugasModel')->deleteprofiltugas($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/profiltugas');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/profiltugas');
            exit;
        }
    }
}