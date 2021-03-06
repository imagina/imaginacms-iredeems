<?php

namespace Modules\Iredeems\Transformers;

use Illuminate\Http\Resources\Json\Resource;
use Modules\Iprofile\Transformers\UserTransformer;

class PointTransformer extends Resource
{
  public function toArray($request)
  {
    $item =  [
      'id' => $this->when($this->id,$this->id),
      'userId' => $this->when($this->user_id,$this->user_id),
      'user' => new UserTransformer($this->whenLoaded('user')),
      'pointableId' => $this->when($this->pointable_id,$this->pointable_id),
      'pointableType' => $this->when($this->pointable_type,$this->pointable_type),
      'type' => $this->when($this->type,$this->type),
      'description' => $this->when($this->description,$this->description),
      'points' => $this->when($this->points,$this->points),
      'createdAt' => $this->when($this->created_at,$this->created_at),
      'updatedAt' => $this->when($this->updated_at,$this->updated_at)
    ];

    return $item;

  }
}
