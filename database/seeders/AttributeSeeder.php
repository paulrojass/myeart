<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Attribute;
use App\Models\Category;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        /** @var array Ciudades asociadas a un Estado */
        $categories_attributes = [
            "1" => [
                "Atributo_1_1",
                "Atributo_1_2"
            ],
            "2" => [
                "Atributo_2_1",
                "Atributo_2_2"
            ],
            "3" => [
                "Atributo_3_1",
                "Atributo_3_2"
            ],
        ];

        DB::transaction(function () use ($categories_attributes) {
            foreach ($categories_attributes as $category_id => $attributes) {
                /** @var object Almacena información del Estado */
                $cat = Category::find($category_id);
                foreach ($attributes as $attribute) {
                    Attribute::updateOrCreate(['name' => $attribute, 'category_id' => $cat->id], []);
                }
            }
        });

    }
}
