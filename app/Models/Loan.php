<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Loan
 *
 * @property int $id
 * @property int $member_id
 * @property int $book_id
 * @property string $date_loaned
 * @property string $date_due
 * @property string|null $date_returned
 * @method static \Database\Factories\LoanFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Loan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Loan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereDateDue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereDateLoaned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereDateReturned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereMemberId($value)
 * @mixin \Eloquent
 */
class Loan extends Model
{
    use HasFactory;

    public $timestamps = false;
}
