<?php

namespace App\Traits\Models;

trait Searchable
{
    /**
     * Search the model by the given search_fields property.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $search
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search)
    {
        if (!empty($search)) {
            $term = str_replace(' ', '%', $search);
            $query->where(function ($query) use ($term) {
                foreach ($this->search_fields as $field) {
                    $query->orWhere($field, 'like', '%' . $term . '%');
                }
            });
        }
        return $query;
    }
}
