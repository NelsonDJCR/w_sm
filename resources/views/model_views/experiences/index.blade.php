@extends('layouts.offerors')

@section('js_after')
    <script src="{{ asset('js/plugins/es6-promise/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script>
        $(document).on('click', ".confirm-submit", function (e) {
            e.preventDefault();
            e.stopPropagation();
            let form = $(this).parents('form');
            Swal.fire({
                title: '¿Seguro/a que desea eliminarlo?',
                text: "Esta acción no se podra revertir.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Eliminando',
                        'Su registro se eliminará',
                        'success'
                    );
                    form.submit();
                }
            })
        });
    </script>
@endsection()

@section('content')

    <!-- Page Content -->
    <div class="content">

        @if(!(auth()->user()->offeror->getQuantityExperience()>0))
            <div class="alert alert-dark alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="alert-heading font-w300 my-2">@lang('messages.experiences_help')</h3>
                <p class="mb-0">@lang('messages.experiences_complete')</p>
            </div>
        @endif



        <div class="block-header block-header-default">
            <h3 class="block-title">@lang('generics.experience')</h3>
            <div class="block-options">
                <a class="btn btn-smirrow" href="{{route('experiences.createExperience', $offeror->id)}}">@lang('generics.add') <i class="fa fa-plus"></i></a>
            </div>
        </div>


            <!-- Your Block -->
            <table class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr>
                    <th class="d-none d-sm-table-cell">@lang('generics.event')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.description')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.date')</th>
                    <th class="text-center" style="width: 100px;">@lang('generics.actions')</th>
                </tr>
            </thead>

            <tbody>
                @foreach($offeror->experience as $experience)
                    <tr>
                        <th class="font-w600 font-size-sm">
                            {{$experience->title}}
                        </th>

                        <td class="font-w600 font-size-sm">
                            {{$experience->description}}
                        </td>

                        <td class="font-w600 font-size-sm">
                            {{$experience->date}}
                        </td>

                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{route('experiences.edit', $experience)}}">
                                    <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                </a>

                                {!! Form::open(['route'=>['experiences.destroy', $experience], 'method'=>'DELETE', 'role' => 'form']) !!}
                                    <button type="button" class="btn btn-sm btn-light confirm-submit" data-toggle="tooltip" title="Remove ">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
