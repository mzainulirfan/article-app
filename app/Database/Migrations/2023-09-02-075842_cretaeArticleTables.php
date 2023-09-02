<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class cretaeArticleTables extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'article_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'article_title' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'article_slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true
            ],
            'article_content' => [
                'type' => 'TEXT',
            ],
            'article_status' => [
                'type' => 'ENUM',
                'constraint' => ['publish', 'pending', 'draft'],
                'default' => 'pending'
            ],
            'created_at' =>
            [
                'type' => 'DATETIME'
            ],
            'updated_at' =>
            [
                'type' => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('article_id', true);
        $this->forge->createTable('articles', true);
    }

    public function down()
    {
        $this->forge->dropTable('articles', true);
    }
}
