<?php



use Illuminate\Database\Seeder;

use App\Boost;



class BoostSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $boost_list = [
            "standard" => [
                "hours" => 24,
                "price" => 2.99
            ],
            "pro" => [
                "hours" => 72,
                "price" => 5.99
            ],
            "premium" => [
                "hours" => 144,
                "price" => 9.99
            ],
        ];

        $keys = array_keys($boost_list);

        for($i = 0; $i < count($boost_list); $i++) {
            $new_boost = new Boost();
            $new_boost->boost_name = $keys[$i];
            $new_boost->hours = $boost_list[$keys[$i]]['hours'];
            $new_boost->price = $boost_list[$keys[$i]]['price'];

            $new_boost->save();
        }
    }
}