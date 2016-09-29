<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function criterias()
    {
        return $this->hasMany('App\Criteria');
    }
}
