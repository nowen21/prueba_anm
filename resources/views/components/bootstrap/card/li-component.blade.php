<div>
    <li class="nav-item " role="presentation">
        <button class="nav-link {{$activexx}} " id="{{$liparame['targetxx']}}-tab" data-toggle="pill" data-target="#{{$liparame['targetxx']}}" type="button" role="tab" aria-controls="{{$liparame['targetxx']}}" aria-selected="true">
        <i class="{{$liparame['clasicon']}}"></i> 
        {{$slot}}
        </button>
    </li>
</div>