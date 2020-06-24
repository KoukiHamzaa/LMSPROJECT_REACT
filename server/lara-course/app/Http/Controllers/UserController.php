<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
<<<<<<< HEAD
use Hash;
=======
use App\Models\User;
>>>>>>> a0f2ba8f82ef5dc14cc14ccab879dd039b8f0c95

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRepository->pushCriteria(new RequestCriteria($request));
        $users = $this->userRepository->all();

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        $user = $this->userRepository->create($input);

        Flash::success('L utilisateur a été enregistré avec succès.');

        return redirect(route('users.index'))->with('users', $users);
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('Utilisateur non trouvé');

            return redirect(route('users.index'));
        }

        //we send all the courses to user 
        $courses = Course::where('user_id', $id)->get();
        DB::table('users')->where('id', $id)->increment('view_count');
        return view('users.show')
        ->with('courses', $courses)
        ->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('Utilisateur non trouvé');

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('Utilisateur non trouvé');

            return redirect(route('users.index'));
        }
		
        $input = $request->all();

        if(!empty( $input['password'])){
          $input['password'] = Hash::make($input['password']);   
        }
       
        $user = $this->userRepository->update($input, $id);
        Flash::success('L utilisateur a été mis à jour avec succès.');

        return redirect(route('users.index'));
    }
    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('Utilisateur non trouvé');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('L utilisateur a bien été supprimé.');

        return redirect(route('users.index'));
    }
}
