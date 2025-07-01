<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Services\NotificationService;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    // public function __invoke(Request $request)
    // {
    //     $request->validate([
    //         'email' => ['required', 'email', 'max:255'],
    //     ]);

    //     if (!$request->email) {
    //         NotificationService::ERROR('Email already subscribed');
    //         return back();
    //         // return response()->json(['status' => 'error', 'message' => __('Email already subscribed')]);
    //     }

    //     $subscribe = new Subscription();
    //     $subscribe->email = $request->email;
    //     $subscribe->save();

    //     NotificationService::CREATED('You have successfully subscribed to our newsletter');
    //     return back();

    //     // return response()->json(['status' => 'success', 'message' => __('You have successfully subscribed to our newsletter')]);
    //     // return back();
    // }

    public function __invoke(Request $request)
{
    $request->validate([
        'email' => ['required', 'email', 'max:255'],
    ]);

    // التحقق من وجود الإيميل في جدول subscriptions
    if (Subscription::where('email', $request->email)->exists()) {
        NotificationService::ERROR('Email already subscribed');
        return back();
    }

    $subscribe = new Subscription();
    $subscribe->email = $request->email;
    $subscribe->save();

    NotificationService::CREATED('You have successfully subscribed to our newsletter');
    return back();
}

}
