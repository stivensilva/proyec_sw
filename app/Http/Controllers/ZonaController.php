<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use Illuminate\Http\Request;

/**
 * Class ZonaController
 * @package App\Http\Controllers
 */
class ZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zonas = Zona::paginate();

        return view('zona.index', compact('zonas'))
            ->with('i', (request()->input('page', 1) - 1) * $zonas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zona = new Zona();
        return view('zona.create', compact('zona'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Zona::$rules);

        $zona = Zona::create($request->all());

        return redirect()->route('zona.index')
            ->with('success', 'Zona created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id_zona
     * @return \Illuminate\Http\Response
     */
    public function show($id_zona)    {
        $zona = Zona::find($id_zona);
        return view('zona.show', compact('zona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id_zona
     * @return \Illuminate\Http\Response
     */
    public function edit($id_zona)
    {
        $zona = Zona::find($id_zona);
        return view('zona.edit', compact('zona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Zona $zona
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Zona $zona)
    public function update(Request $request, Zona $zona)
    {
        // request()->validate(Zona::$rules);
        // $zona->update($request->all());
        // return $request;
        Zona::where('id_zona', $request->get('id_zona'))->update(['descripcion_zona' => $request->get('descripcion_zona')]);
        return redirect()->route('zona.index')
            ->with('success', 'Zona updated successfully');
    }

    /**
     * @param int $id_zona
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id_zona)
    {
        $zona = Zona::find($id_zona)->delete();

        return redirect()->route('zona.index')
            ->with('success', 'Zona deleted successfully');
    }
}
