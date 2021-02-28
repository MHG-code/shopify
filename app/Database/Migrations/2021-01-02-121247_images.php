<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Images extends Migration
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
                        
			'src' => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
				// 'COLLATE' => utf8_unicode_ci,
				'null'       => false
										],
			
			'item_id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'null'       => false,
                        ],
                        'status'          => [
                                'type'           => 'INT',
                                'constraint'     => 2,
                                'unsigned'       => true,

                                'null'       => false,
                        ],
                         'main'          => [
                                'type'           => 'INT',
                                'constraint'     => 2,
                                'unsigned'       => true,
                                'null'       => true,
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
                $this->forge->addForeignKey('item_id', 'items', '_id' , 'CASCADE' , 'CASCADE');
                $this->forge->createTable('images');
                
                $this->db->enableForeignKeyChecks();
        }

        public function down()
        {
                $this->forge->dropTable('images');
        }
}