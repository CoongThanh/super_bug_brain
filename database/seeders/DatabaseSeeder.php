<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::find(1)-update(['is_admin'=>true]);


        // Lưu ý thứ tự khi có khóa ngoại
        $this-> call([
            Question::class,
            FieldQuestion::class
        ]);
         
    }
}
