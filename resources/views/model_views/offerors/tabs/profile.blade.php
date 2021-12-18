<div class="tab-pane" id="btabs-static-profile" role="tabpanel">
    <table class="table table-striped table-borderless table-vcenter push">
        <tbody>
        <tr>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.level')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->level }}</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.gender')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->gender }}</div>
            </td>

        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.at_home')</a>
                <div class="font-size-sm text-muted mt-1">
                    @if ($offeror->at_home == 'NOT') No @else Si @endif
                </div>
            </td>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.have_place')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->have_place }}</div>
            </td>

        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.receive_services')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->receive_services }}</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.zones')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->zones }}</div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a class="font-size-h6 font-w600" >@lang('generics.description')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->description }}</div>
            </td>
        </tr>
        </tbody>
    </table>



    <table class="table table-striped table-borderless table-vcenter push">
        <thead class="border-bottom">
        <tr>
            <th colspan="2" class="bg-primary-dark text-white">@lang('generics.appearance')</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.ethnicity')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->ethnicity }}</div>
            </td>
            <td width="50%">
                <a class="font-size-h6 font-w600" >@lang('generics.skin_color')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->skin_color }}</div>
            </td>
        </tr>
        <tr>
            <td width="50%">
                <a class="font-size-h6 font-w600" >@lang('generics.eyes')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->eyes_color }}</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.hair_color')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->hair_color }}</div>
            </td>
        </tr>

        <tr>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.hair_length')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->hair_length }}</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.contexture')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->contexture }}</div>
            </td>
        </tr>

        <tr>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.tatoos')</a>
                <div class="font-size-sm text-muted mt-1">@if( $offeror->tatoos == 1) @lang('generics.yes') @else @lang('generics.no')  @endif</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.piercings')</a>
                <div class="font-size-sm text-muted mt-1">@if( $offeror->piercings == 1) @lang('generics.yes') @else @lang('generics.no')  @endif</div>
            </td>
        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.style')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->style }}</div>
            </td>
            <td>

            </td>
        </tr>
        </tbody>
    </table>

    <table class="table table-striped table-borderless table-vcenter push">
        <thead class="border-bottom">
        <tr>
            <th colspan="2" class="bg-primary-dark text-white">@lang('generics.measurements')</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td width="50%">
                <a class="font-size-h6 font-w600" >@lang('generics.height')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->height }} cm</div>
            </td>
            <td width="50%">
                <a class="font-size-h6 font-w600" >@lang('generics.weight')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->weight}} kg</div>
            </td>
        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.bust')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->bust_measurement }} cm</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.waist')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->waist_measurement }} cm</div>
            </td>
        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.hip')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->hip_measurement }} cm</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600" >@lang('generics.languajes')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->languajes    }} </div>
            </td>
        </tr>
        </tbody>
    </table>



</div>
