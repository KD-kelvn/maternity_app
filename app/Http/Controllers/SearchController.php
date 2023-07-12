<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $doctors = Doctor::where('name', 'like', '%'.$searchTerm.'%')
            ->orWhere('address', 'like', '%'.$searchTerm.'%')
            ->get();

        return view('Users.appointments.search', ['doctors' => $doctors]);
    }
}
