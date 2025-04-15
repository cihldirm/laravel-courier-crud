<?php

namespace App\Http\Livewire;

use App\Models\Couriers;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\This;

class CouriersComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $level, $registered_date, $courier_edit_id, $courier_delete_id;

    public $view_courier_name, $view_courier_level, $view_courier_registered_date;

    //Input fields on update validation
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required|string|min:3',
            'level' => 'required|numeric|min:1|max:5',
            'registered_date' => 'required|date',
        ]);
    }


    public function storeCourierData()
    {
        //on form submit validation
        $this->validate([
            'name' => 'required|string|min:3',
            'level' => 'required|numeric|min:1|max:5',
            'registered_date' => 'required|date',
        ]);

        //Add Courier Data
        $courier = new Couriers();
        $courier->name = $this->name;
        $courier->level = $this->level;
        $courier->registered_date = $this->registered_date;

        $courier->save();

        session()->flash('message', 'New courier has been added successfully');

        $this->name = '';
        $this->level = '';
        $this->registered_date = '';

        //For hide modal after add courier success
        $this->dispatchBrowserEvent('close-modal');
    }

    public function resetInputs()
    {
        $this->name = '';
        $this->level = '';
        $this->registered_date = '';
        $this->courier_edit_id = '';
    }

    public function close()
    {
        $this->resetInputs();
    }

    public function editCouriers($id)
    {
        $courier = Couriers::where('id', $id)->first();

        $this->courier_edit_id = $courier->id;
        $this->name = $courier->name;
        $this->level = $courier->level;
        $this->registered_date = $courier->registered_date;

        $this->dispatchBrowserEvent('show-edit-courier-modal');
    }
    
    public function editCourierData()
    {
        //on form submit validation
        $this->validate([
            'name' => 'required|string|min:3',
            'level' => 'required|numeric|min:1|max:5',
            'registered_date' => 'required|date',
        ]);

        $courier = Couriers::where('id', $this->courier_edit_id)->first();
        $courier->name = $this->name;
        $courier->level = $this->level;
        $courier->registered_date = $this->registered_date;

        $courier->save();

        session()->flash('message', 'Courier has been updated successfully');

        //For hide modal after add courier success
        $this->dispatchBrowserEvent('close-modal');
    }

    //Delete Confirmation
    public function deleteConfirmation($id)
    {
        $this->courier_delete_id = $id; //courier id

        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    public function deleteCourierData()
    {
        $courier = Couriers::where('id', $this->courier_delete_id)->first();
        $courier->delete();

        session()->flash('message', 'Courier has been deleted successfully');

        $this->dispatchBrowserEvent('close-modal');

        $this->courier_delete_id = '';
    }

    public function cancel()
    {
        $this->courier_delete_id = '';
    }

    public function viewCourierDetails($id)
    {
        $courier = Couriers::where('id', $id)->first();

        $this->view_courier_name = $courier->name;
        $this->view_courier_level = $courier->level;
        $this->view_courier_registered_date = $courier->registered_date;

        $this->dispatchBrowserEvent('show-view-courier-modal');
    }

    public function closeViewCourierModal()
    {
        $this->view_courier_name = '';
        $this->view_courier_level = '';
        $this->view_courier_registered_date = '';
    }

    public function render()
    {
        //order all couriers by name
        $couriers = Couriers::orderBy('name','ASC')->paginate(3);

        return view('livewire.couriers-component', ['couriers'=>$couriers])->layout('livewire.layouts.base');
    }
}
