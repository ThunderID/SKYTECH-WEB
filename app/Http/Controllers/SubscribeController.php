<?php
namespace App\Http\Controllers;

use App\Models\Subscribes as ComingSoon;

class SubscribeController extends Controller
{
  public function index () 
  {
    // return view();
  }

  public function store () 
  {
    $email 	= request()->get('email');
    $model 	= ComingSoon::where('email', $email)->first();
    
		if (!$model) {
			$model 		= new ComingSoon;
    }
    
		$model->email 	= $email;
		$model->save();

		return redirect()->route('index');
  }
}
