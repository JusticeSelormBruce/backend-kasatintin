<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'video_id' => $this->id,
            'video_title' => $this->title,
            'video_url' => $this->url,
            'video_post_id' => $this->post_id,
            'updated_at' => $this->updated_at,

        ];
    }
}
