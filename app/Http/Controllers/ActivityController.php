<?php

namespace App\Http\Controllers;

use App\Models\ActivityModel;

class ActivityController extends Controller
{
    public function allActivities()
    {
        $allActivities = ActivityModel::all();
        return view('activity.allActivities', compact('allActivities'));
    }

    public function permalink(ActivityModel $activity)
    {
        return view('activity.permalink', compact('activity'));
    }


}
