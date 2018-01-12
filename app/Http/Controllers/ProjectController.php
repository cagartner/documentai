<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /**
     * @param Project $project
     * @return $this
     */
    public function index(Project $project)
    {
        $contents = $project->contents;
        return view('project.index')->with(compact('project', 'contents'));
    }
}
