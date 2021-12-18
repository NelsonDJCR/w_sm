<!--Change currency-->

<div class="modal fade " id="change-currency" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">{{__('generics.change_currency')}}</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">

                    <p>@lang('generics.text_currencies')</p>


                    <div class="row">
                        @foreach(Config::get('app.currencies') as $currency)
                            <a class="btn btn-light" href="{{route('setcurrency', $currency)}}">
                                <i class="flag-icon flag-icon-{{strtolower(substr($currency,0,2))}}"></i> {{$currency}}
                            </a>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>
