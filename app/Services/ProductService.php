<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
	public static function store($name,$description,$price,$quantity,$image)
	{
		$uuid = md5(rand().$name);
		// $file_path = $image->storeAs('uploads'.DIRECTORY_SEPARATOR.$uuid,$image->getCLientOriginalName());
		$file = $image;           
		$ext = $image->extension();
		$filename = $file->storeAs('/uploads/', $uuid.'/' . $image->getCLientOriginalName(),['disk' => 'public_uploads']);
		$product = new Product();
		$product->name = $name;
		$product->description = $description;
		$product->price = $price;
		$product->quantity = $quantity;
		$product->uuid = $uuid;
		$product->image_name = $image->getCLientOriginalName();
		$product->save();

		return $product;
	}
}
?>