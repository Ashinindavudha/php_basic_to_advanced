<?php

class Customer {
	public $name;
	public $phone;
	public $phone_type;


	public function getAttributeName($name) {
		return ucfirst($name);
	}

	public function getPhoneTypeAttribute($phone_type)
    {
        switch ($phone_type) {
            case 1: 
                return "home phone";
                break;
            case 2: 
                return "cell phone";
                break;
            case 3: 
                return "work phone";
                break;
            default: 
                throw new Exception("shit!");
        }
    }
}

$customers = Customer::getPhoneTypeAttribute();
echo $customers->phone_type;