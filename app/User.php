<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class User extends Authenticatable implements Searchable, MustVerifyEmail
{
    use HasApiTokens, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'nick_name',
        'phone',
        'email',
        'password',
        'state',
        'language',
        'preferred_currency',
        'country_code',
        'provider',
        'provider_id',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function offeror()
    {
        return $this->hasOne('App\Offeror');
    }

    public function customer()
    {
        return $this->hasOne('App\Customer');
    }

    public function block()
    {
        return $this->belongsTo('App\Block');
    }

    public static function laratablesCustomAction($user)
    {
        try {
            return view('users.includes.action', ['user' => $user])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public function getAvatar()
    {
        if ($this->avatar == 'user.png') {
            return asset('images/icon/user.png');
        } else {
            return asset('storage/' . $this->avatar);
        }
    }

    public static function getList()
    {
        $registers = self::orderBy('name')->get();
        $list = [];
        foreach ($registers as $register) {
            $list[$register->id] = $register->name;
        }
        return $list;

    }

    public function monetaryRequest()
    {
        return $this->hasMany('App\MonetaryRequest');
    }

    public function messages()
    {
        return $this->hasMany('App\ServiceRequestMessage');
    }

    public function validation()
    {
        return $this->hasMany('App\Validation');
    }

    public function getSearchResult(): SearchResult
    {

        $url = route('offerors.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
        );

    }

    public function getRoleName()
    {
        // User role
        $role = $this->getRoleNames()->first();
        return $role;
    }

    public function getCountryCode()
    {
        $countryCode = Country::find($this->country_code);
        if ($countryCode) {
            return $countryCode;
        } else {
            return new Country();
        }
    }

    /**
     * Returns the base view folder of the current user.
     * @return string
     */
    public function getBaseFolderView()
    {

        // User role
        $role = $this->getRoleNames()->first();
        // Check user role
        switch ($role) {
            case 'Administrator':
                return '';
                break;
            case 'Client':
                return 'client_views';
                break;
            case 'Model':
                return 'model_views';
                break;
            case 'Agencia':
                return 'agency_views';
                break;
            default:
                return '';
                break;
        }


    }

    /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
