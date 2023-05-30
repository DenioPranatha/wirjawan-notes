<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    public function TimeCategory(){
        return $this->belongsTo(TimeCategory::class);
    }

    public function Detail(){
        return $this->hasOne(Detail::class);
    }

}
