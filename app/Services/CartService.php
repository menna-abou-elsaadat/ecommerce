<?php

namespace App\Services;

use App\Models\User;
use Hash;
use App\Models\Cart;
use App\Models\CartProduct;

class CartService
{
	public static function addProduct($product,$quantity,$user)
	{
		$current_cart = $user->CurrentCart->first();
		if (!$current_cart) {
			$current_cart = self::createCart($user->id);	
		}

		$cart_product = $current_cart->products()->where('product_id',$product->id)->first();
		if (!$cart_product) {

			$cart_product = self::createCartProduct($current_cart->id,$product->id,$quantity);
		}
		else
		{
			$quantity = $quantity + $cart_product->quantity;
			$cart_product = self::updateCartProduct($cart_product,$quantity);
		}

		return $cart_product;

	}

	public static function createCart($user_id)
	{
		$cart = new Cart;
		$cart->user_id = $user_id;
		$cart->save();

		return $cart;
	}

	public static function createCartProduct($cart_id,$product_id,$quantity)
	{
		$cart_product = new CartProduct();
		$cart_product->cart_id = $cart_id;
		$cart_product->product_id = $product_id;
		$cart_product->quantity = $quantity;
		$cart_product->save();

		return $cart_product;
	}

	public static function updateCartProduct($cart_product,$quantity)
	{
		if ($quantity <=0) {
			$cart_product->delete();
			return;
		}
		$cart_product->quantity = $quantity;
		$cart_product->save();
		return $cart_product;
	}


}
?>