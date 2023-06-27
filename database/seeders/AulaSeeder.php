<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Nette\Utils\DateTime;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('aula')->truncate();

        DB::table('aula')->insert(
            [
                [
                    "id" => 1,
                    "nombre" => "Aula1",
                    "ubicacion" => "Ubicacion 1",
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "id" => 2,
                    "nombre" => "Aula2",
                    "ubicacion" => "Ubicacion 2",
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "id" => 3,
                    "nombre" => "Aula3",
                    "ubicacion" => "Ubicacion 3",
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "id" => 4,
                    "nombre" => "Aula4",
                    "ubicacion" => "Ubicacion 4",
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "id" => 5,
                    "nombre" => "Aula5",
                    "ubicacion" => "Ubicacion 5",
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "id" => 6,
                    "nombre" => "Aula6",
                    "ubicacion" => "Ubicacion 6",
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ]
            ]
        );

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
