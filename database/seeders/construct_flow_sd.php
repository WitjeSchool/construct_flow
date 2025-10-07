<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class construct_flow_sd extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            ["id" => 1, "project_code" => "PRJ-001", "name" => "Apartment Expansion Rotterdam", "status" => "on_hold", "start_date" => "2024-09-07"],
            ["id" => 2, "project_code" => "PRJ-002", "name" => "Office Expansion Utrecht", "status" => "cancelled", "start_date" => "2024-03-30"],
            ["id" => 3, "project_code" => "PRJ-003", "name" => "Hospital Build Rotterdam", "status" => "planned", "start_date" => "2024-04-05"],
            ["id" => 4, "project_code" => "PRJ-004", "name" => "Office Expansion Breda", "status" => "cancelled", "start_date" => "2024-01-28"],
            ["id" => 5, "project_code" => "PRJ-005", "name" => "Hospital Expansion Breda", "status" => "completed", "start_date" => "2024-08-13"],
            ["id" => 6, "project_code" => "PRJ-006", "name" => "School Renovation Groningen", "status" => "planned", "start_date" => "2024-06-12"],
            ["id" => 7, "project_code" => "PRJ-007", "name" => "Apartment Build Den Haag", "status" => "on_hold", "start_date" => "2024-06-08"],
            ["id" => 8, "project_code" => "PRJ-008", "name" => "Office Build Utrecht", "status" => "planned", "start_date" => "2025-01-24"],
            ["id" => 9, "project_code" => "PRJ-009", "name" => "Warehouse Build Den Haag", "status" => "cancelled", "start_date" => "2024-09-27"],
            ["id" => 10, "project_code" => "PRJ-010", "name" => "Warehouse Renovation Tilburg", "status" => "cancelled", "start_date" => "2024-05-07"]
        ];

        foreach ($projects as $project) {
        DB::table('construct_flow_data')->insert([
            'project_code' => $project['project_code'],
            'name' => $project['name'],
            'status' => $project['status'],
            'start_date' => $project['start_date']
        ]);
    }
    }
}
