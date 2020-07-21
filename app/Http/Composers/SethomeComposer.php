<?php
    namespace App\Http\Composers;

    use Illuminate\Contracts\View\View;
    use App\Models\Sethome;

    class SethomeComposer
    {
        public function compose(View $view)
        {
            $sethome = Sethome::first();
            $get_title = 'title_'.\App::getLocale();
            $get_des1 = 'description_banner1_'.\App::getLocale();
            $get_des2 = 'description_banner2_'.\App::getLocale();


            $data = [
                'sethome' => $sethome,
                'get_title' => $get_title,
                'get_des1' => $get_des1,
                'get_des2' => $get_des2,
            ];

            $view->with($data);
        }
    }
