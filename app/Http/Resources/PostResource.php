<?php

namespace App\Http\Resources;

use App\User;
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
            'post_content' => $this->content,
            'post_type' => $this->post_type,
            'author_id' => $this->author_id,
            'categories_id' => $this->categories_id,
            'post_data' => $this->meta_data,
            'updated_at' => $this->updated_at,
            'author'=> new UserResource($this->author),
            'category'=> new CategoryResource($this->category),
            'images'=>  ImageResource::collection($this->images),
            'videos'=>  VideoResource::collection($this->videos),
            'comments'=>  CommentResource::collection($this->comments),
            'tags'=>  TagResource::collection($this->tags),

        ];
    }
}
