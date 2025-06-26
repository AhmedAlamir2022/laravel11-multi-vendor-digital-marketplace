<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ItemReview;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(): View
    {
        return view('frontend.dashboard.index');
    }

    function reviews(): View
    {
        $reviews = ItemReview::where('user_id', user()->id)->latest()->paginate(10);
        return view('frontend.dashboard.review.index', compact('reviews'));
    }
}
