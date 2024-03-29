<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id'			=> [
                'type'				=> 'INT',
                'constraint'		=> 20,
                'unsigned'			=> true,
                'auto_increment'	=> true,
            ],
            'user_fullname'       => [
                'type'				=> 'VARCHAR',
                'constraint'		=> '100',
            ],
            'user_email' => [
                'type'				=> 'VARCHAR',
                'constraint'		=> '100',
            ],
            'user_password' => [
                'type'				=> 'VARCHAR',
                'constraint'		=> '100',
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
