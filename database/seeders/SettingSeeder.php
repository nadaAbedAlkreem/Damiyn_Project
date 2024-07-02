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
        Settings::create(['key' => 'logo_header', 'value' =>'', 'type_field'=> 'images' ]);
        Settings::create(['key' => 'logo_footer', 'value' =>'','type_field'=> 'images' ]);
        Settings::create(['key' => 'name_website', 'value' =>'' ,'type_field'=> 'string' ]);
        Settings::create(['key' => 'header_card_top', 'value' =>'' ,'type_field'=> 'string' ]);
        Settings::create(['key' => 'content_card_top', 'value' =>'' ,'type_field'=> 'string' ]);
        Settings::create(['key' => 'video_card_top', 'value' =>'' ,'type_field'=> 'video' ]);
        Settings::create(['key' => 'header_card_buttom', 'value' =>'' ,'type_field'=> 'video' ]);
        Settings::create(['key' => 'content_card_buttom', 'value' =>'' ,'type_field'=> 'video' ]);
        Settings::create(['key' => 'longer_image', 'value' =>'' ,'type_field'=> 'images' ]);
        Settings::create(['key' => 'short_image_top', 'value' =>'' ,'type_field'=> 'images' ]);
        Settings::create(['key' => 'short_image_buttom', 'value' =>'' ,'type_field'=> 'images' ]);
        Settings::create(['key' => 'privacy_policy', 'value' =>'' ,'type_field'=> 'string' ]);
        Settings::create(['key' => 'Terms_Conditions', 'value' =>'' ,'type_field'=> 'string' ]);

    }
}
