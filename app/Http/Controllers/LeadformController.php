<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Leadform;

class LeadformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $forms = \App\Leadform::where('user_id', Auth::id())->get();

        return view('leadforms.index')
            ->with('leadforms', $forms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('leadforms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        $params = Input::all();
        $params['user_id'] = Auth::id();

        $newForm = Leadform::create($params);
        $newForm->save();

        // redirect
        return redirect('leadforms')->with('message', 'You created a new leadform!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $leadform = \App\Leadform::find($id);
        return view('leadforms.view')->with('leadform', $leadform);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $leadform = \App\Leadform::find($id);
        return view('leadforms.edit')->with('currentform', $leadform);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        $params = Input::all();

        $form = Leadform::find($id);
        $form->update($params);
        $form->save();

        // redirect
        return redirect('leadforms')->with('message', $form->title . ' has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
