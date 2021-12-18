@if($serviceRequest->state==RequestState::REFUSED)
    100%
    <span class="badge badge-pill badge-danger"> @lang('generics.refuse')</span>
@elseif($serviceRequest->state==RequestState::ACCEPTED)
    50%
    <span class="badge badge-pill badge-warning"> @lang('generics.accepted')</span>
@elseif($serviceRequest->state==RequestState::PROCESSING_PAYMENT)
    60%
    <span class="badge badge-pill badge-warning"> @lang('generics.processing_payment')</span>
@elseif($serviceRequest->state==RequestState::PAID)
    70%
    <span class="badge badge-pill badge-warning"> @lang('generics.paid')</span>
@elseif($serviceRequest->state==RequestState::EXECUTED)
    90%
    <span class="badge badge-pill badge-success"> @lang('generics.realized')</span>
@elseif($serviceRequest->state==RequestState::COMPLETED)
    100%
    <span class="badge badge-pill badge-success"> @lang('generics.complete')</span>
@elseif($serviceRequest->state==RequestState::PENDING)
    25%
    <span class="badge badge-pill badge-warning"> @lang('generics.pending')</span>
@endif
