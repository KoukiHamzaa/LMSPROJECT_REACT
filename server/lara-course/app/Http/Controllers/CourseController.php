<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Repositories\CourseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;
use App\Models\Category;
use App\Models\Course;

class CourseController extends AppBaseController
{
    /** @var  CourseRepository */
    private $courseRepository;

    public function approve(Request $request)
    {
    Course::where('id', $request->course_id)
        ->update(['admin_status' => 1]);

        Flash::success('cours approuvé avec succès !');
        return redirect()->back();
    }

    public function disapprove(Request $request)
    {
    Course::where('id', $request->course_id)
        ->update(['admin_status' => 0]);
        
        Flash::success('cours disapprove avec succès !');
        return redirect()->back();
    }

    //===================================================

    public function publishCourse(Request $request)
    {
        Course::where('id', $request->course_id)
        ->update(['creator_status' => 1]);
        
        Flash::success('cours publié avec succès !');
        return redirect()->back();
    }

    public function unpublishCourse(Request $request)
    {
        Course::where('id', $request->course_id)
        ->update(['creator_status' => 0]);
        
        Flash::success('cours non publié avec succès !');
        return redirect()->back();
    }

        //===================================================

    public function __construct(CourseRepository $courseRepo)
    {
        $this->courseRepository = $courseRepo;
    }

    /**
     * Display a listing of the Course.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->courseRepository->pushCriteria(new RequestCriteria($request));
        $courses = $this->courseRepository->all();

        return view('courses.index')
            ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new Course.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        $mainCourses = Course::where('user_id',Auth::user()->id)
        ->where( 'admin_status', 1)
        ->where( 'creator_status', 1)
        ->get();

        return view('courses.create')
        ->with('categories', $categories)
        ->with( 'mainCourses', $mainCourses);
    }

    /**
     * Store a newly created Course in storage.
     *
     * @param CreateCourseRequest $request
     *
     * @return Response
     */
    public function store(CreateCourseRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        // $input['category_id'] = Auth::user()->id;
        // dd(Auth::user()->id);

        $course = $this->courseRepository->create($input);

        Flash::success('Course saved successfully.');

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified Course.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $course = $this->courseRepository->findWithoutFail($id);
        // dd($course);

        if (empty($course)) {
            Flash::error('Course not found');
            
            return redirect(route('courses.index'));
        }
        

        return view('courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified Course.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $course = $this->courseRepository->findWithoutFail($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        return view('courses.edit')->with('course', $course);
    }

    /**
     * Update the specified Course in storage.
     *
     * @param  int              $id
     * @param UpdateCourseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourseRequest $request)
    {
        $course = $this->courseRepository->findWithoutFail($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        $course = $this->courseRepository->update($request->all(), $id);

        Flash::success('Course updated successfully.');

        return redirect(route('courses.index'));
    }

    /**
     * Remove the specified Course from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $course = $this->courseRepository->findWithoutFail($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        $this->courseRepository->delete($id);

        Flash::success('Course deleted successfully.');

        return redirect(route('courses.index'));
    }
}
