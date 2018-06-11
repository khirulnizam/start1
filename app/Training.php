<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    //Trainings.php
	//select field involved
	protected $fillable = ['trainingname','desc','trainer'];
}
