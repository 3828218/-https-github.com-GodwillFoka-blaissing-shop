<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Cathegorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    public function listing()
    {
        $produits = Produit::all();
        return view('welcome', compact('produits'));
    }
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
            $produit = Produit::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('etat', 'LIKE', "%$keyword%")
                ->orWhere('descrition', 'LIKE', "%$keyword%")
                ->with('cathegorie')
                ->latest()->paginate($perPage);
        } else {
            $produit = Produit::with('cathegorie')->latest()->paginate($perPage);
        }

        return view('admin.produit.index', compact('produit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $cathegorie = Cathegorie::all();
        return view('admin.produit.create', compact('cathegorie'));
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
			'nom' => 'required',
			'etat' => 'required',
			'image' => 'required',
			'cathegorie_id' => 'required'
		]);
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
        }
        $requestData = $request->all();

        Produit::create($requestData);

        return redirect('admin/produit')->with('flash_message', 'Produit added!');
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
        $produit = Produit::findOrFail($id);

        return view('admin.produit.show', compact('produit'));
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
        $produit = Produit::findOrFail($id);
        $cathegorie = Cathegorie::all();

        return view('admin.produit.edit', compact('produit', 'cathegorie'));
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
			'nom' => 'required',
			'etat' => 'required',
			'cathegorie_id' => 'required'
		]);
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
        }
        $requestData = $request->all();

        $produit = Produit::findOrFail($id);
        $produit->update($requestData);

        return redirect('admin/produit')->with('flash_message', 'Produit updated!');
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
        Produit::destroy($id);

        return redirect('admin/produit')->with('flash_message', 'Produit deleted!');
    }
}
