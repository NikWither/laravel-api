<?php

namespace App\Http\Resources\V1;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

class LessonsResource extends JsonResource
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
            'price' => $this->price,
            // 'subjectId' => $this->subject_id,
            'subjectName' => $this->subject?->name, // проверка на null, если subject не найден
            'studentName' => $this->student?->name,
            'notes' => $this->notes,
            'homework' => $this->homework,
            'plans' => $this->plans,
            'mark' => $this->mark,
            'isPaid' => (bool) $this->isPaid,
            'isPassed' => (bool) $this->isPassed,
            'created' => $this->created_at->format('d.m.Y'),
            'updated' => $this->updated_at->format('d.m.Y'),
        ];
    }
}
