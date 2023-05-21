<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'apa kita tidak punya sejarah?',
            'slug' => 'apa-kita-tidak-punya-sejarah?',
            'content' => 'belum ada catatan kongkret bagaimana perkembangan PMII UNINUS dari masa ke masa, itu saja terima kasih',
            'image' => "blog_-1680512171.jpg",
            'category_id' => "1",
            'user_id' => "2",
            'views' => "75",
            'active' => "1",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
