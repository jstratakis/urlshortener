<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Url;
class UrlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $url=new Url;
        $url->user_id=1;
        $url->title="sportfm";
        $url->original_url="https://sportfm.gr";
        $url->shortened_url="HETWW";
        $url->save();
        Url::factory()->count(300)->create();
    }
}
