<?php

namespace App\Http\Controllers;

use App\Models\Tipodecontrato;
use Illuminate\Http\Request;

/**
 * Class TipodecontratoController
 * @package App\Http\Controllers
 */
class TipodecontratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipodecontratos = Tipodecontrato::paginate();

        return view('tipodecontrato.index', compact('tipodecontratos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipodecontratos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipodecontrato = new Tipodecontrato();
        return view('tipodecontrato.create', compact('tipodecontrato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipodecontrato::$rules);

        $tipodecontrato = Tipodecontrato::create($request->all());

        return redirect()->route('tipodecontratos.index')
            ->with('success', 'Tipodecontrato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipodecontrato = Tipodecontrato::find($id);

        return view('tipodecontrato.show', compact('tipodecontrato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipodecontrato = Tipodecontrato::find($id);

        return view('tipodecontrato.edit', compact('tipodecontrato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipodecontrato $tipodecontrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipodecontrato $tipodecontrato)
    {
        request()->validate(Tipodecontrato::$rules);

        $tipodecontrato->update($request->all());

        return redirect()->route('tipodecontratos.index')
            ->with('success', 'Tipodecontrato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipodecontrato = Tipodecontrato::find($id)->delete();

        return redirect()->route('tipodecontratos.index')
            ->with('success', 'Tipodecontrato deleted successfully');
    }
}
