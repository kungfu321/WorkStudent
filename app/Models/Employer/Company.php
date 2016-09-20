<?php

namespace App\Models\Employer;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = ['name', 'location', 'company_size', 'description', 'avatar', 'images'];

    public function Post()
    {
        return $this->hasMany('App\Models\Post', 'company_id');
    }
}
