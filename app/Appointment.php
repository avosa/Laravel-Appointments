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

//    public function getStartTimeAttribute($value)
//    {
//        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
//    }
//
//    public function setStartTimeAttribute($value)
//    {
//        $this->attributes['start_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
//    }
//
//    public function getFinishTimeAttribute($value)
//    {
//        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
//    }
//
//    public function setFinishTimeAttribute($value)
//    {
//        $this->attributes['finish_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
//    }
}
