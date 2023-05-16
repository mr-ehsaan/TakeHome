<?php

namespace Database\Seeders;

use App\Models\Source;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Source::create([
            'name' => 'NewsApi.org',
            'base_url' => 'https://newsapi.org/',
            'api_key' => '6e4dac5e48794d4bb22c70147a0c0f4d'
        ]);

        Source::create([
            'name' => 'Newyork Times',
            'base_url' => 'https://api.nytimes.com/',
            'api_key' => 'q97WYM9p25iotxkEvX8GwWNDlYJywa4G'
        ]);

        Source::create([
            'name' => 'The Guardian',
            'base_url' => 'https://content.guardianapis.com/',
            'api_key' => '0c53029b-3974-4b2e-8174-cd99362f6476'
        ]);
    }
}
