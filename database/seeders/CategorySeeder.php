<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();
        
        $categories = [
            "1" => "Categoria_1",
            "2" => "Categoria_2",
            "3" => "Categoria_3"
        ];

        DB::transaction(function () use ($categories) {
            foreach ($categories as $code => $category) {
                Category::updateOrCreate(
                    ['name' => $category]
                );
            }
        });

    }
}
