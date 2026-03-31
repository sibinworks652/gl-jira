<?php

namespace Database\Seeders\Workflow;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = [
            ['name' => 'Not Started', 'slug' => 'not_started', 'entity_type' => 'task', 'color' => 'gray'],
            ['name' => 'On Progress (Design)', 'slug' => 'on_progress_design', 'entity_type' => 'task', 'color' => 'blue'],
            ['name' => 'Design Completed', 'slug' => 'design_completed', 'entity_type' => 'task', 'color' => 'blue'],
            ['name' => 'On Progress (Conversion)', 'slug' => 'on_progress_conversion', 'entity_type' => 'task', 'color' => 'blue'],
            ['name' => 'Conversion Completed', 'slug' => 'conversion_completed', 'entity_type' => 'task', 'color' => 'blue'],
            ['name' => 'On Progress (Development)', 'slug' => 'on_progress_development', 'entity_type' => 'task', 'color' => 'blue'],
            ['name' => 'Development Completed', 'slug' => 'development_completed', 'entity_type' => 'task', 'color' => 'green'],

            ['name' => 'Not Started', 'slug' => 'not_started', 'entity_type' => 'module', 'color' => 'gray'],
            ['name' => 'On Progress', 'slug' => 'on_progress', 'entity_type' => 'module', 'color' => 'blue'],
            ['name' => 'Move to Testing', 'slug' => 'move_to_testing', 'entity_type' => 'module', 'color' => 'orange'],
            ['name' => 'On Progress (Testing)', 'slug' => 'on_progress_testing', 'entity_type' => 'module', 'color' => 'orange'],
            ['name' => 'Reassign Task', 'slug' => 'reassign_task', 'entity_type' => 'module', 'color' => 'red'],
            ['name' => 'Testing Completed', 'slug' => 'testing_completed', 'entity_type' => 'module', 'color' => 'green'],
            ['name' => 'Finished', 'slug' => 'finished', 'entity_type' => 'module', 'color' => 'green'],
            ['name' => 'Move to Deploy', 'slug' => 'move_to_deploy', 'entity_type' => 'module', 'color' => 'dark_green'],
        ];

        foreach ($statuses as $status) {
            Status::updateOrCreate(
                [
                    'slug' => $status['slug'],
                    'entity_type' => $status['entity_type'],
                ],
                [
                    'name' => $status['name'],
                    'color' => $status['color'],
                ]
            );
        }
    }
}
