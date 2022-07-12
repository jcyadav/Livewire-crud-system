<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="btn-close" wire:click.pravent="cancel()" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <input type="hidden" wire:model="user_id">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" wire:model="name"> 
            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror 
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Email:</label>
            <input type="email" class="form-control" wire:model="email">
            @error('email') <span class="text-danger error">{{ $message }}</span>@enderror 
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="password" class="form-control" wire:model="password">
            @error('password') <span class="text-danger error">{{ $message }}</span>@enderror 
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" wire:click.pravent="cancel()" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="updateModal" wire:click.prevent="update()">Update User</button>
      </div>
    </div>
  </div>
</div>