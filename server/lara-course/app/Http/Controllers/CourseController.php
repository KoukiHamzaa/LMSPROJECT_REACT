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
use App\Models\Item;
use App\Models\CourseUser;

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
        $courseUsers = CourseUser::all();

        return view('courses.index')
            ->with('courses', $courses)
            ->with('courseUsers', $courseUsers);
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

        Flash::success('Cours enregistré avec succès.');

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

        // $userCourse = CourseUser::where('course_id', $id)->first();
        $userCourse = CourseUser::where(['course_id' => $id,'user_id' => Auth::user()->id])->first();
        $paymentCondition = 'NotPaid';
        // dd($userCourse);

        if (empty($course)) {
            Flash::error('Cours non trouvé');
            
            return redirect(route('courses.index'));
        }
//if(($course->id == $courseUser->course_id) && (Auth::user()->id ==$courseUser->user_id ))
        if (!empty($userCourse)) {
            if(Auth::user()->id ==$userCourse->user_id){

                $paymentCondition = 'Paid';
            }
        }
        
        //dd($paymentCondition);

        return view('courses.show')
        ->with('course', $course)
        ->with('paymentCondition', $paymentCondition);
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
		
        $categories = Category::all();
        $mainCourses = Course::where('user_id',Auth::user()->id)
        ->where( 'admin_status', 1)
        ->where( 'creator_status', 1)
        ->get();
		
		
        if (empty($course)) {
            Flash::error('Cours non trouvé');

            return redirect(route('courses.index'));
        }

        return view('courses.edit')->with('course', $course)
		        ->with('categories', $categories)
        ->with( 'mainCourses', $mainCourses);
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
            Flash::error('Cours non trouvé');

            return redirect(route('courses.index'));
        }

       $course = $this->courseRepository->update($request->all(), $id);

        Flash::success('Cours mis à jour avec succès.');

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
            Flash::error('Cours non trouvé');

            return redirect(route('courses.index'));
        }

        $this->courseRepository->delete($id);

        Flash::success('Le cours a bien été supprimé.');

        return redirect(route('courses.index'));
    }

    public function contents($course_id)
    {
        //list courses 
        $course = $this->courseRepository->findWithoutFail($course_id);
        $userCourse = CourseUser::where(['course_id' => $course_id,'user_id' => Auth::user()->id])->first();
        //passet to the course 

        if (!empty($userCourse)) {
                $paymentCondition = 'Paid';
        }

        

        $contents = 'yes';
        return  view('courses.show', ['course_id' => $course->id])
                ->with('course', $course)
                ->with('contents', $contents)
                ->with('paymentCondition', $paymentCondition);
    }

    public function abonnes($course_id)
    {
        //list courses 
        $userCourse = CourseUser::where(['course_id' => $course_id,'user_id' => Auth::user()->id])->first();
        $course = $this->courseRepository->findWithoutFail($course_id);
        //passet to the course 

        if (!empty($userCourse)) {
                $paymentCondition = 'Paid';
        } 

        if (empty($course)) {
            Flash::error('Cours non trouvé');
            
            return redirect()->back();
        }

        //passet to the course 
        $abonnes = 'yes';
        
        return  view('courses.show', ['course_id' => $course->id])
                ->with('course', $course)
                ->with('abonnes', $abonnes)
                ->with('paymentCondition', $paymentCondition);
    }

    public function items($course_id)
    {
        //list courses 
        $course = $this->courseRepository->findWithoutFail($course_id);
        if (empty($course)) {
            Flash::error('Cours non trouvé');
            
            return redirect()->back();
        }

        //passet to the course 
        $abonnes = 'yes';
        
        return  view('courses.show', ['course_id' => $course->id])
                ->with('course', $course)
                ->with('abonnes', $abonnes);
    }
    

}