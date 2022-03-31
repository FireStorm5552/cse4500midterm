<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

use App\Models\Equipment;

function getEquipment() {
    $retVal = array();
    $equipments = Equipment::where('id' ,'>' ,0)->get();
    foreach($equipments as $equipment) {
        $retVal[strval($equipment["id"])] = strval($equipment["name"]);
    }
    return $retVal;
}
class NotesForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('equipment_id', Field::SELECT, [
            'rules' => 'required',
            'label' => 'Assigned User',
            'choices' => getEquipment(),
            'empty_value' => '=== Select Equipment ==='
        ])
            ->add('services', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Service'
            ])
            ->add('software', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Software'
            ])
            ->add('notes', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Notes'
            ])
            ->add('submit', 'submit',[
                'label' => 'Submit'
            ]);
    }
}