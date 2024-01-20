<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // \App\Models\User::factory(10)->create();

    $user = User::create([
      'name' => 'admin',
      'email' => 'admin@gmail.com',
      'password' => '87654321',
      'is_admin' => 1,
    ]);

    $user->save();
  }

}
