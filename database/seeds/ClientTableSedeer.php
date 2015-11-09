<?php

use Illuminate\Database\Seeder;

class ClientTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Curso\Client::truncate();
        factory(\Curso\Client::class, 10)->create();
    }
}
