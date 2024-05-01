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
        $resource = [
            'id' => $this->id,
            'user' => $this->user,
            'teacher' => $this->teacher,
            'aspect' => $this->aspect,
            'finish' => $this->finish,
            'result' => $this->result,
            'feedback' => $this->feedback,
        ];
        if ($request->has('withTeacher')){
            $resource['teacher'] = $this->teachers;
        }
        if ($request->has('withAspect')){
            $resource['aspect'] = $this->aspects;
        }

        return $resource;
    }
}
