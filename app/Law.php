<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Law extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function templates()
    {
        return $this->hasMany('App\Template');
    }
}
