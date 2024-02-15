<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::insert(
            [
                [
                    'first_name' => 'Mario',
                    'last_name' => 'Rosebotham',
                    'email' => 'mrosebotham0@studiopress.com',
                    'phone' => 'Male',
                    'company' => 'Meezzy',
                    'address' => 'Suite 99',
                    'created_at' => now(),
                    'updated_at' => now()
                ], 
                [
                    'first_name' => 'Debby',
                    'last_name' => 'Dax',
                    'email' => 'ddax1@cnn.com',
                    'phone' => 'Female',
                    'company' => 'Linkbuzz',
                    'address' => 'PO Box 35774',
                    'created_at' => now(),
                    'updated_at' => now()
                ], 
                [
                    'first_name' => 'Conway',
                    'last_name' => 'Treadaway',
                    'email' => 'ctreadaway2@newyorker.com',
                    'phone' => 'Male',
                    'company' => 'Yotz',
                    'address' => 'Room 92',
                    'created_at' => now(),
                    'updated_at' => now()
                ], 
                [
                    'first_name' => 'Riva',
                    'last_name' => 'Leibold',
                    'email' => 'rleibold3@about.com',
                    'phone' => 'Female',
                    'company' => 'Browsezoom',
                    'address' => 'PO Box 66383',
                    'created_at' => now(),
                    'updated_at' => now()
                ], 
                [
                    'first_name' => 'Valerie',
                    'last_name' => 'Pottie',
                    'email' => 'vpottie4@narod.ru',
                    'phone' => 'Non-binary',
                    'company' => 'Mybuzz',
                    'address' => 'PO Box 56755',
                    'created_at' => now(),
                    'updated_at' => now()
                ], 
                [
                    'first_name' => 'Wade',
                    'last_name' => 'OCrevy',
                    'email' => 'wocrevy5@tiny.cc',
                    'phone' => 'Male',
                    'company' => 'Twinder',
                    'address' => '3rd Floor',
                    'created_at' => now(),
                    'updated_at' => now()
                ], 
                [
                    'first_name' => 'Courtnay',
                    'last_name' => 'Worsnup',
                    'email' => 'cworsnup6@diigo.com',
                    'phone' => 'Female',
                    'company' => 'Shufflebeat',
                    'address' => '5th Floor',
                    'created_at' => now(),
                    'updated_at' => now()
                ], 
                [
                    'first_name' => 'Gallard',
                    'last_name' => 'Jobbins',
                    'email' => 'gjobbins7@moonfruit.com',
                    'phone' => 'Male',
                    'company' => 'Jetwire',
                    'address' => 'PO Box 42058',
                    'created_at' => now(),
                    'updated_at' => now()
                ], 
                [
                    'first_name' => 'Jules',
                    'last_name' => 'Heinel',
                    'email' => 'jheinel8@uiuc.edu',
                    'phone' => 'Male',
                    'company' => 'Feednation',
                    'address' => 'Room 1601',
                    'created_at' => now(),
                    'updated_at' => now()
                ], 
                [
                    'first_name' => 'Keen',
                    'last_name' => 'Pudge',
                    'email' => 'kpudge9@bandcamp.com',
                    'phone' => 'Male',
                    'company' => 'Bubblebox',
                    'address' => 'PO Box 78883',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
