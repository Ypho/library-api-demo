<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Member
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $zipcode
 * @property string $city
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property int $card_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\MemberFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Member newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member query()
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereCardNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereZipcode($value)
 * @mixin \Eloquent
 */
class Member extends Model
{
    use HasFactory;
}
