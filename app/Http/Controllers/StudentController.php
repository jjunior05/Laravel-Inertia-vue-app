<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return response($students);
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
            'email' => 'required|email|unique:students',
            'age' => 'required'
        ], [
            'name.required' => 'Campo name é obrigatório!',
            'email.required' => 'Campo email é obrigatório!',
            'email.unique' => 'Campo email precisa ser único!',
            'email.email' => 'Campo email precisa ser válido!',
            'age.required' => 'Campo age é obrigatório!'
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;

        $student->save();

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
        $student = Student::findOrFail($id);
        return response($student);
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
            'email' => 'email|unique:students'
        ], [
            'email.unique' => 'Campo email precisa ser único!',
            'email.email' => 'Campo email precisa ser válido!',
        ]);

        $student = Student::findOrFail($id);

        $student->fill($student);

        if ($student->isClean()) {
            return response('Não foi possível alterar nenhum valor com as informações informadas.', 404);
        }

        $student->save();

        return response($student, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        if (!$student)
            return response('Não foi possível encontrar nenhum registro!', 404);

        $student->delete();

        return response($student, 200);
    }
}
