<ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
    @foreach($tabs as $tab => $detail)
        <li class="nav-item">
            <a class="nav-link" href="#btabs-static-{{$tab}}">{{$detail['name']}}</a>
        </li>
    @endforeach

    <li class="nav-item ml-auto">
        <a class="nav-link" href="#btabs-static-settings">
            <i class="si si-settings"></i>
        </a>
    </li>
</ul>