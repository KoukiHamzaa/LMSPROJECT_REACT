<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Repositories\ItemRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;
use App\Models\Course;

class ItemController extends AppBaseController
{
    /** @var  ItemRepository */
    private $itemRepository;

    public function __construct(ItemRepository $itemRepo)
    {
        $this->itemRepository = $itemRepo;
    }

    /**
     * Display a listing of the Item.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->itemRepository->pushCriteria(new RequestCriteria($request));
        $items = $this->itemRepository->all();
        $course = Course::all();
        // dd($items);
//         $course = DB::table('courses')->where('id', $request->course_id)->first();
// dd($course);
        return view('items.index')
            ->with('items', $items)
            ->with('course', $course);
    }

    /**
     * Show the form for creating a new Item.
     *
     * @return Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created Item in storage.
     *
     * @param CreateItemRequest $request
     *
     * @return Response
     */
    public function store(CreateItemRequest $request)
    {
        $input = $request->all();

        $item = $this->itemRepository->create($input);

        Flash::success('Élément enregistré avec succès.');

        return redirect(route('items.index'));
    }

    /**
     * Display the specified Item.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $item = $this->itemRepository->findWithoutFail($id);

        if (empty($item)) {
            Flash::error('Objet non-trouvé');

            return redirect(route('items.index'));
        }
        
        DB::table('items')->where('id', $id)->increment('view_count');
        return view('courses.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified Item.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $item = $this->itemRepository->findWithoutFail($id);
        ()
        //dd($item);
        $course = Course::all();
        if (empty($item)) {
            Flash::error('Objet non-trouvé');

            return redirect(route('courses.index'));
        }

        return view('courses.edit')
        ->with('item', $item)
        ->with('course', $course);
    }

    /**
     * Update the specified Item in storage.
     *
     * @param  int              $id
     * @param UpdateItemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItemRequest $request)
    {
        $item = $this->itemRepository->findWithoutFail($id);

        if (empty($item)) {
            Flash::error('Objet non-trouvé');

            return redirect(route('courses.index'));
        }

        $item = $this->itemRepository->update($request->all(), $id);

        Flash::success('Élément mis à jour avec succès.');

        return redirect(route('items.index', ['course_id' => $item->course_id, 'item_id' => $item->id]));
    }

    /**
     * Remove the specified Item from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $item = $this->itemRepository->findWithoutFail($id);

        if (empty($item)) {
            Flash::error('Objet non-trouvé');

            return redirect(route('courses.index'));
        }

        $this->itemRepository->delete($id);

        Flash::success('Élément supprimé avec succès.');

        return redirect(route('courses.contents', ['course_id' => $item->course_id, 'contents' => 'yes'] ));
    }
}
