<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PreferenceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
      return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'source' => $this->source,
            'category' => $this->category,
            'author' => $this->author,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
        ];
    }
}
