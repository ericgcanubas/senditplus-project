<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use App\Models\user;
use DB;
class ActivityLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


            //subquery via columns
        $activitylogs = DB::table("users")
          ->select("users.*",
                    DB::raw("(SELECT activity_log.created_at FROM activity_log
                                WHERE activity_log.subject_id = users.id

                                ORDER BY activity_log.id DESC limit 1) as latest_log"),
                    DB::raw("(SELECT activity_log.description FROM activity_log
                            WHERE activity_log.subject_id = users.id

                            ORDER BY activity_log.id DESC limit 1) as description_log"))
                            ->orderBy('latest_log', 'desc')->get();
       return view("activitylogs.index",compact('activitylogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $users = user::find($id);

        $activitylogs=Activity::where('subject_id',$id)->orderBy('id', 'desc')->get();

        return view("activitylogs/details",compact('activitylogs','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
