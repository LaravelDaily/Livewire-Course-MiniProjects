<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function dropdowns()
    {
        return view('projects.dropdown');
    }

    public function postDropdowns(Request $request)
    {
        return $request->all();
    }

    public function parentchildren()
    {
        return view('projects.parentchildren');
    }

    public function postParentchildren(Request $request)
    {
        return $request->all();
    }

    public function editmodal()
    {
        return view('projects.editmodal');
    }

    public function autorefresh()
    {
        return view('projects.autorefresh');
    }

    public function slug()
    {
        return view('projects.slug');
    }
}
