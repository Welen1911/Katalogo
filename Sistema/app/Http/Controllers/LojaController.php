<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLojaRequest;
use App\Models\Loja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response | RedirectResponse
    {  
        if (auth()->user()->loja) {
            return redirect()->route('dashboard')->withErrors(['Você já possui uma loja cadastrada.']);
        }

        return Inertia::render('lojas/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateLojaRequest $request): RedirectResponse
    {
        if (auth()->user()->loja) {
            return redirect()->route('dashboard')->withErrors(['Você já possui uma loja cadastrada.']);
        }

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('logos', 'public');
        }

        $loja = Loja::create([
            'user_id' => auth()->id(),
            'nome' => $request->input('nome'),
            'logo' => $path ?? null,
            'contato' => $request->input('contato'),
        ]);

        return redirect()->route('lojas.show', $loja)->with('success', 'Loja criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Loja $loja): Response
    {
        return Inertia::render('lojas/Show', [
            'loja' => $loja,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
