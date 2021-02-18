<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
*/
class Investment extends Model
{
    protected $fillable =[
        "investment_amount", "transaction_id", "payment_source","payment_status", "investment_status",
        "user_id"
    ];

    public function sale()
    {
    	return $this->hasMany('App\Sale');
    }
}

