<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'name',
        'file_path1',

    ];

    public function projects() {
        return $this->belongsTo('App\Models\Projects', 'project_id', 'id');
    }
}
