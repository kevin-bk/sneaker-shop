<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name' => 'theme_active',
                'value' => 'ant_furniture',
            ],
            [
                'name' => 'code_header',
                'value' => '',
            ],
            [
                'name' => 'code_footer',
                'value' => '',
            ],
            [
                'name' => 'copyright',
                'value' => '',
            ],
            [
                'name' => 'company_name',
                'value' => 'No Company',
            ],
            [
                'name' => 'company_address',
                'value' => 'No address',
            ],
            [
                'name' => 'config_email_from',
                'value' => 'admin@gmail.com',
            ],
            [
                'name' => 'config_email_from_name',
                'value' => 'admin',
            ],
            [
                'name' => 'config_email_smtp_host',
                'value' => 'smtp.gmail.com',
            ],
            [
                'name' => 'config_email_smtp_port',
                'value' => 465,
            ],
            [
                'name' => 'config_email_smtp_authentication',
                'value' => true,
            ],
            [
                'name' => 'config_email_username',
                'value' => 'admin@gmail.com',
            ],
            [
                'name' => 'config_email_password',
                'value' => '11111',
            ],
        ];

        foreach ($items as $item) {
            DB::table('configs')->updateOrInsert(['name' => $item['name']], ['value' => $item['value']]);
        }
    }
}
