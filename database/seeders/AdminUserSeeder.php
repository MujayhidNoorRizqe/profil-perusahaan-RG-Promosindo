<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Jalankan seeder akun admin default.
     */
    public function run(): void
    {
        $email = 'admin@restuguru.com';

        $exists = DB::table('users')->where('email', $email)->exists();

        if (! $exists) {
            DB::table('users')->insert([
                'name' => 'Administrator',
                'email' => $email,
                'password' => Hash::make('admin123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $this->command->info("✅ Akun admin dibuat:");
            $this->command->warn("   Email: $email");
            $this->command->warn("   Password: admin123");
        } else {
            $this->command->info("ℹ️ Akun admin sudah ada, lewati seeding.");
        }
    }
}