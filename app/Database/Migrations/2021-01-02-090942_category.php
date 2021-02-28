<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{

        public function up()
        {
                $this->forge->addField([
                        '_id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'categories' => [
								'type'       => 'VARCHAR',
								'constraint' => 50,
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
                $this->forge->createTable('category');
        }

        public function down()
        {
                $this->forge->dropTable('category');
        }
}