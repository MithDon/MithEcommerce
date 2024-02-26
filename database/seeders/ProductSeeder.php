<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            [
                'name'=>'Iphone mobile',
                'price'=>'200',
                'description'=>'A ASmartphone 2',
                'category'=>'mobile',
                'gallery'=>'https://tiimg.tistatic.com/fp/1/007/574/vivo-mobile-phone-7-38mm-ultra-smooth-body-170g-light-2-5d-adjusted-outline-for-a-great-hold-703.jpg'
            ],
            [
                'name'=>'Oppo mobile',
                'price'=>'300',
                'description'=>'A ASmartphone 3',
                'category'=>'mobile',
                'gallery'=>'https://rukminim2.flixcart.com/image/500/500/xif0q/mobile/f/n/u/-original-imagx9egm9mgmvab.jpeg?q=90&crop=false'
            ],
            [
                'name'=>'Motorola mobile',
                'price'=>'400',
                'description'=>'A ASmartphone 4',
                'category'=>'mobile',
                'gallery'=>'https://rukminim2.flixcart.com/image/850/1000/xif0q/mobile/h/r/b/-original-imagh29eqd3zrvaf.jpeg?q=20&crop=false'
            ],
            [
                'name'=>'Samsung mobile',
                'price'=>'500',
                'description'=>'A ASmartphone 5',
                'category'=>'mobile',
                'gallery'=>'https://cdn1.smartprix.com/rx-iD8y25iVP-w1200-h1200/D8y25iVP.jpg'
            ],
        ]);
    }
}
