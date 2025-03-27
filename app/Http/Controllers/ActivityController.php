<?php

namespace App\Http\Controllers;

use App\Models\ActivityModel;

class ActivityController extends Controller
{
    public function allActivities()
    {
        $allActivities = ActivityModel::all();
        return view('allActivities', compact('allActivities'));
    }

}
