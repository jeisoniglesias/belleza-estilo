<?php

namespace App\Http\Controllers\Tipos;

use App\Http\Controllers\Controller;
use App\Http\Requests\tipos\public\StorePublicTargetRequest;
use App\Http\Requests\tipos\public\UpdatePublicTargetRequest;
use App\Models\Tipos\PublicTarget;
use Illuminate\Http\Request;

class PublicTargetController extends Controller
{
    private function _index($data)
    {
        return view('pages.tipos.publicTarget.index', $data);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicTarget = PublicTarget::paginate(8);
        return $this->_index(compact('publicTarget'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicTargetRequest $request)
    {
        PublicTarget::create($request->all());
        return redirect()->route('targets.index')->with('success', 'Target created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PublicTarget $target)
    {
        $publicTarget = PublicTarget::paginate(8);
        return $this->_index(compact('publicTarget', 'target'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicTargetRequest $request, PublicTarget $target)
    {
        $target->update($request->only('name'));

        return redirect()->route('targets.index')->with('success', 'Registro actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $publicTarget)
    {

        try {
            $publicTarget = PublicTarget::findOrFail($publicTarget);
            $publicTarget->delete();
            return redirect()->route('targets.index')->with('success', 'Registro eliminado con éxito.');
        } catch (\Exception $e) {
            return redirect()->route('targets.index')->with('error', 'No se puede eliminar el registro.');
        }
    }
}
