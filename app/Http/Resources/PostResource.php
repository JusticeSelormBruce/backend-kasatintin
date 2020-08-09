<?php

namespace App\Http\Resources;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'post_id' => $this->id,
            'post_title'=>$this->title,
            'post_content' => $this->content,
            'post_type' => $this->post_type,
            'post_data' => $this->meta_data,
            'updated_at' =>Carbon::parse( $this->updated_at)->format('d/m/Y'),
            'author'=> new UserResource($this->author),
            'comments'=>   CommentResource::collection($this->comments),
            'category'=> new CategoryResource($this->category),
            'images'=>  ImageResource::collection($this->images),
            'videos'=>  VideoResource::collection($this->videos),
            'tags'=>  TagResource::collection($this->tags),

        ];
    }
}
