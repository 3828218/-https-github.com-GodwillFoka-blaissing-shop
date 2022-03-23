<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Cathegorie;
use Illuminate\Http\Request;

class CathegorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $cathegorie = Cathegorie::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cathegorie = Cathegorie::latest()->paginate($perPage);
        }

        return view('admin.cathegorie.index', compact('cathegorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.cathegorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'nom' => 'required'
		]);
        $requestData = $request->all();
        
        Cathegorie::create($requestData);

        return redirect('admin/cathegorie')->with('flash_message', 'Cathegorie added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $cathegorie = Cathegorie::findOrFail($id);

        return view('admin.cathegorie.show', compact('cathegorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $cathegorie = Cathegorie::findOrFail($id);

        return view('admin.cathegorie.edit', compact('cathegorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'nom' => 'required'
		]);
        $requestData = $request->all();
        
        $cathegorie = Cathegorie::findOrFail($id);
        $cathegorie->update($requestData);

        return redirect('admin/cathegorie')->with('flash_message', 'Cathegorie updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Cathegorie::destroy($id);

        return redirect('admin/cathegorie')->with('flash_message', 'Cathegorie deleted!');
    }
}
