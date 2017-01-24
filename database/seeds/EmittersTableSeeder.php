<?php

use App\Eloquent\Models\Clan;
use Illuminate\Database\Seeder;

class EmittersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emitters')->insert([
            [
                'number' => 1,
                'clan_id' => Clan::where('name', '=', 'Dark Phönix Wing')->first()->id,
                'x' => 8,
                'y' => 98,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'number' => 23,
                'clan_id' => Clan::where('name', '=', 'Dark Phönix')->first()->id,
                'x' => -298,
                'y' => 8,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'number' => 38,
                'clan_id' => Clan::where('name', '=', 'Dark Phönix')->first()->id,
                'x' => -393,
                'y' => -98,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'number' => 39,
                'clan_id' => Clan::where('name', '=', 'Dark Phönix')->first()->id,
                'x' => -393,
                'y' => 98,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'number' => 57,
                'clan_id' => Clan::where('name', '=', 'Dark Phönix')->first()->id,
                'x' => -493,
                'y' => -198,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'number' => 58,
                'clan_id' => Clan::where('name', '=', 'Dark Phönix')->first()->id,
                'x' => -503,
                'y' => 3,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'number' => 81,
                'clan_id' => Clan::where('name', '=', 'Dark Phönix')->first()->id,
                'x' => -603,
                'y' => -98,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'number' => 64,
                'clan_id' => Clan::where('name', '=', 'Dark_Phönix')->first()->id,
                'x' => 98,
                'y' => 593,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ]);
    }
}