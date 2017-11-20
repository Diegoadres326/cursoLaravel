<?php

use Illuminate\Database\Seeder;
use App\Product;

class productSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//phpcompanion
    
    Product::insert([
      	'name'=>'PRODUCTO5',
      	'cantidad'=>8,
      	'precio'=>3,
      	'estado'=>0
      ]);

     // DB:table(products)->insert([
      //	'name'=>'ABC',
      //	'cantidad'=>'12'
      //])


    }





}
