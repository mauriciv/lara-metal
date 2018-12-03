<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    public function albums()
    {
        return $this->hasMany(Album::class, 'bandMetallumId', 'metallumId');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'metallumId';
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
