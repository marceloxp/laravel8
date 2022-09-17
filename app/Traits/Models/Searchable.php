<?php

namespace App\Traits\Models;

trait Searchable
{
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
