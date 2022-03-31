<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

use App\Models\Manufacturer;
use App\Models\Uzer;
use App\Models\Purchase;



function getManufactuers() {
    $retVal = array();
    $manufactuers = Manufacturer::where('id' ,'>' ,0)->get();
    foreach($manufactuers as $manufactuer) {
        $retVal[strval($manufactuer["id"])] = strval($manufactuer["name"]);
    }
    return $retVal;
}
function getUzers() {
    $retVal = array();
    $uzers = Uzer::where('id' ,'>' ,0)->get();
    foreach($uzers as $uzer) {
        $retVal[strval($uzer["id"])] = strval($uzer["name"]);
    }
    return $retVal;
}
function getPurchases() {
    $retVal = array();
    $purchases = Purchase::where('id' ,'>' ,0)->get();
    foreach($purchases as $purchase) {
        $retVal[strval($purchase["id"])] = strval($purchase["ivoice"]);
    }
    return $retVal;
}
class EquipmentForm extends Form
{
    public function buildForm()
    {
        $this->add('name', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Name'
        ])
        ->add('price', Field::NUMBER, [
            'rules' => 'required',
            'label' => 'Price'
        ])
        ->add('ghz', Field::TEXT, [
            'rules' => 'required',
            'label' => 'GHz'
        ])
        ->add('ram', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Ram'
        ])
        ->add('category', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Category'
        ])
        ->add('manufacturer_id', Field::SELECT, [
            'rules' => 'required',
            'label' => 'Manufacturer',
            'choices' => getManufactuers(),
            'empty_value' => '=== Select Manufacturer ==='
        ])
        ->add('uzer_id', Field::SELECT, [
            'rules' => 'required',
            'label' => 'Manufacturer',
            'choices' => getUzers(),
            'empty_value' => '=== Select Manufacturer ==='
        ])
        ->add('purchase_', Field::SELECT, [
            'rules' => 'required',
            'label' => 'Manufacturer',
            'choices' => getPurchases(),
            'empty_value' => '=== Select Manufacturer ==='
        ])
        ->add('submit', 'submit',[
            'label' => 'Submit'
        ]);
    }
}