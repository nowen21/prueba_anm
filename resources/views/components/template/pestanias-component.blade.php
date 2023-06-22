<div>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"> 
        @foreach($pestanix as $pestania)
            @canany([$pestania['permisox']])
                <li class="nav-item " role="presentation">
                    <a href="{{route($pestania['permisox'])}}"  class="nav-link {{$pestania['activexx']}} ">
                        <i class="{{$pestania['clasicon']}}"></i> {{$pestania['titupest']}}
                    </a>
                </li>
            @endcanany
        @endforeach
    </ul>
</div>