@foreach ($anesthesia as $anes)
    <div class="mb-3">
        <label class="form-check form-check-custom">
            <input class="form-check-input h-20px w-20px" name="antibiotics" type="checkbox" value="{{$anes}}"/>
            <span class="form-check-label fw-bold">
            {{$anes}}
            </span>
        </label>
    </div>
@endforeach