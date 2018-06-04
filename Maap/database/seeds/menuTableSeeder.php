<?php

use Illuminate\Database\Seeder;

class menuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menu = new App\menu([
            'name' => 'PLANNING'
        ]);
        $menu -> save();
        $menu = new App\menu([
            'name' => 'DRAFTING'
        ]);
        $menu -> save();
        $menu = new App\menu([
            'name' => 'LOANS & PROPERTY'
        ]);
        $menu -> save();
        $menu = new App\menu([
            'name' => 'DRAFTING'
        ]);
        $menu -> save();
    }
}
