<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class PostSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {

            $players = self::listPlayers();

            foreach ($players as $player) {

                $date = date('Y-m-d H:i:s');

                DB::table('posts')->insert([
                    'name' => $player['name'],
                    'jersey_number' => $player['jersey_number'],
                    'created_at' => $date,
                    'updated_at' => $date,
                ]);
            }
        }

        public function listPlayers()
        {
            return [
                [
                    'name' => 'David de Gea',
                    'jersey_number' => 1,
                ],
                [
                    'name' => 'Lee Grant',
                    'jersey_number' => 13,
                ],
                [
                    'name' => 'Victor Lindelof',
                    'jersey_number' => 2,
                ],
                [
                    'name' => 'Phil Jones',
                    'jersey_number' => 4,
                ],
                [
                    'name' => 'Paul Pogba',
                    'jersey_number' => 6,
                ],
                [
                    'name' => 'Edinson Cavani',
                    'jersey_number' => 7,
                ],
                [
                    'name' => 'Anthony Elanga',
                    'jersey_number' => 56,
                ],
            ];
        }
    }
