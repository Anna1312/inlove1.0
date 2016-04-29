<?php
/**
 * Created by VeryStar.
 * User: Anna
 * Date: 2016/4/28
 * Time: 13:36
 */
use Illuminate\Database\Seeder;
use App\Page;
use Illuminate\Support\Facades\DB;

    class PageTableSeeder extends Seeder {
        public function run() {
            DB::table('pages')->delete();
            for ($i = 11; $i < 20; $i++) {
                DB::table('pages')->insert([
                    'title'   => 'Title' . $i,
                    'slug'    => 'first_page',
                    'body'    => 'Body' . $i,
                    'user_id' => 1,
                ]);
            }
        }
    }