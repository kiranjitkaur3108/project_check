<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favourite;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    // Store service in user's favourites
    public function store(Request $request, $serviceId)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        Favourite::firstOrCreate([
            'user_id' => Auth::id(),
            'service_id' => $serviceId,
        ]);

        return redirect()->back()->with('success', 'Service added to your favourites!');
    }

    // Show user's favourites
    public function index()
    {
        $favourites = Favourite::with('service')
            ->where('user_id', Auth::id())
            ->get();

        return view('favourites', compact('favourites'));
    }
    public function destroy($id)
{
    $favourite = Favourite::where('user_id', Auth::id())
                          ->where('id', $id)
                          ->firstOrFail();

    $favourite->delete();

    return redirect()->back()->with('success', 'Service removed from your favourites!');
}

}
