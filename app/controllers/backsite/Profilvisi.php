<?php
class Profilvisi extends Controller
{
    public function index()
    {
        $data['title'] = 'Profil Visi';
        $data['profilvisi'] = $this->model('ProfilvisiModel')->getAllProfilvisi();  
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/profilvisi/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Profil Visi';
        $data['profilvisi'] = $this->model('ProfilvisiModel')->cariProfilvisi();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/profilvisi/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
    }

    public function store()
    {
        if ($this->model('ProfilvisiModel')->tambahProfilvisi($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/backsite/profilvisi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/profilvisi');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Profil Visi';
        $data['profilvisi'] = $this->model('profilvisiModel')->getprofilvisiById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/profilvisi/edit', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function update()
    {
        if ($this->model('ProfilvisiModel')->updateProfilvisi($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . BASEURL . '/backsite/profilvisi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . BASEURL . '/backsite/profilvisi');
            exit;
        }
    }

    public function deploy($id)
    {
        if ($this->model('profilvisiModel')->deleteprofilvisi($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/profilvisi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/profilvisi');
            exit;
        }
    }
}