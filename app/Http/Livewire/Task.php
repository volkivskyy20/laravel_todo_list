<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\registers;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Task extends Component
{
    use WithPagination;
    public $task;
    public $hiddenId;
    // public $alldata =[];
    protected $rules = [
        'task' =>'required|min:3|max:30'
    ];

    public function submit(){

        $validateData = $this ->validate();
        $updateId = $this->hiddenId;
        if($updateId>0){
            $updateArray = array(
                'task'=>$validateData['task']
            );
            DB::table('registers')->where('id',$updateId)->update($updateArray);
        }else{
            registers::create($validateData);
        }

        session()->flash('success','Form is submitted');
    }
    public function addForm(){

        $this->task = '';
        $this->hiddenID= '';

    }

    public function editForm($id)
    {
        $singleData = registers::find($id);
        $this->hiddenId= $singleData->id;
        $this->task = $singleData ->task;

    }


    public function deleteForm($id){
        DB::table('registers')->where('id',$id)->delete();
        session()->flash('success','Record deleted');
    }



    public function render()
    {
        $alldata=registers::paginate(5);
        return view('livewire.task',['alldata'=>$alldata]);
    }
}
