<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PlayerMigration extends Migration
{
    public function up()
    {
        //
        $this->forge->addField(array(
            'player_id' => array(
                'type' => 'INT',
                'auto_increment' => true
            ),
            'player_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 256
            ),
            'player_img' => array(
                'type' => 'VARCHAR',
                'constraint' => 256,
                'null' => true
            )
        ));
        $this->forge->addKey('player_id', true);
        $this->forge->createTable('players');
    }

    public function down()
    {
        //
        $this->forge->dropTable('players', true);
    }
}
