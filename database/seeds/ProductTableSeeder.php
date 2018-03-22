<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
          array(
              [
                'name' => 'product',
              ],
              [
                  'name' => 'product2',
              ],
          )
        );
    }
}
