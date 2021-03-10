<?php


class Cart
{
    private $userID;
    private $items = array(); //Associative array (productID => qty) //Only hold itemID and its associated qty
    private $subTotals = array(); //Associative array (productID => total item cost)
    private $cartTotal;

    public function __construct($p_userID) {
        $this->userID = $p_userID;
        $this->items = array();
        $this->subTotals = array();
        $this->cartTotal = 0;
    }


    // Add a single item to the cart
    // If an exiting item is added, will increment existing by 1
    public function addItemToCart($p_IemID) {

        if(array_key_exists($p_IemID, $this->items)){
            //item is in the cart, add 1
            $this->items[$p_IemID] += 1;
        } else {
            //not in cart, add 1 of the item to the cart
            $this->items = $this->items + array($p_IemID => 1);
        }

    }

    // Update cart QTY
    function updateQTY($p_itemID, $newQty) {
        if(array_key_exists($p_itemID, $this->items)) {
            $this->items[$p_itemID] = $newQty;
        } else {
            $this->items = $this->items + array($p_itemID => $newQty);
        }

        //If qty drops to 0, remote the item
        if($this->items[$p_itemID] == 0) {
            unset($this->items[$p_itemID]);
        }
    }

    //calculate the cart total
    // https://www.youtube.com/watch?v=LURRPjmQDmQ&list=PLhPyEFL5u-i2n4P6PVquXHPbuRDssZFAt&index=76
    // absolutely shitty video with no explanation, just here code copy and paste
    public function calculateCartTotal() {
        $subTotalsArray = [];

        //$productAccess will be an instance of the ProductDataAccess
        foreach ($this->items as $item=>$qty) {
            //$product = $productAccess->findByID($item);
            //$subTotalsArray = $product->getPrice)_ * $qty;
            //$subTotalsArray = $subTotalsArray + array($item => $pro);
        }

        $this->subTotals = $subTotalsArray;

    }

    // GETTERS & SETTERS
    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param mixed $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getSubTotals()
    {
        return $this->subTotals;
    }

    /**
     * @param array $subTotals
     */
    public function setSubTotals($subTotals)
    {
        $this->subTotals = $subTotals;
    }

    /**
     * @return int
     */
    public function getCartTotal()
    {
        return $this->cartTotal;
    }

    /**
     * @param int $cartTotal
     */
    public function setCartTotal($cartTotal)
    {
        $this->cartTotal = $cartTotal;
    }

}