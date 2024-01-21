<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait FilterByUser
    {

        protected static function boot()
        {
            parent::boot();

            self::creating(function($model) {
                // Only set the user_id if the user is not an admin
                if (!auth()->user()->is_admin) {
                    $model->user_id = auth()->id();
                }
            });

            self::addGlobalScope('filterByUser', function(Builder $builder) {
                if (!auth()->user()->is_admin) {
                    $builder->where('user_id', auth()->id());
                }
                // If the user is an admin, no additional global scope is applied,
                // so they see everything.
            });
        }

    }
