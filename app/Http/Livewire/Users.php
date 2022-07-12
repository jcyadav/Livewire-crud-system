<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
  public $user_id, $name,$email,$password,$users;
  public $updatemode = false;
    public function render()
    {
      $this->users = user::all();
        return view('livewire.users');
    }
    public function resetInputFields()
    {
      $this->name='';
      $this->email='';
      $this->password='';
    }
    public function store()
    {
      $validateData = $this->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required',
      ]);  
          User::create($validateData);
          session()->flash('message','User Updated Successfully');
$this->resetInputFields();
        $this->emit('userStore');
    }

    public function edit($id)
    {
      $this->updatemode = true;
$user =  user::where('id',$id)->first();
$this->user_id = $user->id;
$this->name = $user->name;
$this->email = $user->email;
$this->password = $user->password;
    }
    public function cancel()
    {
      $this->resetInputFields();
      
    }
    public function update()
    {
      $validateData = $this->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required'
      ]);
    if($this->user_id){
$user = User::find($this->user_id);
$user->update([
  'name'=>$this->name,
  'email'=>$this->email,
  'password'=>$this->password
]);
$this->updateMode = false;
session()->flash('message','User! Updated Successfully');
$this->resetInputFields();
$this->emit('userStore');
}
    }
    public function delete($id)
    {
if($id)
{
  User::where('id',$id)->delete();
  session()->flash('message','User! Deleted Successfully');
}
    }
  }
