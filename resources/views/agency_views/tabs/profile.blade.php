<div class="tab-pane active" id="btabs-static-profile" role="tabpanel">
    <table class="table table-striped table-borderless table-vcenter">
        <thead class="border-bottom">
        <tr>
            <th colspan="2" class="bg-primary-dark text-white">@lang('generics.personal_information')</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td width="50%">
                <a class="font-size-h6 font-w600">@lang('generics.name')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->user->name }}</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.user')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->user->nick_name }}</div>
            </td>
        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.email')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->user->email }}</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.phone')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->user->phone }}</div>
            </td>
        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.document_type')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->document  }}</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.document_number')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->document_number  }}</div>
            </td>
        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.gender')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->gender }}</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.nationality')</a>
                <div class="font-size-sm text-muted ">{{ $offeror->country->name}}</div>
            </td>
        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.birthday')</a>
                <div class="font-size-sm text-muted ">{{ $offeror->birthday }}</div>
            </td>
            <td colspan="2">
                <a class="font-size-h6 font-w600">@lang('generics.tags')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->tags }}</div>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- END Intro Category -->
    <table class="table table-striped table-borderless table-vcenter push">
        <thead class="border-bottom">
        <tr>
            <th colspan="2" class="bg-primary-dark text-white">@lang('generics.location')</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td width="50%">
                <a class="font-size-h6 font-w600">@lang('generics.country')</a>
                <div class="font-size-sm text-muted mt-1">{{$offeror->country->name }}</div>
            </td>
            <td width="50%">
                <a class="font-size-h6 font-w600">@lang('generics.city')</a>
                <div class="font-size-sm text-muted mt-1">{{$offeror->city->name }}</div>
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
                <a class="font-size-h6 font-w600">@lang('generics.ethnicity')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->ethnicity }}</div>
            </td>
            <td width="50%">
                <a class="font-size-h6 font-w600">@lang('generics.skin_color')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->skin_color }}</div>
            </td>
        </tr>
        <tr>
            <td width="50%">
                <a class="font-size-h6 font-w600">@lang('generics.eyes')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->eyes_color }}</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.hair_color')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->hair_color }}</div>
            </td>
        </tr>

        <tr>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.hair_length')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->hair_length }}</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.contexture')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->contexture }}</div>
            </td>
        </tr>

        <tr>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.tatoos')</a>
                <div class="font-size-sm text-muted mt-1">@if( $offeror->tatoos == 1) @lang('generics.yes') @else @lang('generics.no')  @endif</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.piercings')</a>
                <div class="font-size-sm text-muted mt-1">@if( $offeror->piercings == 1) @lang('generics.yes') @else @lang('generics.no')  @endif</div>
            </td>
        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.style')</a>
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
                <a class="font-size-h6 font-w600">@lang('generics.height')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->height }} cm</div>
            </td>
            <td width="50%">
                <a class="font-size-h6 font-w600">@lang('generics.weight')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->weight}} kg</div>
            </td>
        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.bust')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->bust_measurement }} cm</div>
            </td>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.waist')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->waist_measurement }} cm</div>
            </td>
        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.hip')</a>
                <div class="font-size-sm text-muted mt-1">{{  $offeror->hip_measurement }} cm</div>
            </td>
            <td>

            </td>
        </tr>
        </tbody>
    </table>
    <table class="table table-striped table-borderless table-vcenter push">
        <thead class="border-bottom">
        <tr>
            <th colspan="2" class="bg-primary-dark text-white">@lang('generics.others')</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.description')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->description }}</div>
            </td>
        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.level')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->level }}</div>
            </td>
        </tr>
        <tr>
            <td>
                <a class="font-size-h6 font-w600">@lang('generics.agency')</a>
                <div class="font-size-sm text-muted mt-1">{{ $offeror->agency }}</div>
            </td>
        </tr>
        </tbody>
    </table>


    <div class="col-md-12 ml-auto align-content-center text-center" style="padding: 1% 0;">
        <a href="{{route('offerors.index')}}">
            <button type="button" class="btn btn-secondary btn-sm">
                @lang('generics.cancel')
            </button>
        </a>
        <a href="{{route('offerors.edit',$offeror) }}">
            <button type="button" class="btn btn-smirrow btn-sm">
                @lang('generics.edit')
            </button>
        </a>
    </div>

</div>
