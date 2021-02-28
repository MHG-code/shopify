<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Myprofile extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'_id' => [
				'type'  => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
				'type' => 'VARCHAR',
				'constraint' => 15,
				'null' => false
			],
            'img' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false
			],

			'facebook' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false
			],

			'youtube' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false
			],

			'instagram' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false
			],

			'about' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false
			],
                       
           'created_at' => [
           	'type' => 'DATETIME',
            'null' => false,
        ],
        'updated_at' => [
           	'type' => 'DATETIME',
            'null' => true,
        ],
        ]);

        $this->forge->addKey('_id', true);
        $this->forge->createTable('myprofile');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('myprofile');
	}
}
