<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Nette\Utils\DateTime;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('clase')->truncate();

        DB::table('clase')->insert(
            [
                [
                    "codclase" => "C001",
                    "nombre" => "Robotica",
                    "credito" => 4,
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "codclase" => "C002",
                    "nombre" => "Programacion",
                    "credito" => 3,
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "codclase" => "C003",
                    "nombre" => "Diseño de redes",
                    "credito" => 6,
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "codclase" => "C004",
                    "nombre" => "Investigacion",
                    "credito" => 2,
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "codclase" => "C005",
                    "nombre" => "Base de datos",
                    "credito" => 1,
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "codclase" => "C006",
                    "nombre" => "ASO",
                    "credito" => 5,
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
            ]
        );

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
