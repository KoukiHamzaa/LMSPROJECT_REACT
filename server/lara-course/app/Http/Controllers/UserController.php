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
use Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\User;
use App\Models\Role;

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
        $roles = Role::all();
        return view('users.create')
        ->with('roles', $roles);
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
		
		if(!empty( $input['password'])){
          $input['password'] = Hash::make($input['password']);   
        }else{
            return redirect(route('users.create'))->withErrors('Le champ du mot de passe est vide');
        }
		
        $user = $this->userRepository->create($input);

        Flash::success('L utilisateur a été enregistré avec succès.');

        return redirect(route('users.index'));
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
        $roles = Role::all();
        if (empty($user)) {
            Flash::error('Utilisateur non trouvé');

            return redirect(route('users.index'));
        }

        return view('users.edit')
        ->with('user', $user)
        ->with('roles', $roles);;
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

        return redirect(route('courses.index'));
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
