<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(['key' => 'logo_header', 'value' =>'', 'type_field'=> 'images' ]);
        Setting::create(['key' => 'logo_footer', 'value' =>'','type_field'=> 'images' ]);
        Setting::create(['key' => 'name_website', 'value' =>'' ,'type_field'=> 'string' ]);
        Setting::create(['key' => 'header_card_top', 'value' =>'' ,'type_field'=> 'string' ]);
        Setting::create(['key' => 'content_card_top', 'value' =>'' ,'type_field'=> 'string' ]);
        Setting::create(['key' => 'video_card_top', 'value' =>'' ,'type_field'=> 'video' ]);
        Setting::create(['key' => 'header_card_buttom', 'value' =>'' ,'type_field'=> 'video' ]);
        Setting::create(['key' => 'content_card_buttom', 'value' =>'' ,'type_field'=> 'video' ]);
        Setting::create(['key' => 'longer_image', 'value' =>'' ,'type_field'=> 'images' ]);
        Setting::create(['key' => 'short_image_top', 'value' =>'' ,'type_field'=> 'images' ]);
        Setting::create(['key' => 'short_image_buttom', 'value' =>'' ,'type_field'=> 'images' ]);
        Setting::create(['key' => 'privacy_policy', 'value' =>'' ,'type_field'=> 'string' ]);
        Setting::create(['key' => 'TermsConditions', 'value' =>'' ,'type_field'=> 'string' ]);

    }
}
