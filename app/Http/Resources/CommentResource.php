<?php

namespace App\Http\Resources;

use Carbon\Carbon;
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
            'comment_id' =>$this->id,
            'author'=> new  UserResource($this->author),
            'created_at' =>Carbon::parse( $this->created_at)->format('d/m/Y'),
        ];
    }
}
