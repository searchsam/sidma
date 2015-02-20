<?php

class ClaseController extends BaseController {

    public function inicio() {
        $clases = Clase::all();
        return View::make('clase.clase')->with('niveles', $clases);
    }

    public function NewOrEdit() {
        $input = Input::all();
        if (isset($input['cod_level'])) {
            $nivel = Clase::find($input['cod_level']);
        } else {
            $nivel = new Clase;
        }
        $nivel->level_name = $input['nombrenivel'];
        $nivel->description = $input['descripcion'];

        $nivel->save();
        return Redirect::action('AdmonacademicaController@inicio');
    }
public function agregarmateria(){
    $input=Input::all();
    $cod_year_grupo = $input['cod_year_grupo'];
    
     if (isset($input['cod_class'])) {
         $clase = Clase::find($input['cod_class']);
     }else{
           $clase = new Clase;
           $clase->cod_subject = $input['materia'];
           $clase->cod_year_grupo = $cod_year_grupo;
     }
    
    $clase->cod_teacher = $input['docente'];
    $clase->semester_quantity = $input['semestre'];
    
    $clase->save();
     return Redirect::action('AdmonacademicaController@periodos',array('cod_school_year'=>  Yeargroup::find($cod_year_grupo)->cod_school_year));
}
    
    public function editarclase() {
        $input = Input::all();
        if (isset($input['cod_year_grupo'])) {
            $yeargrupo = Yeargroup::find($input['cod_year_grupo']);
        } else {
            $yeargrupo = New Yeargroup;
        }
        if (isset($input['cod_class'])) {
            $cod_class = $input['cod_class'];
        } else
        {
            $cod_class='';
        }
        $cod_year_grupo = $input['cod_year_grupo'];
        if (isset($input['cod_class'])) {
            $clase = Clase::find($input['cod_class']);
        } else {
            $clase = New Clase;
        }
        $materias = new Materia;
         return View::make('clase.editarclase')->with('yeargrupo', $yeargrupo)->with('materias',$materias)
            ->with('cod_year_grupo',$cod_year_grupo)
            ->with('clase',$clase)->with('cod_class',$cod_class);
    }

    public function editar() {
        $input = Input::all();
        if (isset($input['cod_level'])) {
            $nivel = Clase::find($input['cod_level']);
        } else {
            $nivel = New Clase;
        }
        return View::make('nivel.editar')->with('nivel', $nivel);


//return Redirect::action('AdmonacademicaController@inicio');
    }

    public function borrar() {
        $input = Input::all();
        $nivel = Clase::find($input["current_level"]);
        return View::make('nivel.borrar')->with('nivel', $nivel);
    }

    public function borrarclase() {
        $input = Input::all();
        $nivel = Clase::find($input["cod_level"]);
        $nivel->delete();
        return Redirect::action('AdmonacademicaController@inicio');
    }

}
