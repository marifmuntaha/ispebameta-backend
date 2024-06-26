<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
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
            'user' => $this->user,
            'name' => $this->name,
            'nip' => $this->nip,
            'subject' => $this->subject,
            'phone' => $this->phone
        ];
        if ($request->has('with')){
            if ($request->with == 'subject'){
                $resource['subject'] = $this->subjects;
            }
        }
        return $resource;
    }
}
