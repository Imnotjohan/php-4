<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Nette\Utils\DateTime;

class ImparteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('imparte')->truncate();

        DB::table('imparte')->insert(
            [
                [
                    "c_codclase" => 'C001',
                    "p_idprofesor" => 'P001',
                    "a_idaula" => 1,
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "c_codclase" => 'C002',
                    "p_idprofesor" => 'P004',
                    "a_idaula" => 3,
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "c_codclase" => 'C005',
                    "p_idprofesor" => 'P002',
                    "a_idaula" => 6,
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "c_codclase" => 'C004',
                    "p_idprofesor" => 'P003',
                    "a_idaula" => 4,
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "c_codclase" => 'C003',
                    "p_idprofesor" => 'P005',
                    "a_idaula" => 5,
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
                [
                    "c_codclase" => 'C006',
                    "p_idprofesor" => 'P006',
                    "a_idaula" => 2,
                    "created_at" => new DateTime,
                    "updated_at" => new DateTime
                ],
            ]
        );

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
