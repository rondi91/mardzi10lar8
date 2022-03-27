<?php

namespace Database\Factories;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 3),
            'user_id' => rand(1, 10),
            'kode_product' => rand(1, 10),
            'harga' => rand(100000, 200000),
            'nama_product' => Str::slug($this->faker->name('10')),
            'slug_product' => Str::slug($this->faker->name()),
            'deskripsi_product' => $this->faker->text(),
            'qty' => rand(1, 10),


        ];
    }
}
