<?php

use Illuminate\Database\Seeder;

class CategorySpendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_spends')->insert([
            'title' => 'Ăn sáng',
            'price_default' => 20000,
            'avatar' => null,
            'user_id' => null
        ]);
        DB::table('category_spends')->insert([
            'title' => 'Ăn trưa',
            'price_default' => 25000,
            'avatar' => null,
            'user_id' => null
        ]);
        DB::table('category_spends')->insert([
            'title' => 'Ăn tối',
            'price_default' => 30000,
            'avatar' => null,
            'user_id' => null
        ]);
    }
}
