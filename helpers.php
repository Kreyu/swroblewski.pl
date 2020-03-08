<?php

use TightenCo\Jigsaw\Collection\CollectionItem;
use TightenCo\Jigsaw\PageVariable;

return [
    'allTags' => function (CollectionItem $page, PageVariable $posts) {
        return $posts->pluck('tags')->flatten()->unique();
    },
    'getPostsWithTag' => function (CollectionItem $page, PageVariable $posts, string $tag) {
        return $posts->filter(function ($post) use ($tag) {
            return collect($post->tags)->contains($tag);
        });
    },
];
