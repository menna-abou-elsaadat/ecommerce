<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->upsert([
            'id' => 1,
            'name' => 'admin',
        ],'id');

        DB::table('roles')->upsert([
            'id' => 2,
            'name' => 'user',
        ],'id');
    }
}
