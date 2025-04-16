<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecurringTransfer extends Model
{
    protected $fillable = [
        'start_date',
        'end_date',
        'frequency_in_day',
        'recipient_email',
        'amount',
        'reason',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
