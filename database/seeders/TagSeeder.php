<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Laravel',
            ],
            [
                'name' => 'Node JS',
            ],
            [
                'name' => 'Python',
            ],
            [
                'name' => 'Java',
            ],
            [
                'name' => 'React',
            ],
        ];
        foreach ($data as $tag) {
            Tag::insert([
                'name' => $tag['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
