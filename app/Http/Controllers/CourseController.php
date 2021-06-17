<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::all();
        return response($course, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'is_ative' => 'required|in:true,false'
        ], [
            'name.required' => 'Campo name é obrigatório!',
            'price.required' => 'Campo price é obrigatório!',
            'is_ative.required' => 'Campo is_ative é obrigatório!',
            'is_ative.min' => 'Campo is_ative true ou false!'
        ]);

        $course = new Course();
        $course->name = $request->name;
        $course->price = $request->email;
        $course->is_ative = $request->age;

        $course->save();

        return response('Novo estudante criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return response($course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'is_ative' => 'in:false,true'
        ], [
            'is_ative.min' => 'Campo is_ative true ou false!'
        ]);

        $course = Course::findOrFail($id);

        $course->fill($course);

        if ($course->isClean()) {
            return response('Não foi possível alterar nenhum valor com as informações informadas.', 404);
        }

        $course->save();

        return response($course, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        if (!$course)
            return response('Não foi possível encontrar nenhum registro!', 404);

        $course->delete();

        return response($course, 200);
    }
}
