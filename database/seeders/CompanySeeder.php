<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Company::truncate();
        \App\Models\Company::insert([
            [
                'url' => path('homepage', 'company-1.png'),
                'link' => 'http://aspapi.org/',
                'created_at' => now('-11 hours'),
                'updated_at' => now('-11 hours')
            ], [
                'url' => path('homepage', 'company-2.png'),
                'link' => 'https://www.itb.ac.id/',
                'created_at' => now('-10 hours'),
                'updated_at' => now('-10 hours')
            ], [
                'url' => path('homepage', 'company-3.png'),
                'link' => 'https://www.inti.co.id/',
                'created_at' => now('-9 hours'),
                'updated_at' => now('-9 hours')
            ], [
                'url' => path('homepage', 'company-4.png'),
                'link' => 'http://www.belajarmikrotik.com/',
                'created_at' => now('-8 hours'),
                'updated_at' => now('-8 hours')
            ], [
                'url' => path('homepage', 'company-5.png'),
                'link' => 'http://www.msvpictures.com/',
                'created_at' => now('-7 hours'),
                'updated_at' => now('-7 hours')
            ], [
                'url' => path('homepage', 'company-6.png'),
                'link' => 'http://www.amikom.ac.id/',
                'created_at' => now('-6 hours'),
                'updated_at' => now('-6 hours')
            ], [
                'url' => path('homepage', 'company-7.png'),
                'link' => 'http://www.melsa.net.id/',
                'created_at' => now('-5 hours'),
                'updated_at' => now('-5 hours')
            ], [
                'url' => path('homepage', 'company-8.png'),
                'link' => 'http://www.axiooworld.com/',
                'created_at' => now('-4 hours'),
                'updated_at' => now('-4 hours')
            ], [
                'url' => path('homepage', 'company-9.png'),
                'link' => 'http://www.cgs.co.id/newcgs/',
                'created_at' => now('-3 hours'),
                'updated_at' => now('-3 hours')
            ], [
                'url' => path('homepage', 'company-10.png'),
                'link' => 'https://www.skyline.net.id/',
                'created_at' => now('-2 hours'),
                'updated_at' => now('-2 hours')
            ], [
                'url' => path('homepage', 'company-11.png'),
                'link' => 'http://www.mikrotik.com/',
                'created_at' => now('-1 hours'),
                'updated_at' => now('-1 hours')
            ], [
                'url' => path('homepage', 'company-12.png'),
                'link' => 'https://www.smooets.com/',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
