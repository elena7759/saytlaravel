<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;

use App\Catalog;

class BaseComposer{

    public function compose(View $view){

        $videos=catalog::where('status','video')->get();

        $view->with('videos',$videos);



    }
}