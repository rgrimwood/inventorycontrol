<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    // Methods for returning pages 

        // account page
        public function accountPage(/*variable from url*/) {        
            return view('pages.account');
        }

        // edit part page


        // edit user page


        // employees page


        // finished page


        // home page
        public function homePage() {        
            return view('pages.home');
        }

        // in process page


        // inventory page
        public function inventoryPage() {
            return view('pages.inventory');
        }

        // landing page
        public function landingPage() {        
            return view('pages.landing');
        }

        // part page
        public function partPage() {
            return view('pages.part');
        }


        // raw material page


        // states page
        public function statesPage() {
            return view('pages.states');
        }

}
