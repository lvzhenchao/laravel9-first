<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'article';

    protected $casts = [
        'publish_at'  => 'date',
    ];

    //setTitleAttribute
    public function setPublishAtAttribute($date){
        $this->attributes['publish_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    //scope
    public function scopePublished($query){
        $this->where('publish_at', '<=', Carbon::now());
    }
}
