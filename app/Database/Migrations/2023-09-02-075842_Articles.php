<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Articles extends Migration
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
            'content' => [
                'type' => 'TEXT',
            ],
            'created_at' => ['type' => 'DATETIME']
        ]);
        $this->forge->addKey('article_id', true);
        $this->forge->createTable('articles', true);
    }

    public function down()
    {
        //
    }
}
