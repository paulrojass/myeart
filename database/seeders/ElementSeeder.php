<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Attribute;
use App\Models\Element;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        /** @var array Elementos asociados a los Atributos */
        $attributes_elements = [
            "1" => [
                "Elemento_1_1",
                "Elemento_1_2"
            ],
            "2" => [
                "Elemento_2_1",
                "Elemento_2_2"
            ],
            "3" => [
                "Elemento_3_1",
                "Elemento_3_2"
            ],
            "4" => [
                "Elemento_4_1",
                "Elemento_4_2"
            ],
            "5" => [
                "Elemento_5_1",
                "Elemento_5_2"
            ],
            "6" => [
                "Elemento_6_1",
                "Elemento_6_2"
            ],
        ];

        DB::transaction(function () use ($attributes_elements) {
            foreach ($attributes_elements as $attribute_id => $elements) {
                /** @var object almacena informacion del atributo*/
                $att = Attribute::find($attribute_id);
                foreach ($elements as $element) {
                    Element::updateOrCreate(['name' => $element, 'attribute_id' => $att->id], []);
                }
            }
        });
    }
}
