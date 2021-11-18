<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WalletController extends Controller
{
	
	    // Dashboard
    public function dashboard_1()
    {
      
     
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $action = __FUNCTION__;
		
        return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText'));
    }
	
	     // Coin Details
    public function coin_details()
    {
        $page_title = 'Coin Details';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('dashboard.coin_details', compact('page_title', 'page_description','action','logo','logoText'));
    }
    
	    // Market Capital
    public function market_capital()
    {
        $page_title = 'Market Capital';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
		$action = __FUNCTION__;

        return view('dashboard.market_capital', compact('page_title', 'page_description','action','logo','logoText'));
    }
}
