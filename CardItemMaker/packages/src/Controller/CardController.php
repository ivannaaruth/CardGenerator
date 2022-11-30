<?php

namespace CardMaker\Controller;

use Illuminate\Routing\Controller as BaseController;


class CardController extends BaseController
{
    
    public function index() {
        //to views
    	return view('CardMaker::card');
    }
}
