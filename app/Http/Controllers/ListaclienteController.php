<?php

namespace App\Http\Controllers;

use App\Models\Listacliente;
use Illuminate\Http\Request;

/**
 * Class ListaclienteController
 * @package App\Http\Controllers
 */
class ListaclienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaclientes = Listacliente::paginate();

        return view('listacliente.index', compact('listaclientes'))
            ->with('i', (request()->input('page', 1) - 1) * $listaclientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listacliente = new Listacliente();
        return view('listacliente.create', compact('listacliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Listacliente::$rules);

        $listacliente = Listacliente::create($request->all());

        return redirect()->route('listaclientes.index')
            ->with('success', 'Listacliente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listacliente = Listacliente::find($id);

        return view('listacliente.show', compact('listacliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listacliente = Listacliente::find($id);

        return view('listacliente.edit', compact('listacliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Listacliente $listacliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listacliente $listacliente)
    {
        request()->validate(Listacliente::$rules);

        $listacliente->update($request->all());

        return redirect()->route('listaclientes.index')
            ->with('success', 'Listacliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $listacliente = Listacliente::find($id)->delete();

        return redirect()->route('listaclientes.index')
            ->with('success', 'Listacliente deleted successfully');
    }
}
