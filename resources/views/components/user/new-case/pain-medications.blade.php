@foreach ($medications as $med)
    <div class="mb-3">
        <label class="form-check form-check-custom">
            <input class="form-check-input h-20px w-20px" name="pain_medication" type="checkbox" value="{{$med}}"/>
            <span class="form-check-label fw-bold">
            {{$med}}
            </span>
        </label>
    </div>
@endforeach