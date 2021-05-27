<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories = ['arts', 'writing', 'fashion', 'travels'];
      foreach ($categories as $category) {
        $category_obj = new Category();
        $category_obj->name = $category;
        $category_obj->slug = Str::slug($category, '-');  //Str e' una classe che contiene tutti i metodi di supporto tra cui funzioni come slug

        $category_obj->save();
      }
    }
}
