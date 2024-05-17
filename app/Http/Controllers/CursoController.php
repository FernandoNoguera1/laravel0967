<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\profile;
use App\Models\User;
use App\Models\posts;
use App\Models\video;

class CursoController extends Controller
{
    public function create(){

        return view('curso.create');

     }

     public function index(){

        //$cursos = Curso::orderBy('id', 'desc')->get();
         //return view('curso.listar', compact('cursos'));
         // $temp=User::find(1);
    // return $temp->profile;

    $temp= Profile::find(1);
    return $temp->user;

    $temp = posts::find(1);
    return $temp->user;

    $temp = User::find(1);
    return $temp->profile;

    $temp = video::find(1);
    return $temp->user;
 

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


     public function show(Curso $curso){

      return view('curso.show',compact('curso'));


  }

  public function destroy (Curso $curso){
           
   $curso->delete();
   return redirect()->route('curso.index');
}

    //Edit
    public function edit(Curso $curso){//Encuentro el Curso
     
      return view('curso.edit',compact('curso'));

    }

     //Update
     public function update(Request $request, Curso $curso){
 
      $curso->name = $request->name;
      $curso->descripcion = $request->descripcion;
      $curso->save();
   
      return redirect()->route('curso.index');
   
    }
}
