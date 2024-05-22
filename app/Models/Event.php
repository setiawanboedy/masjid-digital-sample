<?php

namespace App\Models;

use App\Helper\ConvertDateTimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category',
        'title',
        'slug',
        'image',
        'dtm',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function series()
    {
        return $this->hasMany(Series::class);
    }

    const CATEGORY_LABELS = [
        'SERIES' => 'Web Series',
        'ONLINE' => 'Event Online',
        'OFFLINE' => 'Event Offline',
        
    ];

    public function getCategoryAttribute($value)
    {
        return $this::CATEGORY_LABELS[$value] ?? $value;
    }

    public function getCategoryKeyAttribute()
    {
        return $this->attributes['category'];
    }

    public function getDateAttribute() {
        return ConvertDateTimeFormat::toDateId($this->dtm);
    }
    
    public function getTimeAttribute() {
        return ConvertDateTimeFormat::toTime($this->dtm);
    }

}
