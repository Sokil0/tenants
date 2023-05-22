<?php

namespace Database\Seeders;

use App\Enum\Languages;
use App\Models\Setting;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::factory()
            ->count(20)
            ->sequence(
                ['lang' => Languages::ENGLISH->value],
                ['lang' => Languages::UKRAINE->value]
            )
            ->has(Setting::factory()->count(3))
            ->create();
    }
}
