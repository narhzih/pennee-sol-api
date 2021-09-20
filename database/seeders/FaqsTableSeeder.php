<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputs = [
            [
                'question' => 'What is Pennee',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloribus eaque earum eius eum fuga harum ipsa modi nihil officiis saepe sequi similique, vero. Amet eum modi mollitia vel vitae.'
            ],
            [
                'question' => 'How much does it cost to maintain a pennee account',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloribus eaque earum eius eum fuga harum ipsa modi nihil officiis saepe sequi similique, vero. Amet eum modi mollitia vel vitae.'
            ],
            [
                'question' => 'What are asset loans',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloribus eaque earum eius eum fuga harum ipsa modi nihil officiis saepe sequi similique, vero. Amet eum modi mollitia vel vitae.'
            ],
            [
                'question' => 'What do overdrafts cover',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur doloribus eaque earum eius eum fuga harum ipsa modi nihil officiis saepe sequi similique, vero. Amet eum modi mollitia vel vitae.'
            ]
        ];

        foreach ($inputs as $input) {
            DB::table('faqs')->insert([
               'question' => $input['question'],
               'answer' => $input['answer'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
