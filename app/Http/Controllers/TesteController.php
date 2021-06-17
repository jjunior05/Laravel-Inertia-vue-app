<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TesteController extends Controller
{

    use ApiResponser;

    public function getCourses()
    {
        $courses = Courses::all();

        return $this->successResponse($courses);
    }


    public function index(Request $request)
    {

        if ($request->has('nome')) {
            $nome = $request->nome;
            if (!$nome) return  $this->errorResponse('Preenchimento campo nome é obrigatório!!!', Response::HTTP_NOT_FOUND);
        } else {
            return response()->json(['data' => 'Campo nome é obrigatório!!!']);
        }

        if ($request->has('email')) {
            $email = $request->email;
            if (!$email) return $this->errorResponse('Preenchimento campo email é obrigatório!!!', Response::HTTP_NOT_FOUND);
        } else {
            return response()->json(['data' => 'Campo email é obrigatório!!!']);
        }
    }
}
