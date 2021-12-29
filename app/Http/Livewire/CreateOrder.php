<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\District;
use App\Models\Info\CityAttr;
use App\Models\Info\DistrictAttr;
use App\Models\Info\OrderAttr;
use Livewire\Component;
use App\Models\Department;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;

class CreateOrder extends Component
{
    public $shipping_type = 1;
    public $contact, $phone, $address, $references, $shipping_cost = 0;
    public $departments, $cities = [], $districts = [];
    public $department_id = "", $city_id = "", $district_id = "";

    public $rules = [
        OrderAttr::CONTACT => 'required',
        OrderAttr::PHONE => 'required',
        OrderAttr::SHIPPING_TYPE => 'required',
    ];

    public function mount()
    {
        $this->departments = Department::all();
    }

    public function updatedShippingType($value)
    {
        if ($value == 1){
            $this->resetValidation([
                OrderAttr::DEPARTMENT_ID, OrderAttr::CITY_ID, OrderAttr::DISTRICT_ID, OrderAttr::ADDRESS, OrderAttr::REFERENCES
            ]);
        }
    }

    public function updatedDepartmentId($value){
        $this->cities = City::where(CityAttr::DEPARTMENT_ID, $value)->get();
        $this->reset(['city_id', 'district_id']);
    }

    public function updatedCityId($value){
        $city = City::find($value);
        $this->shipping_cost = $city->cost;
        $this->districts = District::where(DistrictAttr::CITY_ID, $value)->get();
        $this->reset('district_id');
    }

    public function create_order()
    {
        $rules = $this->rules;

        if ($this->shipping_type === 2) {
            $rules[OrderAttr::DEPARTMENT_ID] = 'required';
            $rules[OrderAttr::CITY_ID] = 'required';
            $rules[OrderAttr::DISTRICT_ID] = 'required';
            $rules[OrderAttr::ADDRESS] = 'required';
            $rules[OrderAttr::REFERENCES] = 'required';
        }

        $this->validate($rules);

        $order = new Order();
        $order[OrderAttr::USER_ID] = auth()->user()->id;
        $order[OrderAttr::CONTACT] = $this->contact;
        $order[OrderAttr::PHONE] = $this->phone;
        $order[OrderAttr::SHIPPING_TYPE] = $this->shipping_type;
        $order[OrderAttr::SHIPPING_COST] = $this->shipping_cost;
        $order[OrderAttr::TOTAL] = $this->shipping_cost + Cart::subtotal();
        $order[OrderAttr::CONTENT] = Cart::content();

        if ($this->shipping_type == 2) {
            $order[OrderAttr::SHIPPING_COST] = $this->shipping_cost;
            $order[OrderAttr::DEPARTMENT_ID] = $this->department_id;
            $order[OrderAttr::CITY_ID] = $this->city_id;
            $order[OrderAttr::DISTRICT_ID] = $this->district_id;
            $order[OrderAttr::ADDRESS] = $this->address;
            $order[OrderAttr::REFERENCES] = $this->references;
        }

        $order->save();
//        foreach (Cart::content() as $item) {
//            discount($item);
//        }
        Cart::destroy();
        return redirect()->route('orders.payment', $order);
    }

    public function render()
    {
        return view('livewire.create-order');
    }
}
