<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstrumentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if ($request->with === 'indicator'){
            $resource = [
                'id' => $this->id,
                'aspect' => $this->aspect,
                'name' => $this->name,
                'sub' => $this->sub,
                'desc' => $this->desc,
                'feedback' => $this->feedback,
                'indicators' => $this->indicators
            ];
        }
        else {
            $resource = parent::toArray($request);
        }
        return $resource;
    }
}
