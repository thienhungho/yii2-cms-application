<?php

return [
    'sitemap_index.xml' => 'seo/site-map',
    'sitemap/main-sitemap.xml' => 'seo/site-map/main-site-map',
    'sitemap/<content_type:>-sitemap-<number:>.xml' => 'seo/site-map/child-site-map',
    'content/<type:>/<slug:>.html' => 'post/post/view',
    'content/<type:>' => 'post/post/index',
    'content/<post_type:>/<term_type:>/<slug:>.html' => 'post/post/term',
    'shop/<product_type_slug:>/<product_slug:>.html' => 'product/product/view',
    'shop/<product_type_slug:>' => 'product/product/index',
    'shop/<product_type:>/<term_type:>/<slug:>.html' => 'product/product/term',
    'comment/create' => 'comment/comment/create',
];