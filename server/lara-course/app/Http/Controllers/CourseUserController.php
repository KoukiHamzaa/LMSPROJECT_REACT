<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseUserRequest;
use App\Http\Requests\UpdateCourseUserRequest;
use App\Repositories\CourseUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Auth;


class CourseUserController extends AppBaseController
{
    /** @var  CourseUserRepository */
    private $courseUserRepository;

    public function __construct(CourseUserRepository $courseUserRepo)
    {
        $this->courseUserRepository = $courseUserRepo;
    }

    /**
     * Display a listing of the CourseUser.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->courseUserRepository->pushCriteria(new RequestCriteria($request));
        $courseUsers = $this->courseUserRepository->all();

        $categories = Category::all();
        $courses = Course::all();    
        $users = User::all();

       // dd($course);
        return view('course_users.index')
        ->with('courseUsers', $courseUsers)
        ->with('courses', $courses)
        ->with('categories', $categories)
        ->with('users', $users);
    }

    /**
     * Show the form for creating a new CourseUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('course_users.create');
    }

    /**
     * Store a newly created CourseUser in storage.
     *
     * @param CreateCourseUserRequest $request
     *
     * @return Response
     */
    public function store(CreateCourseUserRequest $request)
    {
        $input = $request->all();

        $courseUser = $this->courseUserRepository->create($input);

        Flash::success('Course User saved successfully.');

        return redirect(route('courseUsers.index'));
    }

    /**
     * Display the specified CourseUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courseUser = $this->courseUserRepository->findWithoutFail($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        return view('course_users.show')->with('courseUser', $courseUser);
    }

    /**
     * Show the form for editing the specified CourseUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courseUser = $this->courseUserRepository->findWithoutFail($id);

        $categories = Category::all();
        $courses = Course::all();    
        $users = User::all();
        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        return view('course_users.edit')
        ->with('courseUser', $courseUser)
        ->with('courses', $courses)
        ->with('categories', $categories)
        ->with('users', $users);
    }

    /**
     * Update the specified CourseUser in storage.
     *
     * @param  int              $id
     * @param UpdateCourseUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourseUserRequest $request)
    {
        $courseUser = $this->courseUserRepository->findWithoutFail($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        $courseUser = $this->courseUserRepository->update($request->all(), $id);

        Flash::success('Course User updated successfully.');

        return redirect(route('courseUsers.index'));
    }

    /**
     * Remove the specified CourseUser from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courseUser = $this->courseUserRepository->findWithoutFail($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        $this->courseUserRepository->delete($id);

        Flash::success('Course User deleted successfully.');

        return redirect(route('courseUsers.index'));
    }
}
