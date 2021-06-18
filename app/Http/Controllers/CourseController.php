<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = User::all();
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
        if (!$request->has('name')) return response("Campo name é obrigatório!");
        if (!$request->has('email')) return response("Campo email é obrigatório!");
        if (!$request->has('age')) return response("Campo age é obrigatório!");
        if (!$request->has('date_enrollment')) return response("Campo date_enrollment é obrigatório!");

        $course = new Course();
        $course->name = $request->name;
        $course->price = $request->email;
        $course->is_ative = $request->age;
        $course->date_enrollment = $request->date_enrollment;

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
