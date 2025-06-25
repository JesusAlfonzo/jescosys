<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MarcaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $marcas = Marca::paginate();

        return view('marca.index', compact('marcas'))
            ->with('i', ($request->input('page', 1) - 1) * $marcas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $marca = new Marca();

        return view('marca.create', compact('marca'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MarcaRequest $request): RedirectResponse
    {
        Marca::create($request->validated());

        return Redirect::route('marcas.index')
            ->with('success', 'Marca created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $marca = Marca::find($id);

        return view('marca.show', compact('marca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $marca = Marca::find($id);

        return view('marca.edit', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MarcaRequest $request, Marca $marca): RedirectResponse
    {
        $marca->update($request->validated());

        return Redirect::route('marcas.index')
            ->with('success', 'Marca updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Marca::find($id)->delete();

        return Redirect::route('marcas.index')
            ->with('success', 'Marca deleted successfully');
    }
}
