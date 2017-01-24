<?php

use Illuminate\Database\Seeder;
use ReDraft\Acl\Eloquent\Role;
use App\Eloquent\Models\Clan;
use App\Eloquent\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('create Phönix clan - group:');
        Clan::firstOrCreate(['name' => 'Dark Phönix',
            'type' => Clan::TYPE_MAIN,
            'description'  => 'Phönix ist ein super Chaotenhaufen :) spass is das wichtigste bei uns
Line ist Pflicht dient zur kommunikation
BND: German + Wings, Dark Souls;',
            'important' => 'BND: German + wings, Dark Souls und Dark Nova

NAP: unbreakables

Raketen NAP es werden keine Emitter beschossen.',
            'logo' => file_get_contents('S:\xampp\htdocs_tdr\public_html\images\9de95cf22a061aeda049c1cf1d1843a8.jpg')
        ]);
        Clan::firstOrCreate(['name' => 'Dark_Phönix',
            'type' => Clan::TYPE_WING,
            'clan_id' => Clan::where('name', '=', 'Dark Phönix')->first()->id
        ]);
        Clan::firstOrCreate(['name' => 'Dark Phönix Wing',
            'type' => Clan::TYPE_WING,
        ]);
        Clan::firstOrCreate(['name' => 'Phönix Wing 3',
            'type' => Clan::TYPE_WING,
            'clan_id' => Clan::where('name', '=', 'Dark Phönix')->first()->id
        ]);

        $this->command->info('begin Member seeding:');
        $this->call(UsersAndSectorsTableSeeder::class);

        /** @var Clan $clan */
        foreach(Clan::all() as $clan) {
            $clan->user_id = 1;
            $clan->save();
        }
        $this->command->info('begin Emitters seeding:');
        $this->call(EmittersTableSeeder::class);
    }
}
