<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtp_tdRequest;
use App\Http\Requests\Updatetp_tdRequest;
use App\Repositories\tp_tdRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Course;
use App\Models\User;
use App\Models\CourseUser;
use Auth;

class tp_tdController extends AppBaseController
{
    /** @var  tp_tdRepository */
    private $tpTdRepository;

    public function __construct(tp_tdRepository $tpTdRepo)
    {
        $this->tpTdRepository = $tpTdRepo;
    }

    /**
     * Display a listing of the tp_td.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tpTdRepository->pushCriteria(new RequestCriteria($request));
        $tpTds = $this->tpTdRepository->all();

        $users = User::all();
        $courses = Course::all();
        $courseusers = CourseUser::all();
       // dd($courseusers);

        return view('tp_tds.index')
            ->with('tpTds', $tpTds)
            ->with('users',$users)
            ->with('courses',$courses)
            ->with('courseusers', $courseusers);
    }

    /**
     * Show the form for creating a new tp_td.
     *
     * @return Response
     */
    public function create()
    {
        $users = User::all();
        $courses = Course::all();
// dd($courses);

        return view('tp_tds.create')
        ->with('users',$users)
        ->with('courses',$courses);
    }

    /**
     * Store a newly created tp_td in storage.
     *
     * @param Createtp_tdRequest $request
     *
     * @return Response
     */
    public function store(Createtp_tdRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $tpTd = $this->tpTdRepository->create($input);


        Flash::success('Tp Td saved successfully.');

        return redirect(route('tpTds.index'));
    }

    /**
     * Display the specified tp_td.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tpTd = $this->tpTdRepository->findWithoutFail($id);

        if (empty($tpTd)) {
            Flash::error('Tp Td not found');

            return redirect(route('tpTds.index'));
        }

        return view('tp_tds.show')->with('tpTd', $tpTd);
    }

    /**
     * Show the form for editing the specified tp_td.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tpTd = $this->tpTdRepository->findWithoutFail($id);

        $courses = Course::all();
        // dd($courses);
        if (empty($tpTd)) {
            Flash::error('Tp Td not found');

            return redirect(route('tpTds.index'));
           
        }

        return view('tp_tds.edit')
        ->with('tpTd', $tpTd)
        ->with('courses',$courses);
    }

    /**
     * Update the specified tp_td in storage.
     *
     * @param  int              $id
     * @param Updatetp_tdRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetp_tdRequest $request)
    {
        $tpTd = $this->tpTdRepository->findWithoutFail($id);

        if (empty($tpTd)) {
            Flash::error('Tp Td not found');

            return redirect(route('tpTds.index'));
        }

        $tpTd = $this->tpTdRepository->update($request->all(), $id);

        Flash::success('Tp Td updated successfully.');

        return redirect(route('tpTds.index'));
    }

    /**
     * Remove the specified tp_td from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tpTd = $this->tpTdRepository->findWithoutFail($id);

        if (empty($tpTd)) {
            Flash::error('Tp Td not found');

            return redirect(route('tpTds.index'));
        }

        $this->tpTdRepository->delete($id);

        Flash::success('Tp Td deleted successfully.');

        return redirect(route('tpTds.index'));
    }
}
