<?php

namespace App\Http\Controllers;

use App\Photographer;
use App\Customer;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PhotographerController extends Controller
{

  public function index() {
    $lastId = 1;
    $photographer = Photographer::all();
    $list_photographer = array();
    $count = $photographer->count();
    foreach ($photographer as $key => $eachPhotographer) {
      $lastId = $eachPhotographer->id;
      $eachPhotographer->gallery = explode(",", $eachPhotographer->gallery);
    }
    return view('photographer.index', ['list_photographer' => $photographer, 'count' => $count, 'row' => $count/2, 'show' => 'photographer', 'lastId' => $lastId]);
  }

  public function book(Request $request) {
    $list_photographer = Photographer::all();
    foreach ($list_photographer as $key => $photographer) {
      if (!empty($request->{'order_fullName_'.$photographer->id})) {
        $this->validate($request,[
          'order_fullName_'.$photographer->id => 'required',
          'order_major_'.$photographer->id => 'required',
          'order_phoneNumber_'.$photographer->id => 'required',
          'order_lineID_'.$photographer->id => 'required',
          'order_address_'.$photographer->id => 'required'
        ]);

        $order_fullName = $request->{'order_fullName_'.$photographer->id};
        $order_major = $request->{'order_major_'.$photographer->id};
        $order_phoneNumber = $request->{'order_phoneNumber_'.$photographer->id};
        $order_lineID = $request->{'order_lineID_'.$photographer->id};
        $order_address = $request->{'order_address_'.$photographer->id};
        $order_schedule = $request->{'order_schedule_'.$photographer->id};
        $order_photographer_id = $request->{'photographer_id_'.$photographer->id};
      }
    }


    $photographer = Photographer::find($order_photographer_id);
    $customer = Customer::create([
      'name' => $order_fullName,
      'major' =>  $order_major,
      'phone' => $order_phoneNumber,
      'line' => $order_lineID,
      'address' => $order_address,
    ]);

    $order = Order::create([
      'customer_id' => $customer->id,
      'photographer_id' => $order_photographer_id,
      'session' => $order_schedule,
      'status' => 0
    ]);

    $session = substr($order_schedule, -1);
    if ($session == 1) {
      $photographer->schedule_1 = 2;
    } elseif ($session == 2) {
      $photographer->schedule_2 = 2;
    } elseif ($session == 3) {
      $photographer->schedule_3 = 2;
    }

    $photographer->save();

    return redirect()->back();
  }
}
