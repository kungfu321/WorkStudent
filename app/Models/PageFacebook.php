<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageFacebook extends Model
{
    protected $table = 'page_facebooks';
    protected $fillable = ['page_id', 'name', 'page_name'];

}
