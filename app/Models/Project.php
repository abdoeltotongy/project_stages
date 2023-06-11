<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'disc', 'document', 'type'];

    public function stages()
    {
        return $this->belongsToMany(Stage::class ,'project_stage')->withPivot('start_date', 'end_date', 'status');
    }

}
