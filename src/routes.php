<?php

Route::get('/make/image/{image}',function($image){
	return Image::make(storage_path().'/'.$image)->response();
});