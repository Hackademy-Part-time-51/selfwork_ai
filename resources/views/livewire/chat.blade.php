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
      <div class="container">
        <div class="row">
            @foreach ($messages as $message)
                @if($message['role'] == 'user')
                <div class="row mt-2">
                    <div class="col-4">
                        <div class="alert alert-primary" role="alert">
                            {{$message['content']}}
                        </div>
                    </div>
                    <col-8>
                    </col-8>
                </div>
                @endif

                @if($message['role'] == 'assistant')
                <div class="row mt-2">
                    <col-8>
                    </col-8>
                    <div class="col-4 ">
                        <div class="alert alert-info" role="alert">
                            {{$message['content']}}
                        </div>
                </div>
                </div>
                
                @endif
            @endforeach
        </div>
      </div>
</div>
