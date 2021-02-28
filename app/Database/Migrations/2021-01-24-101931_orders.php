<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();

		$this->forge->addField([
			'_id' => [
				'type'  => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'price' => [
				'type' => 'INT',
				'constraint' => 5,
				'null' => false
			],

			'discount' => [
				'type' => 'INT',
				'constraint' => 3,
				'null' => false
			],

			'quantity' => [
				'type' => 'INT',
				'constraint' => 3,
				'null' => false
			],

			'final_price' => [
				'type' => 'INT',
				'constraint' => 5,
				'null' => false
			],

			'order_code' => [
				'type' => 'INT',
				'constraint' => 10,
				'null' => false
			],

			'item_id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned'       => true,
				'null' => false
			],
			'customer_id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned'       => true,
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
        $this->forge->addForeignKey('item_id', 'items', '_id' , 'CASCADE' , 'CASCADE');
        $this->forge->addForeignKey('customer_id', 'customers', '_id' , 'CASCADE' , 'CASCADE');
        $this->forge->createTable('orders');
        $this->db->enableForeignKeyChecks();

    }

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('orders');

		//
	}
}
