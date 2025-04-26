<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Work;
use App\Models\WorkEvaluation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::create([
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'display_name' => '管理者',
            'twitter_name' => '@admin',
            'bio' => '管理者アカウントです。',
            'role' => 'admin',
            'status' => 'active',
            'email_verified_at' => now(),
        ]);

        $staff = User::create([
            'email' => 'staff@example.com',
            'password' => Hash::make('password'),
            'display_name' => 'スタッフ',
            'twitter_name' => '@staff',
            'bio' => 'スタッフアカウントです。',
            'role' => 'staff',
            'status' => 'active',
            'email_verified_at' => now(),
        ]);

        $user = User::create([
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'display_name' => '一般ユーザー',
            'twitter_name' => '@user',
            'bio' => '一般ユーザーアカウントです。',
            'role' => 'general',
            'status' => 'active',
            'email_verified_at' => now(),
        ]);

        $categories = [
            '政策',
            '技術',
            '教育',
            '文化',
            'その他',
        ];

        foreach ($categories as $categoryName) {
            Category::create(['name' => $categoryName]);
        }

        $tags = [
            'デジタル化',
            '図書館',
            '予算',
            '国会',
            '教育改革',
            'IT',
            '文化振興',
            '地域活性化',
        ];

        foreach ($tags as $tagName) {
            Tag::create(['name' => $tagName]);
        }

        $work = Work::create([
            'user_id' => $admin->id,
            'category_id' => Category::where('name', '政策')->first()->id,
            'title' => '国会図書館デジタル化予算獲得',
            'cover_image' => null,
            'difficulty_rating' => 4,
            'impact_rating' => 5,
            'progress_rating' => 3,
            'background' => '国会図書館の蔵書のデジタル化が遅れており、貴重な資料へのアクセスが制限されていた。',
            'achievement' => '関係各所との調整を行い、デジタル化予算の確保に成功した。',
            'improvements' => '年間1万冊のデジタル化が可能となり、オンラインでの資料閲覧が実現した。',
            'related_videos' => "https://www.youtube.com/watch?v=dQw4w9WgXcQ\nhttps://www.youtube.com/watch?v=9bZkp7q19f0",
        ]);

        $work->tags()->attach([
            Tag::where('name', 'デジタル化')->first()->id,
            Tag::where('name', '図書館')->first()->id,
            Tag::where('name', '予算')->first()->id,
            Tag::where('name', '国会')->first()->id,
        ]);

        WorkEvaluation::create([
            'work_id' => $work->id,
            'user_id' => $user->id,
            'interest_level' => 3,
            'evaluation_rating' => 3,
            'helped' => true,
            'grateful' => true,
            'amazing' => true,
            'expectation' => false,
            'kind' => false,
            'genius' => false,
            'encouragement' => false,
            'perfect_score' => false,
            'excellent' => true,
            'good_work' => true,
            'comment' => '素晴らしい取り組みだと思います。デジタル化によって多くの人が恩恵を受けることでしょう。',
            'is_visible' => true,
        ]);
    }
}
