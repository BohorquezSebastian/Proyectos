<?php

namespace App\Http\Controllers;

use App\Models\InventarioFinal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InventarioFinalController extends Controller
{
    public function index()
    {
        $inventarios = InventarioFinal::all();
        return view('inventarios_final.index', compact('inventarios'));
    }

    public function create()
    {
        return view('inventarios_final.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Titulo' => 'required',
            'Descripcion' => 'required',
            'Precio' => 'required|numeric',
            'Stock' => 'required|integer',
            'Categoria' => 'required',
            'Foto' => 'required|image',
        ]);

        $imagePath = $request->file('Foto')->store('images', 'public');

        InventarioFinal::create([
            'Titulo' => $request->Titulo,
            'Descripcion' => $request->Descripcion,
            'Precio' => $request->Precio,
            'Stock' => $request->Stock,
            'Categoria' => $request->Categoria,
            'Foto' => $imagePath,
        ]);

        return redirect()->route('inventarios_final.index')->with('success', 'Item added successfully.');
    }

    public function show(InventarioFinal $inventario)
    {
        return view('inventarios_final.show', compact('inventario'));
    }

    public function edit(InventarioFinal $inventario)
    {
        return view('inventarios_final.edit', compact('inventario'));
    }

    public function update(Request $request, InventarioFinal $inventario)
    {
        $request->validate([
            'Titulo' => 'required',
            'Descripcion' => 'required',
            'Precio' => 'required|numeric',
            'Stock' => 'required|integer',
            'Categoria' => 'required',
            'Foto' => 'image',
        ]);

        if ($request->hasFile('Foto')) {
            Storage::disk('public')->delete($inventario->Foto);
            $imagePath = $request->file('Foto')->store('images', 'public');
        } else {
            $imagePath = $inventario->Foto;
        }

        $inventario->update([
            'Titulo' => $request->Titulo,
            'Descripcion' => $request->Descripcion,
            'Precio' => $request->Precio,
            'Stock' => $request->Stock,
            'Categoria' => $request->Categoria,
            'Foto' => $imagePath,
        ]);

        return redirect()->route('inventarios_final.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(InventarioFinal $inventario)
    {
        Storage::disk('public')->delete($inventario->Foto);
        $inventario->delete();

        return redirect()->route('inventarios_final.index')->with('success', 'Item deleted successfully.');
    }
}
