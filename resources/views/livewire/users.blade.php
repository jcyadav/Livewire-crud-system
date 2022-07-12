<div>
   @include('livewire.create')
   @include('livewire.update')
 @if(session()->has('message'))
 <div class="alert alert-success" style="margin-top:30px;">
{{session('message')}}
 </div>
 @endif

 <table class="table table-bordered mt-5 text-center">
   <thead>
   <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Edit</th>
      <th>Delete</th>
   </tr>
   </thead>
   <tbody>
   @foreach($users as $value)
   <tr>
<td>{{ $value->id }}</td>
<td>{{ $value->name }}</td>
<td>{{ $value->email }}</td>
<td>{{ $value->password }}</td>
<td><button type="button" wire:click="edit({{ $value->id }})" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal" data-bs-whatever="@mdo" wire:click.pravent="">Edit</button>
</td>
<td><button type="button" wire:click="delete({{ $value->id }})" class="btn btn-danger" wire:click.pravent="">Delete</button></td>
@endforeach
   </tr>   
   </tbody>
 </table>
</div>
