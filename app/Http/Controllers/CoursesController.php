<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $courses = Course::latest()->paginate(20);
        $courses = Course::orderBy('title', 'asc')->paginate(20);
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:png,jpg',
        ]);

        // upload file
        $imgname = time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/images'), $imgname);

        // store data into database
        Course::create([
            'title' => $request->title,
            'price' => $request->price,
            'image' => $imgname,
        ]);

        return redirect()
        ->route('courses.index')
        ->with('msg', 'تم اضافة العنصر بنجاح')
        ->with('type', 'success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Showwwww';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('courses.edit', compact('course'));
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
        // validate the data
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'nullable|image|mimes:png,jpg',
        ]);

        $course = Course::findOrFail($id);
        $imgname = $course->image;

        if($request->hasFile('image')) {
            // upload file
            $imgname = time().rand().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/images'), $imgname);
        }

        // store data into database
        $course->update([
            'title' => $request->title,
            'price' => $request->price,
            'image' => $imgname,
        ]);

        return redirect()
        ->route('courses.index')
        ->with('msg', 'تم تعريل العنصر بنجاح')
        ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::destroy($id);

        return redirect()
        ->route('courses.index')
        ->with('msg', 'تم حذف العنصر')
        ->with('type', 'danger');
    }
}
