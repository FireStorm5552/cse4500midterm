<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;


class NotesForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('equipment_id', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'Equipment ID',
                'attr' => ['readonly' => 'true'],
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