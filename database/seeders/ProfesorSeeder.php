<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Nette\Utils\DateTime;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('profesor')->truncate();

        DB::table('profesor')->insert(
            [
                [
                    "id" => "P001",
                    "nombre" => "Alvaro",
                    "apellido" => "Altamirano",
                    "titulo" => "ING",
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "id" => "P002",
                    "nombre" => "Diego",
                    "apellido" => "Maradiaga",
                    "titulo" => "ING",
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "id" => "P003",
                    "nombre" => "Rina",
                    "apellido" => "Arauz",
                    "titulo" => "MSC",
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "id" => "P004",
                    "nombre" => "Juan",
                    "apellido" => "Anton",
                    "titulo" => "ING",
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "id" => "P005",
                    "nombre" => "Francisco",
                    "apellido" => "Pastran",
                    "titulo" => "ING",
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "id" => "P006",
                    "nombre" => "Mynor",
                    "apellido" => "Arauz",
                    "titulo" => "LIC",
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],

            ]
        );

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
