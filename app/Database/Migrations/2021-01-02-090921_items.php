<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Items extends Migration
{

        public function up()
        {
        	$this->db->disableForeignKeyChecks();
                $this->forge->addField([
                        '_id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'title' => [
								'type'       => 'VARCHAR',
								'constraint' => 50,
								'null'       => false
							],
			'price' => [
								'type'       => 'INT',
								'constraint' => 9,
								'null'       => false
							],
                        'discount' => [
                                                                'type'       => 'INT',
                                                                'constraint' => 5,
                                                                'null'       => false
                                                        ],
			'description' => [
								'type'       => 'TEXT',
								'constraint' => 50,
								'null'       => false
							],
			'category_id'          => [
                                                                'type'           => 'INT',
                                                                'constraint'     => 5,
                                                                'unsigned'       => true,
                                                                'null'       => false,
                                                        ],
                        // 'brand_id' => [
                        //                                         'type'       => 'INT',
                        //                                         'constraint' => 5,
                        //                                         'unsigned'       => true,
                        //                                         'null'       => false
                        //                                 ],
                        'main_page' => [
                                                                'type'       => 'INT',
                                                                'constraint' => 5,
                                                                'null'       => false
                                                        ],
                        'availability' => [
                                                                'type'       => 'INT',
                                                                'constraint' => 5,
                                                                'null'       => false
                                                        ],
                       
                        'created_at'          => [
                                'type'           => 'DATETIME',
                                'null'       => false,
                        ],
                        'updated_at'          => [
                                'type'           => 'DATETIME',
                                'null'       => true,
                        ],

                        // 'created_at datetime default_timestamp',
                        // 'updated_at datetime default_timestamp on update current_timestamp',
                ]);
                $this->forge->addKey('_id', true);
                $this->forge->addForeignKey('category_id', 'category', '_id' , 'CASCADE' , 'CASCADE');
                // $this->forge->addForeignKey('brand_id', 'brands', '_id' , 'CASCADE' , 'CASCADE');
                $this->forge->createTable('items');
                $this->db->enableForeignKeyChecks();
        }

        public function down()
        {
                $this->forge->dropTable('items');
        }
}