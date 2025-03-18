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
            'subjectId' => $this->subject_id,
            'subjectName' => $this->subject?->name, // проверка на null, если subject не найден
            'notes' => $this->notes,
            'isPaid' => (bool) $this->isPaid,
            'isPassed' => (bool) $this->isPassed,
            'created' => $this->created_at->format('d.m.Y'),
            'updated' => $this->updated_at->format('d.m.Y'),
        ];
    }
}
