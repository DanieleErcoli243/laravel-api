<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [ 'label' => 'html' ],
            [ 'label' => 'css'],        
            [ 'label' => 'bootstrap'],        
            [ 'label' => 'javascript' ],        
            [ 'label' => 'vue-js' ],        
            [ 'label' => 'sass' ],        
            [ 'label' => 'php' ],        
            [ 'label' => 'sql'],  
            [ 'label' => 'laravel']  
        ];        
        

        foreach ($technologies as $technology) {
            $new_technology = new Technology();
            $new_technology->label = $technology['label'];
            $new_technology->save();
        }
    }
}
