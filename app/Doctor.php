<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    protected $fillable = [
        'name', 'phone', 'email'
    ];

    protected $table = 'doctors';

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
