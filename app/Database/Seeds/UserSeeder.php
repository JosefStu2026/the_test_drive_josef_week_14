<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // 1. Prepare an array of multiple user records
        $data = [
            [
                'name'       => 'Alice Smith',
                'email'      => 'alice@example.com',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Bob Johnson',
                'email'      => 'bob@example.com',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Charlie Brown',
                'email'      => 'charlie@example.com',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ];

        // 2. Insert all the data into the 'users' table in one go
        // insertBatch() is highly efficient for multiple rows!
        $this->db->table('users')->insertBatch($data);
    }
}