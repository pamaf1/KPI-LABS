<?php namespace App\Http\Controllers\Admin;

use App\Models\Group;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class GroupCrudController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Group::class);
        $this->crud->setRoute(backpack_url('group'));
        $this->crud->setEntityNameStrings('group', 'Group');
    }

    public function setupListOperation()
    {

        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => "Група"
        ]);

        $this->crud->addColumn([
            'name' => 'department.short_name',
            'type' => 'text',
            'label' => 'Кафедра',
        ]);

        $this->crud->addColumn([
            'name' => 'course',
            'type' => 'text',
            'label' => "Курс"
        ]);
    }

    public function setupCreateOperation()
    {
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Група"
        ]);
        
        $this->crud->addField(
            [
                'name' => 'department_id',
                'label' => 'Кафедра',
                'type' => 'select',
                'entity' => 'department',
                'attributes' => [
                    'required' => true,
                ],
                'attribute' => 'name',
            ]
        );

        $this->crud->addField([
            'name' => 'course',
            'type' => 'text',
            'label' => "Курс"
        ]);
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}