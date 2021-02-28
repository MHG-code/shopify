<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customers extends Migration
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
				'constraint' => 50,
				'null' => false
			],

			'contact' => [
				'type' => 'BIGINT',
				'constraint' => 15,
				'null' => false
			],

			'address' => [
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => false
			],

			'province' => [
				'type' => 'VARCHAR',
				'constraint' => 20,
				'null' => false
			],

			'zip' => [
				'type' => 'INT',
				'constraint' => 9,
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
        $this->forge->createTable('customers');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('customers');

		//
	}
}
