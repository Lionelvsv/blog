<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'datetime', 'country'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function publish(Post $post)
    {
        $this->posts()->save($post);
    }

     /**
     * Return the user attributes.

     * @return array
     */
    public static function getAuthor($id)
    {
        $user = self::find($id);
        return [
            'id'     => $user->id,
            'name'   => $user->name,
            'email'  => $user->email,
            'url'    => '',  // Optional
            'avatar' => 'gravatar',  // Default avatar
            'admin'  => $user->role === 'admin', // bool
        ];
    }
     
    
}
