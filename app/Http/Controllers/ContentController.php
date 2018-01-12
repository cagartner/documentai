<?php

namespace App\Http\Controllers;

use App\Content;
use App\Project;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * @param Project $project
     * @return $this
     */
    public function create(Project $project)
    {
        return view('content.create')->with(compact('project'));
    }
}
