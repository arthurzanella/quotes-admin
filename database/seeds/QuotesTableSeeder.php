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
                'quote' => 'Cú é cú',
                'author' => 'Gregory Bolsoni',
            ],
            [
                'quote' => 'O que vai acontecer, vai acontecer',
                'author' => 'Gabriel Conte',
            ],
            [
                'quote' => 'Quanto pior fica, melhor fica',
                'author' => 'Arthur Zanela',
            ],
            [
                'quote' => 'Out',
                'author' => 'Guilherme de Almeida',
            ],
            [
                'quote' => 'Meu pau não tem balança',
                'author' => 'Gregory Bolsoni',
            ],
            [
                'quote' => 'Já peguei piores',
                'author' => 'Desconhecido',
            ],
            [
                'quote' => 'Teyy',
                'author' => 'Vani',
            ],
            [
                'quote' => 'To na magras',
                'author' => 'Gregory Bolsoni',
            ],
            [
                'quote' => 'Não, não não! Não e bem assim!',
                'author' => 'Julio Spido',
            ],
            [
                'quote' => 'Bussines Pussy™',
                'author' => 'Gabriel Conte',
            ],
            [
                'quote' => 'Várias ideias, poucos dinheiro',
                'author' => 'Arthur Corso',
            ],
        ]);
    }
}
