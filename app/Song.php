<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{   
    public function album()
    {
        return $this->belongsTo(Album::class, 'albumMetallumId', 'metallumId');
    }
    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', "%$search%");
    }
}
