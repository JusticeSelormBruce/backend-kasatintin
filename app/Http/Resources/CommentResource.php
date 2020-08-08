<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'comment_content' => $this->content,
            'author_id' => $this->author_id,
            'post_id' => $this->post_id,
            'created_at' => $this->created_at,
            // 'posts'=> new PostResource($this->post),
            // 'author'=> new UserResource($this->post),


        ];
    }
}
