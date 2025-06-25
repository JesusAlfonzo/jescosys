<?php

namespace App\Http\Controllers;

use App\Models\Presentacione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PresentacioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PresentacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $presentaciones = Presentacione::paginate();

        return view('presentacione.index', compact('presentaciones'))
            ->with('i', ($request->input('page', 1) - 1) * $presentaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $presentacione = new Presentacione();

        return view('presentacione.create', compact('presentacione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PresentacioneRequest $request): RedirectResponse
    {
        Presentacione::create($request->validated());

        return Redirect::route('presentaciones.index')
            ->with('success', 'Presentacione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $presentacione = Presentacione::find($id);

        return view('presentacione.show', compact('presentacione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $presentacione = Presentacione::find($id);

        return view('presentacione.edit', compact('presentacione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PresentacioneRequest $request, Presentacione $presentacione): RedirectResponse
    {
        $presentacione->update($request->validated());

        return Redirect::route('presentaciones.index')
            ->with('success', 'Presentacione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Presentacione::find($id)->delete();

        return Redirect::route('presentaciones.index')
            ->with('success', 'Presentacione deleted successfully');
    }
}
