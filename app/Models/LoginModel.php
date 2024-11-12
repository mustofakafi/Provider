<?php 

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'Admin';  // nama tabel
    protected $primaryKey = 'id'; 
    protected $allowedFields = ['username', 'password', 'nama', 'email', 'level', 'created_at'];  // menggunakan array

    // fungsi untuk mencari user berdasarkan username dan password
    public function getData($username, $password)
    {
        return $this->where('username', $username)
                    ->where('password', $password) // sesuaikan dengan enkripsi password jika ada
                    ->first(); // mengambil data pertama
    }
}
