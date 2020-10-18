<?php

namespace App;

use App\Scopes\ActivatedScope;
use App\Events;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    //use SoftDeletes;

    protected $dispatchesEvents = [
        'created' => \App\Events\ProductsCreated::class,
        'creating' => \App\Events\ProductsCreating::class,
    ];

    protected $fillable = [
        'title',
        'description',
        'activated'
    ];

    protected $appends = [
        'resume_title'
    ];

    protected $hidden = [
        'title'
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActivatedScope);
    }

    //public function getTitleAttribute($value)
    public function getResumeTitleAttribute()
    {
        //return strtoupper($value);
        if (asset($this->attributes['title'][3])) {
            return mb_substr($this->attributes['title'], 0, 3) . '...';
        }
        return $this->attributes['title'];
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
    }
}
