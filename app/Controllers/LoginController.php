<?php 

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\LoginModel;

class LoginController extends ResourceController
{
    public function index()
    {
        $username = 'user';
        $password = '12345678';

        $loginModel = new LoginModel();
        $loginSukses = $loginModel->getData($username, $password);

        if ($loginSukses) {
            // jika login berhasil
            return $this->respond([
                'status' => 'success',
                'message' => 'Login successful',
                'data' => $loginSukses
            ]);
        } else {
            // jika login gagal
            return $this->failUnauthorized('Username atau kata sandi salah.');
        }
    }
}
