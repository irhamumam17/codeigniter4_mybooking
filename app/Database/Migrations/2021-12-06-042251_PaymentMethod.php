<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PaymentMethod extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'account_number' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'account_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'administrative_fee' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'logo' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('logo', 'files', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('payment_methods');
    }

    public function down()
    {
        $this->forge->dropTable('payment_methods');
    }
}
