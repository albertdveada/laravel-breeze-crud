<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    protected $primaryKey = 'id_members';

    public function getRouteKeyName()
    {
        return 'id_members';
    }

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id_members',
        'name',
        'phone',
        'profil_photos',
    ];

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_members)) {
                do {
                    // RANDOM NUMBER: Generate a 6-digit random number as a string
                    $randomId = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
                } while (self::where('id_members', $randomId)->exists()); // Ensure it's unique

                $model->id_members = $randomId; // Assign generated ID
            }
        });
    }
}
