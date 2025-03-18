<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

class StudentsResource extends JsonResource
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
            'name' => $this->name,
            'phone' => $this->phone,
            'notes' => $this->when(Route::currentRouteNamed() == 'posts.show', $this->notes),
            'created' => $this->created_at->format('d.m.Y'),
            'updated' => $this->updated_at->format('d.m.Y'),
        ];
    }
}
