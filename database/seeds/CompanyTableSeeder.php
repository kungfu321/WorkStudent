<?php

use App\Models\Employer\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'user_id' => 1,
            'name' => 'Kungfu team',
            'location' => 'Ha Noi Viet Nam',
            'company_size' => '50-100',
            'description' => 'game, outsource',
            'avatar' => 'null'
        ]);
    }
}
