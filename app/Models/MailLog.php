<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'recipient_email', 'template_id', 'coin', 'quantity', 'amount_charged', 'body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function template()
    {
        return $this->belongsTo(EmailTemplate::class, 'template_id');
    }
}
