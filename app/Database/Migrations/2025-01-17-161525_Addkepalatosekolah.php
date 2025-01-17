<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Addkepalatosekolah extends Migration
{
    public function up()
    {
        $this->forge->addColumn('sekolah', [
            'sekolah_kepalasekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'sekolah_kepalayayasan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
                'default' => null
            ],
        ]);
    }

    public function down()
    {
        //
    }
}
