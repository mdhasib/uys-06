<?php

namespace App\Http\Controllers;

use App\Group;
use App\Team;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups=Group::pluck('group_name','id');
        $teams=Team::all();
        return view('admin.team.index',compact('teams','groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups=Group::pluck('group_name','id');
        return view('admin.team.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $img=$request->flag_img_path;
        $img_target_name=time().$img->getClientOriginalName();
        $destination=public_path('file_uploads');
        Image::make($img->getRealPath())->save($destination.'/'.$img_target_name);
        $input['flag_img_path']=$img_target_name;
//        dd($input);
        Team::create($input);
        return redirect('team');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Team::find($id);
        return view('admin.team.edit', compact('data'));
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
        $group = Team::find($id);

        $group->group_name = $request->group_name;

        $group->save();

        return redirect('team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::whereid($id)->delete();
        return redirect('team');

    }
}
