<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function band()
    {
        return $this->belongsTo(Band::class, 'bandMetallumId', 'metallumId');
    }

    public function songs()
    {
        return $this->hasMany(Song::class, 'albumMetallumId', 'metallumId');
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
