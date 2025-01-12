<?php

namespace App\Controllers;

use App\Models\ModelLogin;
use CodeIgniter\HTTP\RedirectResponse;

class RegisterController extends BaseController
{
    // Menampilkan halaman registrasi
    public function index(): string
    {
        return view('register');
    }

    // Proses registrasi
    // Proses registrasi
    public function register(): RedirectResponse|string
    {
        // Ambil input dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $password_confirm = $this->request->getPost('password_confirm');

        // Validasi jika password tidak sama
        if ($password !== $password_confirm) {
            return view('register', [
                'error' => 'Password dan konfirmasi password tidak sama.',
            ]);
        }

        // Inisialisasi model
        $model = new ModelLogin();

        // Cek apakah username sudah ada
        $user = $model->where('username', $username)->first();
        if ($user) {
            return view('register', [
                'error' => 'Username sudah terdaftar.',
            ]);
        }

        // Jika validasi berhasil, simpan data user
        $data = [
            'username' => $username,
            'password' => md5($password), // Enkripsi password dengan MD5
        ];

        $model->registerUser($data);

        // Redirect ke halaman login setelah registrasi berhasil
        return redirect()->to('/');
    }
}
