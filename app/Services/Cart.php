<?php 



class Cart {

	public function remove($id)
	{
		Session::forget("cart.product_{$id}");
		$this->totalSum();
	}
	public function setQty($id, $qty)
	{
		Session::put("cart.product_{id}.qty", $qty);
		$this->totalSum();
	}
}