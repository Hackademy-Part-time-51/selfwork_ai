<div>
    <form wire:submit="ask">
        <div class="container">
        <div class="row">
            <div class="col-8">
                <input wire:model="prompt" type="text" class="form-control" placeholder="chiedimi quello che vuoi">
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary">cerca</button>
            </div>
        </div>
        
        </div>
      </form>
</div>
