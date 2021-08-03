<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'field',
        'field2',
        'location',
        'flag',
        'date',
        'about',
        'file_path',

    ];

    public function projectimages() {
        return $this->hasMany('App\Models\ProjectImages','project_id');
}
}
