<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchases;
use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.show');
    }

    public function store()
    {
        // Notification with database and email
        // request()->user()->notify(new PaymentReceived(900));
        // return redirect('/notification');

        // Events
        ProductPurchases::dispatch('toy');
        //or 
        // event(new ProductPurchases('toy'));
    }
}
