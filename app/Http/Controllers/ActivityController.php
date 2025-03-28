<?php

namespace App\Http\Controllers;

use App\Models\ActivityModel;
use Illuminate\Http\Request;

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

    public function delete($activity)
    {
        $singleActivity = ActivityModel::where(['id' => $activity])->first();

        $singleActivity->delete();
        return redirect()->route('activity.all');
    }

    public function sendActivity(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'duration' => 'required|integer',
            'date' => 'required',
        ]);

        ActivityModel::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'duration' => $request->get('duration'),
            'date' => $request->get('date'),
        ]);
        return redirect()->route('activity.all');
    }

    public function create()
    {
        return view('activity.create');
    }
}
