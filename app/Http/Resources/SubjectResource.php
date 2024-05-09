<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $resource = [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'description' => $this->description
        ];
        if ($request->has('type')) {
            if ($request->type == 'select'){
                $resource = [
                    'value' => $this->id,
                    'label' => $this->name,
                ];
            }
        }
        return $resource;
    }
}
