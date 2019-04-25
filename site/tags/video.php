<?php

// date tag
kirbytext::$tags['video'] = array(
    'attr' => array(
      'width',
      'height',
      'class',
    ),
    'html' => function($tag) {

      $url     = $tag->attr('video');
      $file    = $tag->file($url);

      // use the file url if available and otherwise the given url
      $url = $file ? $file->url() : url($url);

      $outStr = '<center><video autoplay loop muted playsinline ';
	  
	  if($width = $tag->attr('width')) $outStr .= ' width="' .$width . '"';
	  if($height = $tag->attr('height')) $outStr .= ' height="' .$height . '"';
	  if($class = $tag->attr('class')) $outStr .= ' class="' .$class . '"';	  
      $outStr .= '><source src="' . $url . '" type="video/mp4" /></video></center>';
	  
	  return $outStr;

    }
);

