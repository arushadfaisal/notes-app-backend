<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Note;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Note::create([
            'title' => 'Sample Note 1',
            'content' => 'This is the content of Sample Note 1.',
        ]);

        Note::create([
            'title' => 'Sample Note 2',
            'content' => 'This is the content of Sample Note 2.',
        ]);
    }
}
