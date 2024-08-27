<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create(
            [
                'name' => 'Osint',
                'slug' => 'osint',
                'color' => 'green'
            
            ]);
            
            Category::create(
                [
                    'name' => 'DDoS',
                    'slug' => 'ddos',
                    'color' => 'blue'
                
                ]);
                
            Category::create(
                    [
                        'name' => 'Deface',
                        'slug' => 'deface',
                        'color' => 'red'
                    
                    ]);
                    
            Category::create(
                        [
                            'name' => 'Hacking',
                            'slug' => 'hacking',
                            'color' => 'yellow'
                        
                        ]);
                        
                        Category::create(
                            [
                                'name' => 'Ui-UX',
                                'slug' => 'ui-ux',
                                'color' => 'violet'
                            
                            ]);
                
                
                
    }            
}