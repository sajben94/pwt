<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'meno' => "Test",
        'priezvisko' => "Tester",
        'mail' => "test@ukf.sk",
        'heslo' => bcrypt('enter'),
        'vek' => 30,
      ]);
    }
}
