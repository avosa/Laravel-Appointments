<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $table = 'appointments';

    protected $fillable = [
        'start_time', 'finish_time', 'price', 'comments', 'client_id', 'doctor_id'
    ];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at', 'start_time', 'finish_time'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
