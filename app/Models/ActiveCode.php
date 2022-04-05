<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'expire_at'
    ];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopegenerateCode($query, $user)
    {
        $user->activecodes()->delete();
//        if ($code = $this->getAliveCode($user)) {
//            $code = $code->code;
//        } else {
        do {
            $code = mt_rand(10000, 999999);
        } while ($this->hasGetCode($code, $user));

        $user->activecodes()->create([

            'code' => $code,
            'expire_at' => now()->addMinutes(10)
        ]);

//        }
        return $code;


    }

    public function hasGetCode(int $code, $user)
    {

        return !!$user->activecodes()->where('code', $code)->first();
    }

    public function getAliveCode($user)
    {

        return $user->activecodes()->where('expire_at', '>', now())->first();
    }

    public function scopeverifyCode($query,$code, $user)
    {
        return !!$user->activecodes()->where('code', $code)->where('expire_at', '>', now())->first();
    }
}
