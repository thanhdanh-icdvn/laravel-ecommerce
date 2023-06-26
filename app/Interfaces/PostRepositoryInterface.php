<?php

namespace App\Interfaces;

use App\Http\Requests\Post\PostStoreRequest;
use  App\Http\Requests\Post\PostUpdateRequest;

interface PostRepositoryInterface
{
    public function getAllPost();
    public function getPostById($postId);
    public function getPublishedPosts();
    public function createPost(PostStoreRequest $postStoreRequest);
    public function updatePost($postId, PostUpdateRequest $postUpdateRequest);
    public function deletePost($postId);
}
