<div class="tab-pane" id="btabs-static-ratings" role="tabpanel">
    <h2 class="font-w400">@lang('generics.ratings')</h2>
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-6 text-right" style="padding: 0 10%;">

                <h1 style="font-size: 5.25rem;margin-bottom: 0;">{{$offeror->getRating()}}</h1>

                @for($i=1; $i<=5; $i++)
                    @if($offeror->getRating() >= $i)
                        <i class="fa fa-fw fa-2x fa-star text-warning" style="width: 37px"></i>
                    @elseif((($i - $offeror->getRating()) <  1))
                        <i class="fa fa-fw fa-2x fa-star-half-alt text-warning" style="width: 37px"></i>
                    @else
                        <i class="fa fa-fw fa-2x fa-star text-muted" style="width: 37px"></i>
                    @endif
                @endfor

                <p style="margin-top: 10px;">@lang('generics.based_in') {{$offeror->getQuantityRating()}} @lang('generics.ratings').</p>
            </div>
            <div class="col-xl-12">
                <div>
                    <p style="display: inline-block;margin-bottom: 0.5rem;"><strong>5 @lang('generics.stars')</strong> </p>
                    <p style="display: inline-block;margin-bottom: 0.5rem;">({{ $offeror->getPercentage()[4] }}%)</p>
                    <div class="progress push" style="height: 10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $offeror->getPercentage()[4] }}%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div>
                    <p style="display: inline-block;margin-bottom: 0.5rem;"><strong>4 @lang('generics.stars')</strong> </p>
                    <p style="display: inline-block;margin-bottom: 0.5rem;">({{ $offeror->getPercentage()[3] }}%)</p>
                    <div class="progress push" style="height: 10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $offeror->getPercentage()[3] }}%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div>
                    <p style="display: inline-block;margin-bottom: 0.5rem;"><strong>3 @lang('generics.stars')</strong> </p>
                    <p style="display: inline-block;margin-bottom: 0.5rem;">({{ $offeror->getPercentage()[2] }}%)</p>
                    <div class="progress push" style="height: 10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $offeror->getPercentage()[2] }}%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div>
                    <p style="display: inline-block;margin-bottom: 0.5rem;"><strong>2 @lang('generics.stars')</strong> </p>
                    <p style="display: inline-block;margin-bottom: 0.5rem;">({{ $offeror->getPercentage()[1] }}%)</p>
                    <div class="progress push" style="height: 10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $offeror->getPercentage()[1] }}%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div>
                    <p style="display: inline-block;margin-bottom: 0.5rem;"><strong>1 @lang('generics.star')</strong> </p>
                    <p style="display: inline-block;margin-bottom: 0.5rem;">({{ $offeror->getPercentage()[0] }}%)</p>
                    <div class="progress push" style="height: 10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $offeror->getPercentage()[0] }}%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            @php($comments = $offeror->getComments())
            <h3>@lang('generics.comments')</h3>
            <div style="padding:0 5%">
                @foreach($comments as $comment)
                    <div class="row" style="padding-bottom: 5%;">
                        <div class="col-xl-3 ">
                            <h5 style="margin-bottom: 0.5rem;"> XXXXX - XXXXX </h5>
                            <p style="margin-bottom: 0.3rem;">{{ $comment->created_at->toDateString()  }}</p>
                        </div>
                        <div class="col-xl-9">
                            @for($i=1; $i<=5; $i++)
                                @if($comment->rating >= $i)
                                    <i class="fa fa-fw fa-1x fa-star text-warning"></i>
                                @else
                                    <i class="fa fa-fw fa-1x fa-star text-muted"></i>
                                @endif
                            @endfor
                            <p style="margin-bottom: 1rem;">{{ $comment->comments }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>