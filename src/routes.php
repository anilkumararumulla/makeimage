<?php

Route::get('/make/image/{image}',function($image){
	$image = str_replace(':', '/', $image);
	return Image::make(storage_path().'/'.$image)->response();
});