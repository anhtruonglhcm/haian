<?php
    namespace App\Http\Composers;

    use Illuminate\Contracts\View\View;
    use App\Models\Setting;

    class SettingComposer
    {
        public function compose(View $view)
        {
            $setting = Setting::first();
            $get_name = 'name_'.\App::getLocale();
            $get_des = 'description_'.\App::getLocale();
            $get_title = 'title_'.\App::getLocale();
            $get_address = 'address_'.\App::getLocale();
            $get_des1 = 'description_banner1_'.\App::getLocale();
            $get_des2 = 'description_banner2_'.\App::getLocale();



            $data = [
                'setting' => $setting,
                'get_name' => $get_name,
                'get_des' => $get_des,
                'get_title' => $get_title,
                'get_address' => $get_address,
                'get_des1'=> $get_des1,
                'get_des2' =>$get_des2

            ];

            $view->with($data);
        }
    }
