<?php

return function ($site) {

  $query   = get('q');
  // $pages = $site->index();
  $results = $site->search($query, 'title|text');

  return [
    'query'   => $query,
    'results' => $results,
  ];

};