<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EvaluationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if ($request->has('withTeacher')){
            $resource = [
                'id' => $this->id,
                'user' => $this->user,
                'teacher' => $this->teachers,
                'aspect' => $this->aspect,
                'finish' => $this->finish,
                'result' => $this->result,
                'feedback' => $this->feedback,
            ];
        }
        else {
            $resource = parent::toArray($request);
        }
        return $resource;
    }
}
