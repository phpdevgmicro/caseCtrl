@foreach ($antibiotics as $anti)
    <div class="mb-3">
        <label class="form-check form-check-custom">
            <input class="form-check-input h-20px w-20px" wire:model="antibiotics" type="checkbox" value="{{$anti}}"/>
            <span class="form-check-label fw-bold">
            {{$anti}}
            </span>
        </label>
    </div>
@endforeach