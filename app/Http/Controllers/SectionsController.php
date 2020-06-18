<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Course;

class SectionsController extends Controller
{
    public function create(Request $request, $id)
    {
        // validate the input of the instructor
        $this->validate($request, [
            'sectionName' => ['required', 'max:255'],
        ]);

        // Create Section
        $section = new Section;
        $section->name = $request->input('sectionName');

        // find sections of the course and give the newly created section the position
        $course = Course::find($id);
        $section->position = 1 + count($course->sections);
        $section->course_id = $id;

        $section->save();

        return redirect('/instructor/edit/' . $id);
    }
}
