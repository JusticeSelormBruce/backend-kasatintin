<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use tidy;

class UserResource extends JsonResource
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
            'author_id'=> $this->id,
            'author_first_name'=> $this->first_name,
            'author_last_name'=> $this->last_name,
            'author_email'=> $this->email,
            'user_type'=> $this->user_type,
            // 'liked_posts'=> $this->liked_posts,
            // 'disliked_posts'=> $this->disliked_posts,
            // 'author_favourites_posts'=> $this->favourites_posts,
            // 'auhtor_favourites_categories'=> $this->favourites_categories,
            // 'author_preferences'=> $this->preferences,
            'author_avatar'=> $this->avatar,
           
        ];
    }
}
