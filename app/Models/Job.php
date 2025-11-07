<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     * The table associated with the model.
     */
    protected $table = 'job_listings';
    protected $fillable = ['title', 'company', 'location', 'description', 'is_remote', 'user_id'];
}
