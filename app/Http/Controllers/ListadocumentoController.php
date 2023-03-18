<?php

namespace App\Http\Controllers;

use App\Models\Listadocumento;
use Illuminate\Http\Request;

/**
 * Class ListadocumentoController
 * @package App\Http\Controllers
 */
class ListadocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listadocumentos = Listadocumento::paginate();

        return view('listadocumento.index', compact('listadocumentos'))
            ->with('i', (request()->input('page', 1) - 1) * $listadocumentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listadocumento = new Listadocumento();
        return view('listadocumento.create', compact('listadocumento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Listadocumento::$rules);

        $listadocumento = Listadocumento::create($request->all());

        return redirect()->route('listadocumentos.index')
            ->with('success', 'Listadocumento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listadocumento = Listadocumento::find($id);

        return view('listadocumento.show', compact('listadocumento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listadocumento = Listadocumento::find($id);

        return view('listadocumento.edit', compact('listadocumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Listadocumento $listadocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listadocumento $listadocumento)
    {
        request()->validate(Listadocumento::$rules);

        $listadocumento->update($request->all());

        return redirect()->route('listadocumentos.index')
            ->with('success', 'Listadocumento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $listadocumento = Listadocumento::find($id)->delete();

        return redirect()->route('listadocumentos.index')
            ->with('success', 'Listadocumento deleted successfully');
    }
}
