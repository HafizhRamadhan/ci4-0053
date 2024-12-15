<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            'username'      => 'admin',
            'password'      => password_hash('admin', PASSWORD_DEFAULT),
            'nama_lengkap'  => 'Hafizh Ihsan Ramadhan',
            'email'         => 'hafizh@gmail.com',    
        ];
        $this->db->table('user')->insert($data);
    }
}
