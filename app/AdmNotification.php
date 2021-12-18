<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmNotification extends Model
{
    protected $fillable = [
        'sender_id',
        'recipient_id',
        'document_number',
        'body',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
