<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Auth;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        $user = Auth::user();
        $token = $user->createToken('MyApp')->accessToken;
        return [
            'user' => [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone
            ],
            'token' => $token
        ];
    }
}
