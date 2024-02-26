<?php
class Profilfungsi extends Controller
{
    public function index()
    {
        $data['title'] = 'Profil Fungsi';
        $data['profilfungsi'] = $this->model('ProfilfungsiModel')->getAllProfilfungsi();  
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/profilfungsi/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Profil Fungsi';
        $data['profilfungsi'] = $this->model('ProfilfungsiModel')->cariProfilfungsi();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/profilfungsi/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
    }

    public function store()
    {
        if ($this->model('ProfilfungsiModel')->tambahProfilfungsi($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/backsite/profilfungsi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/profilfungsi');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Profil Fungsi';
        $data['profilfungsi'] = $this->model('profilfungsiModel')->getprofilfungsiById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/profilfungsi/edit', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function update()
    {
        if ($this->model('ProfilfungsiModel')->updateProfilfungsi($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . BASEURL . '/backsite/profilfungsi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . BASEURL . '/backsite/profilfungsi');
            exit;
        }
    }

    public function deploy($id)
    {
        if ($this->model('profilfungsiModel')->deleteprofilfungsi($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/profilfungsi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/profilfungsi');
            exit;
        }
    }
}