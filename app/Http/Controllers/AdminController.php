<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class AdminController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
    }

    public function getIndex(){
        return view('back.layout');
    }

    public function getStatic(){
        $block = $this->extract->getBlock('static_all_site');
        return view('back.blocks.static', [
            'static_all_site' => $block
        ]);
    }
    public function getHandMade(){
        $block = $this->extract->getBlock('hand_made');
        return view('back.blocks.hand_made', [
            'hand_made' => $block
        ]);
    }
    public function getAbout(){
        $block = $this->extract->getBlock('about_block');
        return view('back.blocks.about', [
            'about_block' => $block
        ]);
    }
    public function getHowWork(){
        $block = $this->extract->getBlock('how_we_work');
        return view('back.blocks.howwork', [
            'how_we_work' => $block
        ]);
    }
    public function getCooperation(){
        $block = $this->extract->getBlock('cooperation');
        return view('back.blocks.cooperation', [
            'cooperation' => $block
        ]);
    }
    public function getClientsCallback(){
        $block = $this->extract->getBlock('clients');
        return view('back.blocks.clients', [
            'clients' => $block
        ]);
    }
    public function getClient($id){
        $block = $this->extract->getGroupItem('client', $id);
        return view('back.groups.client.client', [
            'item' => $block
        ]);
    }
    public function getClientsLogo(){
        $block = $this->extract->getBlock('clients');
        return view('back.blocks.clients_logo', [
            'clients' => $block
        ]);
    }
    public function getWorks(){
        $block = $this->extract->getBlock('works');
        return view('back.blocks.works', [
            'works' => $block
        ]);
    }
    public function getSeo(){
        $block = $this->extract->getBlock('static_all_site');
        return view('back.blocks.seo', [
            'static_all_site' => $block
        ]);
    }



}
