<?php

class Estudiante extends Eloquent {

	protected $table = 'student';
	protected $primaryKey = 'cod_student';
	public $timestamps = false;

	public function familia()
    {
    }

    public function usuario()
    {
    	return $this->belongsTo('Usuario', 'cod_user', 'cod_student');
    }

    public function academica()
    {
        return $this->hasOne('Academica', 'cod_student');
    }

    public function administrativa()
    {
        return $this->hasOne('Administrativa', 'cod_student');
    }

    public function medica()
    {
        return $this->hasOne('Medica', 'cod_student');
    }

}