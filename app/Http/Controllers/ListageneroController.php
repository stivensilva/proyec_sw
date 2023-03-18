<?php

namespace App\Http\Controllers;

use App\Models\Listagenero;
use Illuminate\Http\Request;

/**
 * Class ListageneroController
 * @package App\Http\Controllers
 */
class ListageneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listageneros = Listagenero::paginate();

        return view('listagenero.index', compact('listageneros'))
            ->with('i', (request()->input('page', 1) - 1) * $listageneros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listagenero = new Listagenero();
        return view('listagenero.create', compact('listagenero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Listagenero::$rules);

        $listagenero = Listagenero::create($request->all());

        return redirect()->route('listageneros.index')
            ->with('success', 'Listagenero created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listagenero = Listagenero::find($id);

        return view('listagenero.show', compact('listagenero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listagenero = Listagenero::find($id);

        return view('listagenero.edit', compact('listagenero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Listagenero $listagenero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listagenero $listagenero)
    {
        request()->validate(Listagenero::$rules);

        $listagenero->update($request->all());

        return redirect()->route('listageneros.index')
            ->with('success', 'Listagenero updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $listagenero = Listagenero::find($id)->delete();

        return redirect()->route('listageneros.index')
            ->with('success', 'Listagenero deleted successfully');
    }
}
