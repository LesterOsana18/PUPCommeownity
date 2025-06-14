<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adoption;

class AdoptionSeeder extends Seeder
{
    public function run(): void
    {
        // Insert fixed sample data
        $sampleCats = [
            // Available sample cats
            [
                'name' => 'Brew',
                'breed' => 'Tuxedo',
                'sex' => 'male',
                'age' => 2,
                'color' => 'Black',
                'weight' => 4.2,
                'sterilized' => true,
                'location' => 'B1T1 Coffee',
                'photo_path' => 'cats/adoption-cat-1.png',
                'adopted' => false,
            ],
            [
                'name' => 'Kohl',
                'breed' => 'Tabby',
                'sex' => 'male',
                'age' => 3,
                'color' => 'Brown',
                'weight' => 3.8,
                'sterilized' => true,
                'location' => 'PUP Main Gate Entrance',
                'photo_path' => 'cats/adoption-cat-2.png',
                'adopted' => false,
            ],
            [
                'name' => 'Peanut',
                'breed' => 'Shorthair',
                'sex' => 'male',
                'age' => 1,
                'color' => 'White',
                'weight' => 4.0,
                'sterilized' => false,
                'location' => 'Linear Park',
                'photo_path' => 'cats/adoption-cat-3.png',
                'adopted' => false,
            ],
            [
                'name' => 'Loki',
                'breed' => 'British Shorthair',
                'sex' => 'male',
                'age' => 2,
                'color' => 'White',
                'weight' => 5.4,
                'sterilized' => true,
                'location' => 'Linear Park',
                'photo_path' => 'cats/adoption-cat-4.png',
                'adopted' => false,
            ],
            [
                'name' => 'Nuggets',
                'breed' => 'Tabby',
                'sex' => 'female',
                'age' => 3,
                'color' => 'Orange',
                'weight' => 5.1,
                'sterilized' => true,
                'location' => 'Linear Park',
                'photo_path' => 'cats/adoption-cat-5.png',
                'adopted' => false,
            ],
            [
                'name' => 'Putol',
                'breed' => 'Tabby',
                'sex' => 'male',
                'age' => 3,
                'color' => 'White',
                'weight' => 3.2,
                'sterilized' => true,
                'location' => 'West Wing 4th Floor',
                'photo_path' => 'cats/adoption-cat-6.png',
                'adopted' => false,
                'additional_remarks' => 'Ate Jo (staff) is taking care of him.'
            ],
            [
                'name' => 'Donya',
                'breed' => 'Tabby',
                'sex' => 'female',
                'age' => 2,
                'color' => 'White',
                'weight' => 3.6,
                'sterilized' => true,
                'location' => 'West Wing 4th Floor',
                'photo_path' => 'cats/adoption-cat-7.png',
                'adopted' => false,
            ],
            // Previously available sample cats
            [
                'name' => 'Chichay',
                'breed' => 'Tabby',
                'sex' => 'female',
                'age' => 4,
                'color' => 'Orange',
                'weight' => 5.1,
                'sterilized' => true,
                'location' => 'West Wing 4th Floor',
                'photo_path' => 'cats/adoption-cat-8.png',
                'adopted' => true,
                'additional_remarks' => 'Pregnant.'
            ],
            [
                'name' => 'Xido',
                'breed' => 'Tuxedo',
                'sex' => 'male',
                'age' => 3,
                'color' => 'Black',
                'weight' => 2.2,
                'sterilized' => true,
                'location' => 'Tahanan ng Alumni',
                'photo_path' => 'cats/adoption-cat-9.png',
                'adopted' => true
            ],
            [
                'name' => 'Jim',
                'breed' => 'Tabby',
                'sex' => 'male',
                'age' => 2,
                'color' => 'White',
                'weight' => 2.5,
                'sterilized' => false,
                'location' => 'Parking Lot',
                'photo_path' => 'cats/adoption-cat-10.png',
                'adopted' => true
            ],
            [
                'name' => 'Munti',
                'breed' => 'Tabby',
                'sex' => 'female',
                'age' => 3,
                'color' => 'White',
                'weight' => 4.1,
                'sterilized' => false,
                'location' => 'PUP Catwalk',
                'photo_path' => 'cats/adoption-cat-11.png',
                'adopted' => true,
                'additional_remarks' => 'Pregnant.'
            ],
            [
                'name' => 'Tim',
                'breed' => 'Tuxedo',
                'sex' => 'male',
                'age' => 2,
                'color' => 'Black',
                'weight' => 2.2,
                'sterilized' => true,
                'location' => 'Barracks',
                'photo_path' => 'cats/adoption-cat-12.png',
                'adopted' => true
            ],
            [
                'name' => 'Pearly',
                'breed' => 'Tabby',
                'sex' => 'female',
                'age' => 3,
                'color' => 'White',
                'weight' => 1.8,
                'sterilized' => true,
                'location' => 'PUP Gym',
                'photo_path' => 'cats/adoption-cat-13.png',
                'adopted' => true
            ],
            [
                'name' => 'Chui',
                'breed' => 'Calico',
                'sex' => 'female',
                'age' => 2,
                'color' => 'White',
                'weight' => 2.4,
                'sterilized' => false,
                'location' => 'Linear Park',
                'photo_path' => 'cats/adoption-cat-14.png',
                'adopted' => true
            ],
        ];

        foreach ($sampleCats as $cat) {
            Adoption::create($cat);
        }
    }
}