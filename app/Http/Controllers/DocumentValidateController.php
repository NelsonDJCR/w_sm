<?php

namespace App\Http\Controllers;

use App\DocumentValidate;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class DocumentValidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('document_validates.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(DocumentValidate::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document_validates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'person_type'=>'required',
        ]);
        $documentValidate = DocumentValidate::create($validatedData);
        flashy()->success(__('messages.create_success'));

        return redirect(route('document-validates.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentValidate $documentValidate){
        return view('document_validates.edit',['documentValidate'=>$documentValidate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentValidate $documentValidate)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'person_type'=>'required',
        ]);
        $documentValidate->fill($validatedData);
        $documentValidate->save();
        flashy()->success(__('messages.update_success'));

        return redirect(route('document-validates.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentValidate $documentValidate)
    {
        try{
            $documentValidate->delete();
            flashy()->success(__('messages.delete_success'));
        } catch(\Throwable $th) {
            flashy()->error(__('messages.error_dependence'));

        }
        return redirect(route('document-validates.index'));
    }
}
