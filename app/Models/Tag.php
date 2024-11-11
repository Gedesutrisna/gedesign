<?php

namespace App\Models;

use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
    
}
