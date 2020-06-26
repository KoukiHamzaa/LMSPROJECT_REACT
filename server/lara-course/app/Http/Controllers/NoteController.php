<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Repositories\NoteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Auth;

class NoteController extends AppBaseController
{
    /** @var  NoteRepository */
    private $noteRepository;

    public function __construct(NoteRepository $noteRepo)
    {
        $this->noteRepository = $noteRepo;
    }

    /**
     * Display a listing of the Note.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->noteRepository->pushCriteria(new RequestCriteria($request));
        $notes = $this->noteRepository->all();

        return view('notes.index')
            ->with('notes', $notes);
    }

    /**
     * Show the form for creating a new Note.
     *
     * @return Response
     */
    public function create()
    {
        $users = User::all();
        $courses = Course::all();
        // dd($courses);
        $categories = Category::all();
        // dd($users);
        return view('notes.create')
        ->with('users',$users)
        ->with('courses',$courses)
        ->with('categories',$categories);
    }

    /**
     * Store a newly created Note in storage.
     *
     * @param CreateNoteRequest $request
     *
     * @return Response
     */
    public function store(CreateNoteRequest $request)
    {
        $input = $request->all();

        $note = $this->noteRepository->create($input);

        Flash::success('Note saved successfully.');

        return redirect(route('notes.index'));
    }

    /**
     * Display the specified Note.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $note = $this->noteRepository->findWithoutFail($id);

        if (empty($note)) {
            Flash::error('Note not found');

            return redirect(route('notes.index'));
        }

        return view('notes.show')->with('note', $note);
    }

    /**
     * Show the form for editing the specified Note.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $note = $this->noteRepository->findWithoutFail($id);

        if (empty($note)) {
            Flash::error('Note not found');

            return redirect(route('notes.index'));
        }

        return view('notes.edit')->with('note', $note);
    }

    /**
     * Update the specified Note in storage.
     *
     * @param  int              $id
     * @param UpdateNoteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNoteRequest $request)
    {
        $note = $this->noteRepository->findWithoutFail($id);

        if (empty($note)) {
            Flash::error('Note not found');

            return redirect(route('notes.index'));
        }

        $note = $this->noteRepository->update($request->all(), $id);

        Flash::success('Note updated successfully.');

        return redirect(route('notes.index'));
    }

    /**
     * Remove the specified Note from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $note = $this->noteRepository->findWithoutFail($id);

        if (empty($note)) {
            Flash::error('Note not found');

            return redirect(route('notes.index'));
        }

        $this->noteRepository->delete($id);

        Flash::success('Note deleted successfully.');

        return redirect(route('notes.index'));
    }
}
