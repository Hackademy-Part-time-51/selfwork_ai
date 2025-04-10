<div>
    <form wire:submit.prevent="ask">
        <div class="container">
            <div class="row promptR">
                <div class="col-8 ">
                    <div class="input-group mb-3">
                        <input wire:model="prompt" type="text" class="form-control p-0"
                            placeholder="Dimmi ciò che vuoi :)">
                        <button class="btn btn-outline-secondary" type="submit">Chiedi</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="container">
        <div class="row mt-3 chatRow">

            @foreach ($messages as $message)
                @if ($message['role'] == 'user')
                    <div class="row userMsgRow mt-2">
                        <div class="col-2"></div>
                        <div class="col-8 userMsg text-end">
                            <div>
                                {{ $message['content'] }}
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                @endif

                @if ($message['role'] == 'assistant')
                    <div class="row IAmsgRow mt-2">
                        <div class="col-2"></div>
                        <div class="col-8 IAmsg text-start">
                            <div>
                                {{ $message['content'] }}

                            </div>
                            <div class="col-2"></div>
                        </div>
                @endif
            @endforeach
        </div>
    </div>
