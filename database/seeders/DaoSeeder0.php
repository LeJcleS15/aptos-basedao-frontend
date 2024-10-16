<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaoSeeder extends Seeder
{
    public function run()
    {
        // Seed 20 Standard DAOs
        $standardDaos = [
            ['dao_type' => 'Standard', 'dao_id' => 1, 'name' => 'EcoGreen DAO', 'description' => 'Funding environmental projects to promote sustainability.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058854/sample-dao-1_olcvyl.png', 'is_initialized' => true],
            ['dao_type' => 'Standard', 'dao_id' => 2, 'name' => 'DeFi Yield DAO', 'description' => 'Investment group focused on DeFi opportunities.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058849/sample-dao-2_s5k7i1.png', 'is_initialized' => true],
            ['dao_type' => 'Standard', 'dao_id' => 3, 'name' => 'ArtCollective DAO', 'description' => 'Supports digital artists and art collections.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058851/sample-dao-3_kaxmzq.png', 'is_initialized' => true],
        ];

        for ($i = 4; $i <= 20; $i++) {
            $standardDaos[] = ['dao_type' => 'Standard', 'dao_id' => $i, 'name' => null, 'description' => null, 'image_url' => null, 'is_initialized' => false];
        }

        DB::table('dao')->insert($standardDaos);

        // Seed 20 Guild DAOs
        $guildDaos = [
            ['dao_type' => 'Guild', 'dao_id' => 21, 'name' => 'Coder Guild', 'description' => 'A guild for developers to collaborate on open-source projects.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058855/sample-dao-4_pkxhls.png', 'is_initialized' => true],
            ['dao_type' => 'Guild', 'dao_id' => 22, 'name' => 'MusicMakers Guild', 'description' => 'Community of musicians for collaboration and support.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058850/sample-dao-5_yzqwkx.png', 'is_initialized' => true],
            ['dao_type' => 'Guild', 'dao_id' => 23, 'name' => 'Esports Guild', 'description' => 'Supports esports teams and organizes gaming events.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058858/sample-dao-6_loymiy.png', 'is_initialized' => true],
        ];

        for ($i = 24; $i <= 40; $i++) {
            $guildDaos[] = ['dao_type' => 'Guild', 'dao_id' => $i, 'name' => null, 'description' => null, 'image_url' => null, 'is_initialized' => false];
        }

        DB::table('dao')->insert($guildDaos);

        // Seed 20 Hybrid DAOs
        $hybridDaos = [
            ['dao_type' => 'Hybrid', 'dao_id' => 41, 'name' => 'CharityCircle DAO', 'description' => 'Combines community decision-making with humanitarian projects.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058860/sample-dao-7_gsbq8y.png', 'is_initialized' => true],
            ['dao_type' => 'Hybrid', 'dao_id' => 42, 'name' => 'Media Hub DAO', 'description' => 'Supports content creation across various media channels.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058867/sample-dao-8_c2ml4r.png', 'is_initialized' => true],
            ['dao_type' => 'Hybrid', 'dao_id' => 43, 'name' => 'Crypto Innovators DAO', 'description' => 'Focuses on blockchain innovation and dApp development.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058864/sample-dao-9_rppvye.png', 'is_initialized' => true],
        ];

        for ($i = 44; $i <= 60; $i++) {
            $hybridDaos[] = ['dao_type' => 'Hybrid', 'dao_id' => $i, 'name' => null, 'description' => null, 'image_url' => null, 'is_initialized' => false];
        }

        DB::table('dao')->insert($hybridDaos);
    }
}
