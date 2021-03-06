<?php

namespace Modules\Iredeems\Entities;

use Illuminate\Database\Eloquent\Model;

class Redeem extends Model
{

    protected $table = 'iredeems__redeems';

    protected $fillable = [
      'user_id',
      'item_id',
      'description',
      'points'
    ];

    public function user()
    {
      return $this->belongsTo("Modules\User\Entities\Sentinel\User","user_id");
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

}
