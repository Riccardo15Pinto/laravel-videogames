<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Videogame extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'description', 'img_path', 'release_date', 'min_age'];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
}
