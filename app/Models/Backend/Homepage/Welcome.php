<?php

namespace App\Models\Backend\Homepage;

use App\Models\Backend\BackendBaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Welcome extends BackendBaseModel
{
    use HasFactory, SoftDeletes;

    protected $table    ='homepages';
    protected $fillable = ['id','title','subtitle','description','button','link','video','image','status','created_by','updated_by'];

}
