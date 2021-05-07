<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            ['question' => '{"es": "¿Cuál es el mínimo de retiro?", "en": "What is the minimum withdrawal?"}', 'slug' => 'cual-es-el-minimo-de-retiro', 'answer' => '{"es": "¿Cuál es el mínimo de retiro?", "en": "¿What is the minimum withdrawal?"}', 'state' => '1'],
            ['question' => '{"es": "¿Qué es el KYC?", "en": "What is the KYC?"}', 'slug' => 'que-es-el-kyc', 'answer' => '{"es": "¿Qué es el KYC?", "en": "What is the KYC?"}', 'state' => '1'],
            ['question' => '{"es": "¿Cómo puedo retirar?", "en": "How can I withdraw?"}', 'slug' => 'como-puedo-retirar', 'answer' => '{"es": "¿Cómo puedo retirar?", "en": "How can I withdraw?"}', 'state' => '1']
    	];
    	DB::table('questions')->insert($questions);
    }
}
