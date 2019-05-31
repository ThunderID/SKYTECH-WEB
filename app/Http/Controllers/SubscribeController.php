<?php
namespace App\Http\Controllers;

use App\Models\Subscribes as ComingSoon;

use Exceptions, DB;

class SubscribeController extends Controller
{
  public function index () 
  {
    // return view();
  }

  public function store () 
  {
    $email 	= request()->get('email');

    if (trim($email) === '' && $email === null) {
      return redirect()->route('index')->with('alert_danger', 'Silahkan isi email anda');
    }

    $model 	= ComingSoon::where('email', $email)->first();
    
    try {
      DB::beginTransaction();

      if (!$model) {
        $model 		= new ComingSoon;
      }
  
      $model->email 	= $email;
      $model->save();

      DB::commit();
      return redirect()->route('index')->with('alert_success', 'Selamat anda berhasil terdaftar');
    } catch (Exceptions $e) {

      DB::rollback();
      return redirect()->back()->with('alert_danger', $e->getMessage());
    }
  }
}
