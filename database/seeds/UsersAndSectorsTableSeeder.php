<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Models\Clan;
use App\Eloquent\Models\Emitter;
use App\Eloquent\Models\User;
use App\Eloquent\Models\Sector;

class UsersAndSectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            [
                'Florian Hartl' => [
                    [
                        'x' => 181,
                        'y' => 250,
                    ],
                ],
            ],
            [
                'Tanner Emil' => [
                    [
                        'x' => 480,
                        'y' => 436,
                    ],
                ],
            ],
            [
                'Daniel Lamberg' => [
                    [
                        'x' => 131,
                        'y' => -285,
                    ],
                ],
            ],
            [
                'P!tchbl4ck' => [
                    [
                        'x' => -465,
                        'y' => -24,
                    ],
                ],
            ],
            [
                'Татьяна Шартон (Tatjana Sharon - Tati)' => [
                    [
                        'x' => -575,
                        'y' => -269,
                    ],
                ],
            ],
            [
                'Chris Retten' => [
                    [
                        'x' => -140,
                        'y' => -529,
                    ],
                ],
            ],
            [
                'RettenCh' => [
                    [
                        'x' => 235,
                        'y' => -539,
                    ],
                ],
            ],
            [
                'Sascha HerrWeißer' => [
                    [
                        'x' => 710,
                        'y' => -284,
                    ],
                ],
            ],
            [
                'TD Reborn' => [
                    [
                        'x' => -455,
                        'y' => -144
                    ],
                ],
            ],
            [
                'Heiko McMages' => [
                    [
                        'x' => 246,
                        'y' => 141,
                    ],
                ],
            ],
            [
                '..mc74..' => [
                    [
                        'x' => 605,
                        'y' => -834
                    ],
                ],
            ],
            [
                'Sascha Lucia' => [
                    [
                        'x' => 781,
                        'y' => 641,
                    ],
                ],
            ],
            [
                'basti_06' => [
                    [
                        'x' => -475,
                        'y' => -280,
                    ],
                ],
            ],
            [
                'P!tchBl4ck' => [
                    [
                        'x' => 551,
                        'y' => -164
                    ],
                ],
            ],
            [
                'Matthias Thielicke' => [
                    [
                        'x' => 101,
                        'y' => 435,
                    ],
                ],
            ],
            [
                'Jörg Merten' => [
                    [
                        'x' => -320,
                        'y' => 316,
                    ],
                ],
            ],
            [
                'Pepe Timpe' => [
                    [
                        'x' => 160,
                        'y' => -544,
                    ],
                ],
            ],
            [
                'Christian Draht' => [
                    [
                        'x' => -185,
                        'y' => 355,
                    ],
                ],
            ],
            [
                'User #5151174' => [
                    [
                        'x' => -905,
                        'y' => 135,
                    ],
                ],
            ],
            [
                'Christian Johannes Rettensteiner' => [
                    [
                        'x' => 600,
                        'y' => -529,
                    ],
                ],
            ],
            [
                'René Czerson' => [
                    [
                        'x' => -780,
                        'y' => 41,
                    ],
                ],
            ],
            [
                'Daniel Schumann' => [
                    [
                        'x' => 916,
                        'y' => 746,
                        'name' => 'Coruscant',
                        'type' => Sector::TYPE_DEF
                    ],
                ],
            ],
            [
                'ewillion' => [
                    [
                        'x' => -354,
                        'y' => 530,
                    ],
                ],
            ],
            [
                'Stefan Böhler' => [
                    [
                        'x' => 30,
                        'y' => -459,
                    ],
                ],
            ],
            [
                'Patrick Finter' => [
                    [
                        'x' => -549,
                        'y' => 181,
                    ],
                ],
            ],
            [
                'kafe60' => [
                    [
                        'x' => 190,
                        'y' => -579,
                    ],
                ],
            ],
            [
                'Tafilaj Homez' => [
                    [
                        'x' => -445,
                        'y' => -90,
                    ],
                ],
            ],
            [
                'Chris Retti' => [
                    [
                        'x' => 295,
                        'y' => -130,
                    ],
                ],
            ],
            [
                'Marcus Hill' => [
                    [
                        'x' => 786,
                        'y' => -859,
                    ],
                ],
            ],
            [
                'Jan Nikles' => [
                    [
                        'x' => -39,
                        'y' => 225,
                    ],
                ],
            ],
            [
                'Manuel Witt' => [
                    [
                        'x' => 230,
                        'y' => 196,
                    ],
                ],
            ],
            [
                'Sergej Aha' => [
                    [
                        'x' => -549,
                        'y' => 361,
                    ],
                ],
            ],
            [
                'Kayser Tom' => [
                    [
                        'x' => -25,
                        'y' => 581,
                    ],
                ],
            ],
            [
                'Gerrit Schwedler' => [
                    [
                        'x' => 291,
                        'y' => -150,
                    ],
                ],
            ],
            [
                'Karsten Feld' => [
                    [
                        'x' => -580,
                        'y' => 196,
                    ],
                ],
            ],
            [
                'Claudia Dvoracek' => [
                    [
                        'x' => 431,
                        'y' => 320,
                    ],
                ],
            ],
            [
                'Matze*6' => [
                    [
                        'x' => -180,
                        'y' => 450,
                    ],
                ],
            ],
            [
                'Tom Albers' => [
                    [
                        'x' => -354,
                        'y' => -550,
                    ],
                ],
            ],
            [
                'DarkEarth882' => [
                    [
                        'x' => 166,
                        'y' => 420,
                    ],
                ],
            ],
            [
                'Eyk Hennig' => [
                    [
                        'x' => 86,
                        'y' => -245,
                    ],
                ],
            ],
            [
                'Evelyn Brown' => [
                    [
                        'x' => -354,
                        'y' => -464,
                    ],
                ],
            ],
            [
                'Olivier Herbaudeau' => [
                    [
                        'x' => 375,
                        'y' => 151,
                    ],
                ],
            ],
            [
                'Daniel Matzer' => [
                    [
                        'x' => 465,
                        'y' => 311,
                    ],
                ],
            ],
            [
                'Rouven Düvel' => [
                    [
                        'x' => -59,
                        'y' => -494,
                    ],
                ],
            ],
            [
                'Kai Henßler' => [
                    [
                        'x' => -369,
                        'y' => -480,
                    ],
                ],
            ],
            [
                'Zagadka 11' => [
                    [
                        'x' => 246,
                        'y' => 595
                    ],
                ],
            ],
            [
                'User #2561423' => [
                    [
                        'x' => -530,
                        'y' => -605,
                    ],
                ],
            ],
            [
                'Buri61' => [
                    [
                        'x' => 226,
                        'y' => 516,
                    ],
                ],
            ],
            [
                'JCW7007' => [
                    [
                        'x' => 261,
                        'y' => 175,
                    ],
                ],
            ],
            [
                'Klaus-Werner Gallinat' => [
                    [
                        'x' => -459,
                        'y' => 206,
                    ],
                ],
            ],
            [
                'Bella Black' => [
                    [
                        'x' => 516,
                        'y' => 860,
                    ],
                ],
            ],
            [
                'Sunny Dahms' => [
                    [
                        'x' => 845,
                        'y' => -359,
                    ],
                ],
            ],
            [
                'Bert Kirschner' => [
                    [
                        'x' => -54,
                        'y' => 206,
                    ],
                ],
            ],
            [
                'Rudl :-o' => [
                    [
                        'x' => 506,
                        'y' => -290,
                    ],
                ],
            ],
            [
                'resyak86' => [
                    [
                        'x' => -434,
                        'y' => -336,
                    ],
                ],
            ],
            [
                'Matthias Bredow' => [
                    [
                        'x' => 96,
                        'y' => -204,
                    ],
                ],
            ],
            [
                'Philipp Weijnman' => [
                    [
                        'x' => -584,
                        'y' => -360,
                    ],
                ],
            ],
            [
                'JCW7007' => [
                    [
                        'x' => 65,
                        'y' => -790,
                    ],
                ],
            ],
            [
                'Raimund Günster' => [
                    [
                        'x' => 791,
                        'y' => 461,
                    ],
                ],
            ],
            [
                'User #2377611' => [
                    [
                        'x' => -490,
                        'y' => 290,
                    ],
                ],
            ],
            [
                'RettenCh' => [
                    [
                        'x' => 460,
                        'y' => 211,
                    ],
                ],
            ],
            [
                'Elmar Rist' => [
                    [
                        'x' => -794,
                        'y' => 6,
                    ],
                ],
            ],
            [
                'Mike Lutz Schröder' => [
                    [
                        'x' => -825,
                        'y' => -605,
                    ],
                ],
            ],
            [
                'K-W G' => [
                    [
                        'x' => 111,
                        'y' => -809,
                    ],
                ],
            ],
            [
                'Abdullah Doganay' => [
                    [
                        'x' => -79,
                        'y' => -45,
                    ],
                ],
            ],
            [
                'Christian Roger' => [
                    [
                        'x' => -899,
                        'y' => 456,
                    ],
                ],
            ],
            [
                'Mario Graul' => [
                    [
                        'x' => -869,
                        'y' => 346,
                    ],
                ],
            ],
            [
                'Vincent Schmieder' => [
                    [
                        'x' => 876,
                        'y' => -390,
                    ],
                ],
            ],
            [
                'Mike Steiner' => [
                    [
                        'x' => 141,
                        'y' => 281,
                    ],
                ],
            ],
            [
                'Jan Gyver' => [
                    [
                        'x' => -560,
                        'y' => 655,
                    ],
                ],
            ],
            [
                'Andre Piel' => [
                    [
                        'x' => -334,
                        'y' => 261,
                    ],
                ],
            ],
            [
                'Sascha Werren' => [
                    [
                        'x' => -330,
                        'y' => 321,
                    ],
                ],
            ],
            [
                'Sascha werren' => [
                    [
                        'x' => -184,
                        'y' => 460,
                    ],
                ],
            ],
            [
                'pilini' => [
                    [
                        'x' => 181,
                        'y' => 376,
                    ],
                ],
            ],
            [
                'Roman Erb' => [
                    [
                        'x' => 775,
                        'y' => -544,
                    ],
                ],
            ],
            [
                'Max Burg' => [
                    [
                        'x' => -680,
                        'y' => 916,
                    ],
                ],
            ],
            [
                ' Thorstein ' => [
                    [
                        'x' => 696,
                        'y' => 695,
                    ],
                ],
            ],
            [
                'Natascha Michael Preinfalk' => [
                    [
                        'x' => -689,
                        'y' => -279,
                    ],
                ],
            ],
            [
                'kafe60' => [
                    [
                        'x' => -140,
                        'y' => 590,
                    ],
                ],
            ],
            [
                'Саня Краус (Sanja Kraus - Alex)' => [
                    [
                        'x' => 610,
                        'y' => 866,
                    ],
                ],
            ],
            [
                'Red John' => [
                    [
                        'x' => -909,
                        'y' => 781,
                    ],
                ],
            ],
            [
                'naschkater195' => [
                    [
                        'x' => 221,
                        'y' => -484,
                    ],
                ],
            ],
            [
                'Rolf Bürger' => [
                    [
                        'x' => -185,
                        'y' => 230,
                    ],
                ],
            ],
            [
                'Andreas Stützer' => [
                    [
                        'x' => 230,
                        'y' => 206,
                    ],
                ],
            ],
            [
                'Bodo Stieghorst' => [
                    [
                        'x' => 405,
                        'y' => 476,
                    ],
                ],
            ],
            [
                'Marcel Rockside' => [
                    [
                        'x' => 11,
                        'y' => -325,
                    ],
                ],
            ],
            [
                'Thomas Fallak' => [
                    [
                        'x' => -49,
                        'y' => 230,
                    ],
                ],
            ],
            [
                'User #5110267' => [
                    [
                        'x' => -319,
                        'y' => 140,
                    ],
                ],
            ],
            [
                'User #5382262' => [
                    [
                        'x' => -295,
                        'y' => -935,
                    ],
                ],
            ],
            [
                'User #3519701' => [
                    [
                        'x' => 660,
                        'y' => -124,
                    ],
                ],
            ],
            [
                'Juanita Kreutzberg' => [
                    [
                        'x' => 675,
                        'y' => -925,
                    ],
                ],
            ],
            [
                'merlin270964' => [
                    [
                        'x' => -580,
                        'y' => 550,
                    ],
                ],
            ],
            [
                'uomo1978' => [
                    [
                        'x' => 61,
                        'y' => -84,
                    ],
                ],
            ],
            [
                'Mike Rosenthal' => [
                    [
                        'x' => -714,
                        'y' => 686,
                    ],
                ],
            ],
            [
                'Caroline TDreborn' => [
                    [
                        'x' => -39,
                        'y' => 340,
                    ],
                ],
            ],
            [
                'draht1985' => [
                    [
                        'x' => 461,
                        'y' => -404,
                    ],
                ],
            ],
            [
                'User #3931602' => [
                    [
                        'x' => -535,
                        'y' => -179,
                    ],
                ],
            ],
            [
                'User #4688050' => [
                    [
                        'x' => -469,
                        'y' => -794,
                    ],
                ],
            ],
            [
                'Christian Lenz' => [
                    [
                        'x' => 45,
                        'y' => -4,
                    ],
                ],
            ],
            [
                'Nico Ehler' => [
                    [
                        'x' => -190,
                        'y' => 455,
                    ],
                ],
            ],
            [
                'Marko Franzel' => [
                    [
                        'x' => 516,
                        'y' => -649,
                    ],
                ],
            ],
            [
                'Thomas Böhme' => [
                    [
                        'x' => 476,
                        'y' => -64,
                    ],
                ],
            ],
            [
                'Makavelli-' => [
                    [
                        'x' => -350,
                        'y' => 806,
                    ],
                ],
            ],
            [
                'Kevin Preinfalk' => [
                    [
                        'x' => 685,
                        'y' => 210,
                    ],
                ],
            ],
            [
                'Sebastian Reincke' => [
                    [
                        'x' => -459,
                        'y' => -249,
                    ],
                ],
            ],
            [
                'Basti Reincke' => [
                    [
                        'x' => -74,
                        'y' => -464,
                    ],
                ],
            ],
            [
                'User #1380113' => [
                    [
                        'x' => -315,
                        'y' => -390,
                    ],
                ],
            ],
            [
                'Oliver Eschenbach' => [
                    [
                        'x' => -559,
                        'y' => -444,
                    ],
                ],
            ],
            [
                'Ro Bert' => [
                    [
                        'x' => -509,
                        'y' => 201,
                    ],
                ],
            ],
            [
                'Meanor En Fea Elen' => [
                    [
                        'x' => -365,
                        'y' => -584,
                    ],
                ],
            ],
            [
                'Benjamin LöSchön' => [
                    [
                        'x' => -410,
                        'y' => -559,
                    ],
                ],
            ],
            [
                'Florian Wehner' => [
                    [
                        'x' => -434,
                        'y' => -564,
                    ],
                ],
            ],
            [
                'basti.re' => [
                    [
                        'x' => 371,
                        'y' => 306,
                    ],
                ],
            ],
            [
                'Steffen Kehl' => [
                    [
                        'x' => -249,
                        'y' => -560,
                    ],
                ],
            ],
            [
                'User #2591044' => [
                    [
                        'x' => 586,
                        'y' => -615,
                    ],
                ],
            ],
            [
                'bensway' => [
                    [
                        'x' => -590,
                        'y' => -589,
                    ],
                ],
            ],
            [
                'merlin270964' => [
                    [
                        'x' => 60,
                        'y' => 480,
                    ],
                ],
            ],
            [
                'Thore Liedtke' => [
                    [
                        'x' => -610,
                        'y' => 426,
                    ],
                ],
            ],
            [
                'physio80' => [
                    [
                        'x' => -599,
                        'y' => 516,
                    ],
                ],
            ],
            [
                'Andreas Aichinger' => [
                    [
                        'x' => 295,
                        'y' => -559,
                    ],
                ],
            ],
            [
                'merlin270964' => [
                    [
                        'x' => -599,
                        'y' => -65,
                    ],
                ],
            ],
            [
                'Erik Tas' => [
                    [
                        'x' => 425,
                        'y' => 185,
                    ],
                ],
            ],
            [
                'Marcel Rockside' => [
                    [
                        'x' => 60,
                        'y' => 536,
                    ],
                ],
            ],
            [
                '.<*VKing*>.' => [
                    [
                        'x' => 115,
                        'y' => 150,
                    ],
                ],
            ],
            [
                'Marcel Rockside' => [
                    [
                        'x' => 806,
                        'y' => -64,
                    ],
                ],
            ],
            [
                'Patrick Dvoracek' => [
                    [
                        'x' => -895,
                        'y' => -350,
                    ],
                ],
            ],
            [
                'User #2276100' => [
                    [
                        'x' => -24,
                        'y' => -459,
                    ],
                ],
            ],
            [
                'Franz Dettbarn' => [
                    [
                        'x' => 831,
                        'y' => 536,
                    ],
                ],
            ],
            [
                'Renè Gasselik' => [
                    [
                        'x' => 291,
                        'y' => 525,
                    ],
                ],
            ],
            [
                'Christoph Geissler' => [
                    [
                        'x' => 630,
                        'y' => 630,
                    ],
                ],
            ],
            [
                'Илья Neshi (Ilija Neschi)' => [
                    [
                        'x' => 50,
                        'y' => -610,
                    ],
                ],
            ],
            [
                'Kitty Ironforce' => [
                    [
                        'x' => -199,
                        'y' => -155,
                    ],
                ],
            ],
            [
                'Jaquelin Herz' => [
                    [
                        'x' => 825,
                        'y' => 46,
                    ],
                ],
            ],
            [
                'Renè Gasselik' => [
                    [
                        'x' => 420,
                        'y' => -219,
                    ],
                ],
            ],
            [
                'Gido W.' => [
                    [
                        'x' => -129,
                        'y' => -799,
                    ],
                ],
            ],
            [
                'User #4610504' => [
                    [
                        'x' => 721,
                        'y' => -170,
                    ],
                ],
            ],
            [
                'Bruno Morin' => [
                    [
                        'x' => -319,
                        'y' => -159,
                    ],
                ],
            ],
            [
                'Gido Werner' => [
                    [
                        'x' => 621,
                        'y' => -445,
                    ],
                ],
            ],
            [
                'Oliver Schäfer' => [
                    [
                        'x' => -324,
                        'y' => -844,
                    ],
                ],
            ],
            [
                'Oliver Pad Eschenbach' => [
                    [
                        'x' => 80,
                        'y' => -759,
                    ],
                ],
            ],
            [
                'Andreas Schrott' => [
                    [
                        'x' => -275,
                        'y' => -114,
                    ],
                ],
            ],
            [
                'Andreas Grabner' => [
                    [
                        'x' => 545,
                        'y' => 765,
                    ],
                ],
            ],
            [
                'Gido W.' => [
                    [
                        'x' => -930,
                        'y' => -549,
                    ],
                ],
            ],
            [
                'User #4749392' => [
                    [
                        'x' => -524,
                        'y' => 785,
                    ],
                ],
            ]
        ];

        // insert
        $a = [];
        foreach($members as $member) {
            foreach ($member AS $name => $data) {
                $u = User::firstOrNew(['name' => $name]);
                $u->save();

                foreach ($data as $sector) {
                    // assign the sector to his player
                    $s = new Sector($sector);
                    $s->clan()->associate(Clan::where('name', 'Dark Phönix')->first());
                    $s->user()->associate($u);
                    $s->save();
                }
            }
        }

        // do some special things
        $user = User::where('name', 'Daniel Schumann')->first();
        $user->email = 'strolch00@gmail.com';
        $user->password = bcrypt('phönix');
        $user->save();
        $emi = Emitter::whereIn('number', [39])->pluck('id');
        $user->emitters()->sync($emi->toArray());

        $user = User::where('name', 'Klaus-Werner Gallinat')->first();
        $user->email = 'gallinatkw@freenet.de';
        $user->password = bcrypt('phönix');
        $user->save();
        $emi = Emitter::whereIn('number', [38])->pluck('id');
        $user->emitters()->sync($emi->toArray());

        $user = User::where('name', 'TD Reborn')->first();      // Kevin Bartlemeß
        $user->email = 'hydra-cl-info@web.de';
        $user->password = bcrypt('phönix');
        $user->save();
        $emi = Emitter::whereIn('number', [1, 57])->pluck('id');
        $user->emitters()->sync($emi->toArray());

        $user = User::where('name', 'Jörg Merten')->first();
        $user->email = '';
        $user->password = bcrypt('phönix');
        $user->save();
        $emi = Emitter::whereIn('number', [81])->pluck('id');
        $user->emitters()->sync($emi->toArray());

        $user = User::where('name', 'P!tchbl4ck')->first();
        $user->email = 'alex.mittrach@myway.de';
        $user->password = bcrypt('phönix');
        $user->save();
        $emi = Emitter::whereIn('number', [23])->pluck('id');
        $user->emitters()->sync($emi->toArray());

        $user = User::where('name', 'René Czerson')->first();
        $user->email = 'r-czerson@live.com';
        $user->password = bcrypt('phönix');
        $user->save();
        $emi = Emitter::whereIn('number', [58])->pluck('id');
        $user->emitters()->sync($emi->toArray());

        $user = User::where('name', 'Florian Hartl')->first();
        $user->email = 'hartl.florian@yahoo.de';
        $user->password = bcrypt('phönix');
        $user->save();

        $user = User::where('name', 'Chris Retten')->first();
        $user->email = 'christian.rettensteiner@oganet.at';
        $user->password = bcrypt('phönix');
        $user->save();

        $user = User::where('name', 'bensway')->first();
        $user->notice = 'gerade Papa geworden mit kleiner Tochter, wenig online.';
        $user->save();
    }
}
