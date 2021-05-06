<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Woenel\TxtBox\Facades\TxtBox;

class txt extends Controller
{
    public function index(){

      $result = TxtBox::to('09619059886')->message('mitnamit rojj from jules')->send();

        if($result->success) {
        echo $result->message;
        } else {
        echo $result->message;
        }
            }
}
