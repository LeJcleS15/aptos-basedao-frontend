<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed 20 Standard DAOs
        $standardDaos = [
            ['dao_type' => 'Standard', 'dao_id' => 1, 'name' => 'EcoGreen DAO', 'description' => 'Focused on funding and supporting environmental projects, EcoGreen DAO enables members to propose and vote on initiatives that promote sustainability, such as reforestation, clean energy, and conservation efforts.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058854/sample-dao-1_olcvyl.png', 'is_initialized' => true],
            ['dao_type' => 'Standard', 'dao_id' => 2, 'name' => 'DeFi Yield DAO', 'description' => 'A collective investment group where members pool funds to explore and invest in various decentralized finance opportunities, with proposals centered around high-yield farming strategies and token swaps.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058849/sample-dao-2_s5k7i1.png', 'is_initialized' => true],
            ['dao_type' => 'Standard', 'dao_id' => 3, 'name' => 'ArtCollective DAO', 'description' => 'A DAO for digital art enthusiasts and collectors, ArtCollective allows members to vote on acquiring new artworks, organizing virtual galleries, and hosting auctions, all in support of digital artists.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058851/sample-dao-3_kaxmzq.png', 'is_initialized' => true],
        ];

        for ($i = 4; $i <= 20; $i++) {
            $standardDaos[] = ['dao_type' => 'Standard', 'dao_id' => $i, 'name' => null, 'description' => null, 'image_url' => null, 'is_initialized' => false];
        }

        DB::table('dao')->insert($standardDaos);

        // Seed 20 Guild DAOs
        $guildDaos = [
            ['dao_type' => 'Guild', 'dao_id' => 21, 'name' => 'Coder Guild', 'description' => 'A professional guild for developers to share resources, participate in coding challenges, and vote on open-source projects to support. Coder Guild members collaborate on various tech projects and build a stronger developer community.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058855/sample-dao-4_pkxhls.png', 'is_initialized' => true],
            ['dao_type' => 'Guild', 'dao_id' => 22, 'name' => 'MusicMakers Guild', 'description' => 'A community of musicians and producers who collectively promote new music projects, provide mentorship, and organize collaborative events. Members share expertise and vote on projects that showcase emerging talent.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058850/sample-dao-5_yzqwkx.png', 'is_initialized' => true],
            ['dao_type' => 'Guild', 'dao_id' => 23, 'name' => 'Esports Guild', 'description' => 'Designed for a group of gamers and esports enthusiasts who want to support competitive teams, organize tournaments, and fund gaming content. Members decide on team sponsorships, events, and training programs.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058858/sample-dao-6_loymiy.png', 'is_initialized' => true],
        ];

        for ($i = 24; $i <= 40; $i++) {
            $guildDaos[] = ['dao_type' => 'Guild', 'dao_id' => $i, 'name' => null, 'description' => null, 'image_url' => null, 'is_initialized' => false];
        }

        DB::table('dao')->insert($guildDaos);

        // Seed 20 Hybrid DAOs
        $hybridDaos = [
            ['dao_type' => 'Hybrid', 'dao_id' => 41, 'name' => 'CharityCircle DAO', 'description' => 'A hybrid DAO that combines community-driven decision-making with role-based voting for humanitarian projects. Members can propose and fund initiatives like disaster relief or educational programs, while specific roles hold additional influence.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058860/sample-dao-7_gsbq8y.png', 'is_initialized' => true],
            ['dao_type' => 'Hybrid', 'dao_id' => 42, 'name' => 'Media Hub DAO', 'description' => 'For content creators and media professionals, this DAO funds creative projects, such as films, podcasts, and online series. Hybrid governance allows token holders to vote while role-based weights amplify votes from creators with expertise in specific areas.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058867/sample-dao-8_c2ml4r.png', 'is_initialized' => true],
            ['dao_type' => 'Hybrid', 'dao_id' => 43, 'name' => 'Crypto Innovators DAO', 'description' => 'A DAO for blockchain enthusiasts focused on fostering innovation in the crypto space. Members propose ideas for new dApps, research projects, and partnerships, with a hybrid model allowing subject matter experts to influence major decisions.', 'image_url' => 'https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729058864/sample-dao-9_rppvye.png', 'is_initialized' => true],
        ];

        for ($i = 44; $i <= 60; $i++) {
            $hybridDaos[] = ['dao_type' => 'Hybrid', 'dao_id' => $i, 'name' => null, 'description' => null, 'image_url' => null, 'is_initialized' => false];
        }

        DB::table('dao')->insert($hybridDaos);
    }
}
