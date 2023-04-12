<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;

    public function logins()
    {
        return $this->hasMany(Login::class);
    }

    /*public function scopeWithLastLoginAt($query)
    {
        $query->addSelect(['last_login_at' => Login::select('created_at')
            ->whereColumn('user_login_id', 'user_logins.id')
            ->latest()
            ->take(1)
        ])
            ->withCasts(['last_login_at' => 'datetime']);
    }

    public function scopeWithLastLoginIpAddress($query)
    {
        $query->addSelect(['last_login_ip_address' => Login::select('ip_address')
            ->whereColumn('user_login_id', 'user_logins.id')
            ->latest()
            ->take(1)
        ]);
    }*/

    public function lastLogin()
    {
        return $this->hasOne(Login::class)->latest()->limit(1);
    }

    public function scopeWithLastLogin($query)
    {
        $query->addSelect(['last_login_id' => Login::select('id')
            ->whereColumn('user_login_id', 'user_logins.id')
            ->latest()
            ->take(1),
        ])->with('lastLogin');
    }
}
