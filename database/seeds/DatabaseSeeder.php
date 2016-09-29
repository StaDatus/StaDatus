<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        for ($i=0; $i < 3; $i++) {
          $l = factory(App\Law::class)->make();
          $l->save();
          for ($j=0; $j < 5; $j++) {
            $t = factory(App\Template::class)->make();
            $l->templates()->save($t);
            for ($k=0; $k < 10; $k++) {
              $c = factory(App\Criteria::class)->make();
              $t->criterias()->save($c);
            }
          }
        }

    }
}
