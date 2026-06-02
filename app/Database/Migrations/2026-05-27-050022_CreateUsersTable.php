<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        // 1. Define the structure of your table
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        // 2. Set the Primary Key
        $this->forge->addKey('id', true);

        // 3. Create the actual table named 'users'
        $this->forge->createTable('users');
    }

    public function down()
    {
        // This drops the table if we ever reverse the migration
        $this->forge->dropTable('users');
    }
}