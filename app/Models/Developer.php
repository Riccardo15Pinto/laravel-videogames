<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Developer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'country', 'age', 'job_title'];

    public function videogames()
    {
        return $this->hasMany(Videogame::class);
    }
}
