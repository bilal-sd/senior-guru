<?php

use Illuminate\Database\Seeder;
use App\Listing;
class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Listing::create([
            'title' => 'Scrum Digital',
            'type' => 'Senior Housing',
            'category' => 'Affordable-Subsidized',
            'address' => 'HIGHLANDS',
            'city' => 'Denver',
            'package' => 'Silver Ad Package',
            'description' => 'Quintessence',
            'slug' => 'scrum-digital',
            
        ]);
        //
    }
}
