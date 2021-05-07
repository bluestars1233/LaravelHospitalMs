<?php

namespace Database\Seeders;

use App\Models\patient;
use Illuminate\Database\Seeder;

class patientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <20 ; $i++) {
            patient::create([
                'name'          => 'tauseed'.$i.' zamana',
                'email'         => 'example'.$i.'@test.me',
                'phone'         => "+92123456789",
                'gender'        => "Female",
                'address'       => 'sorana'.$i.'',
                'age'       => rand(1,130),
                'bloodgroup' => 'A-',
                'photo_path'    => 'null',
            ]);
        }
    }
}
