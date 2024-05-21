<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category',
        'title',
        'image',
        'dtm',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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

}
