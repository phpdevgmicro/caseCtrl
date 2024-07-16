<div class="menu-item">
    <div class="menu-content pb-2">
        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Sections</span>
    </div>
</div>
@foreach ($sections as $section)
    <div class="menu-item">
        <a href="#{{$section['id']}}" data-kt-scroll-toggle="true" class="menu-link text-gray-400" >
            <span class="menu-icon">{!! $section['icon'] !!}</span>
            <span class="fw-bold">{{$section['title']}}</span>
        </a>
    </div>
@endforeach