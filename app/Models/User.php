<?php

namespace App\Models;

use App\Models\Info\UserAttr;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        UserAttr::NAME,
        UserAttr::EMAIL,
        UserAttr::PASSWORD,
    ];

    protected $hidden = [
        UserAttr::PASSWORD,
        UserAttr::REMEMBER_TOKEN,
        UserAttr::TWO_FACTOR_RECOVERY_CODES,
        UserAttr::TWO_FACTOR_SECRET,
    ];

    protected $casts = [
        UserAttr::EMAIL_VERIFIED_AT => 'datetime',
    ];

    protected $appends = [
        UserAttr::PROFILE_PHOTO_PATH,
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
