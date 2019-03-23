<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //this function saves project name into database

    public function createProject(Request $request)
    {

        $this->validate($request, [
            'project_title' => 'required',
        ]);

//        $project = \App\project::findorfail(Input::get('id'));
        \App\project::Create($request->all());
        session()->flash('message','project created Successfully');
        session()->flash('alert','info');
        return redirect()->back();


    }

}
