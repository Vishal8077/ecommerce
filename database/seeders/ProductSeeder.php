<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert(
            [
                "name"=>'LG Mobile',
                "price"=>'2600',
                "description"=>'smart phone have lg',
                "category"=>'mobile',
                "gallary"=>'hello'
            ],
            [
                "name"=>'OPPO',
                "price"=>'400',
                "description"=>'smart phone have lg',
                "category"=>'mobile',
                "gallary"=>'LJNL'
            ],
            [
                "name"=>'Mobile',
                "price"=>'600',
                "description"=>'smart phone have lg',
                "category"=>'mobile',
                "gallary"=>'kjbbbbb'
            ],
            [
                "name"=>'RealMe',
                "price"=>'13600',
                "description"=>'smart phone have lg',
                "category"=>'mobile',
                "gallary"=>'kjbbbbb'
            ]
        );
    }
}
