<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function create(){

        return view('curso.create');

     }

     public function index(){

        $cursos = Curso::orderBy('id', 'desc')->get();
         return view('curso.listar', compact('cursos'));

    }

     public function store(Request $request){

        $curso= new Curso();
        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        //ADJUNTAR EL PDF
        $file=$request->file("urlPdf");
        $nombreArchivo = "pdf_".time().".".$file->guessExtension();
        $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
        $curso->urlPdf = $nombreArchivo;
        $curso->save();


     }
}
