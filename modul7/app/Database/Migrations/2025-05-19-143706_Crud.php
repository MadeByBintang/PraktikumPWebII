<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Crud extends Migration
{
    //Membuat
    public function up()
    {
        $fields = [
            "id" => [
                "type" => "BIGINT",
                "constraint" => 5,
                "auto_increment" => true
            ],

            "judul" => [
                "type" => "VARCHAR",
                "constraint" => 255

            ],

            "penulis" => [
                "type" => "VARCHAR",
                "constraint" => 255
            ],

            "penerbit" => [
                "type" => "VARCHAR",
                "constraint" => 255
            ],

            "tahun_terbit" => [
                "type" => "YEAR",
            ],
        ];

        $this->forge->addField($fields);
        $this->forge->addKey("id", true);
        $this->forge->createTable("buku");
    }

    //menghapus
    public function down()
    {
        $this->forge->dropTable("buku", true);
    }
}
