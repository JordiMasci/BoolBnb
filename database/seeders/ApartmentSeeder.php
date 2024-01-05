<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Apartment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_apartments = [
            [
                'user_id' => 1,
                'title' => 'Appartamento 1',
                'rooms' => 3,
                'beds' => 2,
                'bathrooms' => 2,
                'square_meters' => 120,
                'address' => 'Via Example 123',
                'longitude' => 12.345678,
                'latitude' => 45.678910,
                'price' => 1500.00,
                'visible' => true,

            ],
            [
                'user_id' => 2,
                'title' => 'Appartamento 2',
                'rooms' => 2,
                'beds' => 1,
                'bathrooms' => 1,
                'square_meters' => 80,
                'address' => 'Via Sample 456',
                'longitude' => 11.123456,
                'latitude' => 46.789012,
                'price' => 1000.00,
                'visible' => true,
            ]
        ];
        foreach ($_apartments as $_apartment) {
            $apartment = new Apartment();
            $apartment->title = $_apartment['title'];
            $apartment->rooms = $_apartment['rooms'];
            $apartment->beds = $_apartment['beds'];
            $apartment->bathrooms = $_apartment['bathrooms'];
            $apartment->square_meters = $_apartment['square_meters'];
            $apartment->address = $_apartment['address'];
            $apartment->longitude = $_apartment['longitude'];
            $apartment->latitude = $_apartment['latitude'];
            $apartment->price = $_apartment['price'];
            $apartment->visible = $_apartment['visible'];
            $user = User::find($_apartment['user_id']);
            $user->apartments()->save($apartment);
        }
    }
}
