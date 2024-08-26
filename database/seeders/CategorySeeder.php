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
                'slug' => 'osint'
            
            ]);
            
            Category::create(
                [
                    'name' => 'DDoS',
                    'slug' => 'ddos'
                
                ]);
                
                Category::create(
                    [
                        'name' => 'Deface',
                        'slug' => 'deface'
                    
                    ]);
                    
                    Category::create(
                        [
                            'name' => 'Hacking',
                            'slug' => 'hacking'
                        
                        ]);
                        
                        Category::create(
                            [
                                'name' => 'Ui-UX',
                                'slug' => 'ui-ux'
                            
                            ]);
                
                
                
    }            
}