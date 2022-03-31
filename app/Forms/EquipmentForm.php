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
        $retVal[strval($purchase["id"])] = strval($purchase["invoice"]);
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
        ->add('processor', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Processor'
        ])
        ->add('ram', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Ram'
        ])
        ->add('type', Field::TEXT, [
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
            'label' => 'Assigned User',
            'choices' => getUzers(),
            'empty_value' => '=== Select Manufacturer ==='
        ])
        ->add('purchase_id', Field::SELECT, [
            'rules' => 'required',
            'label' => 'Invoice Number',
            'choices' => getPurchases(),
            'empty_value' => '=== Select Manufacturer ==='
        ])
        ->add('submit', 'submit',[
            'label' => 'Submit'
        ]);
    }
}