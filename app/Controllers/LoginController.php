<?php

namespace App\Controllers;

use App\Models\ModelLogin;
use CodeIgniter\HTTP\RedirectResponse;

class LoginController extends BaseController
{
    // Menampilkan halaman login
    public function index(): string
    {
        return view('login');
    }

    // Aksi login
    public function login(): RedirectResponse|string
    {
        // Ambil input username dan password dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Inisialisasi model
        $model = new ModelLogin();

        // Cari data user berdasarkan username
        $user = $model->where('username', $username)->first();

        // Validasi username dan password
        if (!$user) {
            // Username tidak ditemukan
            return view('login', [
                'error' => 'Username tidak ditemukan.',
            ]);
        }

        // Verifikasi password yang di-hash dengan MD5
        if (md5($password) !== $user['password']) {
            // Password salah
            return view('login', [
                'error' => 'Password salah.',
            ]);
        }

        // Jika username dan password valid, set session
        session()->set([
            'id_user' => $user['id_user'],
            'username' => $user['username'],
            'logged_in' => true,
        ]);

        // Redirect ke halaman home
        return redirect()->to('/home');
    }

    // Logout
    public function logout(): RedirectResponse
    {
        // Hapus session
        session()->destroy();

        // Redirect ke halaman login
        return redirect()->to('/login');
    }
}
