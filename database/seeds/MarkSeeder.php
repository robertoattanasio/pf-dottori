<?php

use Illuminate\Database\Seeder;
use App\Mark;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 6; $i++) {
            $new_mark = new Mark();
            $new_mark->mark = $i;

            $new_mark->save();
        }
    }
}
