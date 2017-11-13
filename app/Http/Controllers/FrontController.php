<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;


class FrontController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $this->extract->tuneSelection('works_list')->sortBy('sorter', 'ASC');
        view()->share([]);
    }


    public function getIndex(){
        $static = $this->extract->getBlock('static_all_site');
        $hand   = $this->extract->getBlock('hand_made');
        $about   = $this->extract->getBlock('about_block');
        $how_work   = $this->extract->getBlock('how_we_work');
        $cooperation   = $this->extract->getBlock('cooperation');
        $clients   = $this->extract->getBlock('clients');

        $works2 = $this->extract->tuneSelection('works_list')->skip(0)->take(5);// Получить первые 5

        $works   = $this->extract->getBlock('works');
        return view('front.index.index', [
            'static' => $static,
            'hand' => $hand,
            'about' => $about,
            'how_work' => $how_work,
            'cooperation' => $cooperation,
            'clients' => $clients,
            'works' => $works,
        ]);
    }
    public function getNewWorks(Request $request){
        $data = $request->all();
        $works = $this->extract->tuneSelection('works_list')->skip(intval($data['last_id']))->take(5);
        $items   = $this->extract->getBlock('works');
        $last = 0;
        foreach ($items->works_list_group as $item){
            $last = $item->sorter_field;
        }
        $view  = view('front.index.works',['works' => $items->works_list_group])->render();
        if($items->works_list_group->count() < 4){
            return ['error' => true];
        }else{
            return ['error' => false, 'html' => $view, 'last' => $last];
        }
    }
}