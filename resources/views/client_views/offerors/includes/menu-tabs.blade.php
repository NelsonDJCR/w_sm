<ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
    @foreach($tabs as $tab => $detail)
        <li class="nav-item">
            <a class="nav-link" href="#btabs-static-{{$tab}}"><i class="{{$detail['icon']}} mr-1"></i> {{$detail['name']}}</a>
        </li>
    @endforeach
</ul>