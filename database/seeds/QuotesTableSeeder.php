<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quotes')->insert([
            [
                'user_id' => 2,
                'quote' => 'Cú é cú',
                'author' => 'Gregory Bolsoni',
            ],
            [
                'user_id' => 3,
                'quote' => 'O que vai acontecer, vai acontecer',
                'author' => 'Gabriel Conte',
            ],
            [
                'user_id' => 1,
                'quote' => 'Quanto pior fica, melhor fica',
                'author' => 'Arthur Zanela',
            ],
            [
                'user_id' => 1,
                'quote' => 'Out',
                'author' => 'Guilherme de Almeida',
            ],
            [
                'user_id' => 1,
                'quote' => 'Meu pau não tem balança',
                'author' => 'Gregory Bolsoni',
            ],
            [
                'user_id' => 1,
                'quote' => 'Já peguei piores',
                'author' => 'Desconhecido',
            ],
            [
                'user_id' => 1,
                'quote' => 'Teyy',
                'author' => 'Vani',
            ],
            [
                'user_id' => 1,
                'quote' => 'To na magras',
                'author' => 'Gregory Bolsoni',
            ],
            [
                'user_id' => 1,
                'quote' => 'Não, não não! Não e bem assim!',
                'author' => 'Julio Spido',
            ],
            [
                'user_id' => 1,
                'quote' => 'Bussines Pussy™',
                'author' => 'Gabriel Conte',
            ],
            [
                'user_id' => 1,
                'quote' => 'Várias ideias, poucos dinheiro',
                'author' => 'Arthur Corso',
            ],
        ]);
    }
}
