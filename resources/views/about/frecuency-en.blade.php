@extends('layouts.simple')
{{-- @yield('css_before') --}}
@section('js_after')
    <script>
        $('.item-one').click(function() {
            $('.item-one').addClass('smirrow-active')
            $('.item-three, .item-two').removeClass('smirrow-active')
            $('.acordion_one').removeClass('d-none')
            $('.acordion_two,.acordion_three').addClass('d-none')
        });
        $('.item-two').click(function() {
            $('.item-one, .item-three').removeClass('smirrow-active')
            $('.item-two').addClass('smirrow-active')

            $('.acordion_two').removeClass('d-none')
            $('.acordion_one,.acordion_three').addClass('d-none')

        });
        $('.item-three').click(function() {
            $('.item-one,.item-two').removeClass('smirrow-active')
            $('.item-three').addClass('smirrow-active')
            $('.acordion_three').removeClass('d-none')
            $('.acordion_one,.acordion_two').addClass('d-none')
        });
    </script>
@endsection

@section('meta_description')@lang('messages.meta_description')@endsection
@section('title') Smirrow | Frecuency Questions @endsection
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/flag-icon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection
@section('css_before')

@endsection
@section('content')

    <div class="language" style="z-index: 900;
                                position: absolute;
                                right: 0;
                                padding: 20px;
                                cursor: pointer;
                                ">
        <div class="btn-group">
            <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="row">
                    <b style="color: white; font-size: 20px;" class="d-md-block d-none">
                        {{ strtoupper(substr(config('app.locale'), 0, 2)) }}
                    </b>
                    </b> &nbsp;<i style="color: white; font-size: 20px; margin-top: 5px;"
                        class="fas fa-globe-asia">&nbsp;&nbsp;&nbsp;</i>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('setlocale', 'es_CO') }}" class="dropdown-item" href="#"><img width="25px"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/200px-Flag_of_Colombia.svg.png"
                        alt=""> @lang('messages.spanish')</a></li>
                <a href="{{ route('setlocale', 'en') }}" class="dropdown-item" href="#"><img width="25px"
                        src="https://i.postimg.cc/zf3XKxbC/1200px-Flag-of-the-United-States-svg.png" alt="">
                    @lang('messages.english')</a>
            </div>
        </div>
    </div>

    <div class="btn-float btn-smirrow btn-back c-pointer" onclick="location.href = 'https://smirrow.com/';"><i
            class="fa fa-times" aria-hidden="true"></i></div>

    <section id="" class="animate__animated  " style="overflow: hidden">


        <!-- Image and text -->
        <nav class="navbar  navbar-dark bg-black">
            <a class="navbar-brand" href="#">
                <div class="row">
                    <div class="container">
                        <div class="row ">
                            <a href="/"><img class="rounded max-height-25"
                                    style="padding: 15px; width: 110px;height: 110px;"
                                    src="{{ URL::asset('images/icon/smirrow-icon.png') }}" alt="Logo Smirrow"
                                    title="Logo de Smirrow">
                            </a>
                            <h2 class="text-light mt-4 ">Frecuency Questions</h2>
                        </div>
                    </div>
                </div>
            </a>
        </nav>
        <div class="container">
            <div class="row mt-5">

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  position-static mb-5">

                    <ul class="list-group ">
                        <li class="list-group-item item-one  smirrow-active c-pointer">General questions</li>
                        <li class="list-group-item item-two c-pointer">User questions</li>
                        <li class="list-group-item item-three  c-pointer">Accompanying questions</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8  res bg-light">
                    <div id="accordion_general" class="accordion  " len="123153">
                        <div class="acordion_one  d-none" len="71271">
                            <h3 len="17" lang="en">Earnings and payments</h3>
                            <div class="card " len="1576">
                                <div id="heading1" class="card-header" len="316">
                                    <h2 class="mb-0" len="294"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1" aria-expanded="false" aria-controls="collapse1"
                                            class="btn btn-link collapsed text-left" len="126" lang="en"> How do I start
                                            making money in Smirrow? </button></h2>
                                </div>
                                <div id="collapse1" aria-labelledby="heading1" data-parent="#accordion_general"
                                    class="collapse" len="1111">
                                    <div class="card-body pl-4" len="1077">
                                        <font len="219">
                                            <font lang="en"> - Add a bank account in the "Bank Accounts" option, the bank
                                                account must be in the same country where you opened the profile. </font>
                                            <font lang="en">As an alternative payment method you will have an e-wallet.
                                            </font>
                                        </font><br len="0">
                                        <font len="40" lang="en"> - Complete your profile settings. </font><br len="0">
                                        <font len="44" lang="en"> - Make sure your account is verified. </font><br len="0">
                                        <font len="57" lang="en"> - Be sure to create and price your services. </font><br
                                            len="0">
                                        <font len="50" lang="en"> - Be sure to create albums with photos and videos. </font>
                                        <br len="0">
                                        <font len="75" lang="en"> - Be sure to set your schedule in the "Available Hours"
                                            option. </font><br len="0">
                                        <font len="84" lang="en"> Note: You may not be able to receive requests if your
                                            profile is not verified. </font><br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1043">
                                <div id="heading2" class="card-header" len="307">
                                    <h2 class="mb-0" len="285"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"
                                            class="btn btn-link collapsed text-left" len="117" lang="en"> What is the
                                            payment percentage? </button></h2>
                                </div>
                                <div id="collapse2" aria-labelledby="heading2" data-parent="#accordion_general"
                                    class="collapse" len="587">
                                    <div class="card-body pl-3" len="553">
                                        <font len="164" lang="en"> - Persons providing adult entertainment services receive
                                            70% of the income from their earnings, including special services and services.
                                        </font><br len="0">
                                        <font len="148" lang="en"> - The other 30% is divided into 19% of VAT and the
                                            remaining 11% covers payments for platform use, support, hosting and all other
                                            services. </font>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="2209">
                                <div id="heading4" class="card-header" len="320">
                                    <h2 class="mb-0" len="298"><button type="button" data-toggle="collapse"
                                            data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"
                                            class="btn btn-link collapsed text-left" len="130" lang="en"> Why was my payment
                                            request rejected? </button></h2>
                                </div>
                                <div id="collapse4" aria-labelledby="heading4" data-parent="#accordion_general"
                                    class="collapse" len="1740">
                                    <div class="card-body pl-3" len="1706">
                                        <font len="238" lang="en"> - If you receive an error message or your payment
                                            processing was not carried out for any reason, please contact the WhatsApp
                                            service at the top of the website or send a message to the email
                                            pagos@smirrow.com. </font><br len="0">
                                        <font len="193">
                                            <font lang="en"> Possible reasons for rejection of <b len="0"></b> your payment
                                                request: - Insufficient funds. </font>
                                            <font lang="en"><b len="0"></b> - The amount of money requested exceeds the
                                                amount of money in your virtual locker. </font>
                                        </font><b len="0"></b> <br len="0">
                                        <font len="368">
                                            <font lang="en"><strong len="5">Note:</strong> </font>
                                            <font lang="en">Keep in mind to write down the bank account numbers well, choose
                                                the name of your bank well, make clear names, surnames and identification
                                                number of the account holder. </font>
                                            <font lang="en">If you register the data to request payments badly and with
                                                errors, the money you have in your virtual locker may not reach your bank
                                                account. </font>
                                        </font><br len="0">
                                        <font len="113" lang="en"> - For your security in the "History" option, your payment
                                            requests and balances will always be recorded. </font>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="2084">
                                <div id="heading5" class="card-header" len="345">
                                    <h2 class="mb-0" len="323"><button type="button" data-toggle="collapse"
                                            data-target="#collapse5" aria-expanded="false" aria-controls="collapse5"
                                            class="btn btn-link collapsed text-left" len="155" lang="en"> Why are my
                                            winnings outstanding and payment not available? </button></h2>
                                </div>
                                <div id="collapse5" aria-labelledby="heading5" data-parent="#accordion_general"
                                    class="collapse" len="1590">
                                    <div class="card-body pl-3" len="1556">
                                        <font len="69" lang="en"> - Keep in mind to write down the bank account numbers
                                            well. </font><br len="0">
                                        <font len="71" lang="en"> - Please note that you correctly select the name of your
                                            bank. </font><br len="0">
                                        <font len="102" lang="en"> - Please note that you correctly enter the name and
                                            surname of the bank account holder. </font><br len="0">
                                        <font len="108" lang="en"> - Please note that you correctly enter the identification
                                            number of the bank account holder. </font><br len="0">
                                        <font len="155" lang="en"> - If you register the data to request payments badly and
                                            with errors, the money you have in your virtual locker may not reach your bank
                                            account. </font><br len="0"><br len="0">
                                        <font len="356">
                                            <font lang="en"><strong len="5">Note:</strong> </font>
                                            <font lang="en">You will only be able to make up to two transaction requests
                                                from your virtual locker to your personal bank account. </font>
                                            <font lang="en">If you make a third transaction request from your virtual locker
                                                to your bank account or more requests, banks will make discounts based on
                                                their policies by law for each transaction made. </font>
                                        </font>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1987">
                                <div id="heading6" class="card-header" len="331">
                                    <h2 class="mb-0" len="309"><button type="button" data-toggle="collapse"
                                            data-target="#collapse6" aria-expanded="false" aria-controls="collapse6"
                                            class="btn btn-link collapsed text-left" len="141" lang="en"> When can I
                                            initiate or make a payment request? </button></h2>
                                </div>
                                <div id="collapse6" aria-labelledby="heading6" data-parent="#accordion_general"
                                    class="collapse" len="1507">
                                    <div class="card-body pl-3" len="1473">
                                        <font len="144" lang="en"> - When you have money in your virtual locker you can make
                                            requests for all your money or only request a part of your money. </font><br
                                            len="0">
                                        <font len="66" lang="en"> - In the "My Money" option I can make the payment request.
                                        </font><br len="0">
                                        <font len="76" lang="en"> - In the "My Money" option you will be able to see a
                                            history of payment requests. </font><br len="0">
                                        <font len="63" lang="en"> - Please note to complete the "Bank Accounts" option.
                                        </font><br len="0">
                                        <font len="113" lang="en"> - Please note that your current balance for making
                                            requests must be above the minimum payment amount. </font><br len="0"> <br
                                            len="0">
                                        <font len="356">
                                            <font lang="en"><strong len="5">Note:</strong> </font>
                                            <font lang="en">You will only be able to make up to two transaction requests
                                                from your virtual locker to your personal bank account. </font>
                                            <font lang="en">If you make a third transaction request from your virtual locker
                                                to your bank account or more requests, banks will make discounts based on
                                                their policies by law for each transaction made. </font>
                                        </font>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1045">
                                <div id="heading7" class="card-header" len="314">
                                    <h2 class="mb-0" len="292"><button type="button" data-toggle="collapse"
                                            data-target="#collapse7" aria-expanded="false" aria-controls="collapse7"
                                            class="btn btn-link collapsed text-left" len="124" lang="en"> How do Users make
                                            payments? </button></h2>
                                </div>
                                <div id="collapse7" aria-labelledby="heading7" data-parent="#accordion_general"
                                    class="collapse" len="582">
                                    <div class="card-body pl-3" len="548">
                                        <font len="51" lang="en"> - All payments are made through Wompi. </font><br len="0">
                                        <font len="95" lang="en"> - Please note that for now no cash payments are accepted,
                                            only by electronic means.</font><br len="0"> <br len="0">
                                        <font len="158">
                                            <font lang="en"><strong len="5">Note:</strong> </font>
                                            <font lang="en">Please note that for receiving payments outside the platform
                                                Smirrow does not respond, nor does it have any obligation or commitment.
                                            </font>
                                        </font>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="935">
                                <div id="heading8" class="card-header" len="312">
                                    <h2 class="mb-0" len="290"><button type="button" data-toggle="collapse"
                                            data-target="#collapse8" aria-expanded="false" aria-controls="collapse8"
                                            class="btn btn-link collapsed text-left" len="122" lang="en"> History and
                                            history of requests </button></h2>
                                </div>
                                <div id="collapse8" aria-labelledby="heading8" data-parent="#accordion_general"
                                    class="collapse" len="474">
                                    <div class="card-body pl-3" len="440">
                                        <font len="99" lang="en"> - History is the option where you can see all the
                                            transactions made and current balance. </font><br len="0">
                                        <font len="132" lang="en"> - The history of requests will be found in the "My Money"
                                            option where you can see all the requests for money made.</font><br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1086">
                                <div id="heading9" class="card-header" len="333">
                                    <h2 class="mb-0" len="311"><button type="button" data-toggle="collapse"
                                            data-target="#collapse9" aria-expanded="false" aria-controls="collapse9"
                                            class="btn btn-link collapsed text-left" len="143" lang="en"> What benefits does
                                            the rating and feedback provide? </button></h2>
                                </div>
                                <div id="collapse9" aria-labelledby="heading9" data-parent="#accordion_general"
                                    class="collapse" len="604">
                                    <div class="card-body pl-3" len="570">
                                        <font len="153" lang="en"> - Star ratings and good comments help to have positioning
                                            within the platform, obtaining advantages and prerogatives. </font><br len="0">
                                        <font len="168" lang="en"> - The star rating ranges from one star to five stars,
                                            with one star being the lowest rating and five stars being the highest rating.
                                        </font><br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1535">
                                <div id="heading10" class="card-header" len="341">
                                    <h2 class="mb-0" len="319"><button type="button" data-toggle="collapse"
                                            data-target="#collapse10" aria-expanded="false" aria-controls="collapse10"
                                            class="btn btn-link collapsed text-left" len="149" lang="en"> My payment request
                                            has been processed and accepted, where is it? </button></h2>
                                </div>
                                <div id="collapse10" aria-labelledby="heading10" data-parent="#accordion_general"
                                    class="collapse" len="1042">
                                    <div class="card-body pl-3" len="1008">
                                        <font len="155" lang="en"> - Usually, funds take between 3 days and 5 business days
                                            to appear in your bank account, in exceptional cases it takes up to 10 business
                                            days. </font><br len="0">
                                        <font len="371">
                                            <font lang="en"> - If it has been more than 10 days since your payment was
                                                registered as processed, please email us at pagos@smirrow.com – include a
                                                screenshot of the payment request option, your ID number, and the details of
                                                the bank account holder, account number and bank. </font>
                                            <font lang="en">You must also attach bank certification showing that you have
                                                not received your payment. </font>
                                        </font>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="622">
                                <div id="heading11" class="card-header" len="291">
                                    <h2 class="mb-0" len="269"><button type="button" data-toggle="collapse"
                                            data-target="#collapse11" aria-expanded="false" aria-controls="collapse11"
                                            class="btn btn-link collapsed text-left" len="99" lang="en"> Minimum Withdrawal
                                        </button></h2>
                                </div>
                                <div id="collapse11" aria-labelledby="heading11" data-parent="#accordion_general"
                                    class="collapse" len="179">
                                    <div class="card-body pl-3" len="145" lang="en"> - The minimum withdrawal amount is
                                        $30,000 pesos Colombian currency. </div>
                                </div>
                            </div>
                            <div class="card" len="1398">
                                <div id="heading12" class="card-header" len="307">
                                    <h2 class="mb-0" len="285"><button type="button" data-toggle="collapse"
                                            data-target="#collapse12" aria-expanded="false" aria-controls="collapse12"
                                            class="btn btn-link collapsed text-left" len="115" lang="en"> Cancel my payment
                                            request </button></h2>
                                </div>
                                <div id="collapse12" aria-labelledby="heading12" data-parent="#accordion_general"
                                    class="collapse" len="939">
                                    <div class="card-body pl-3" len="905">
                                        <font len="109" lang="en"> - To submit a request for payment cancellation, you will
                                            need to contact customer service. </font><br len="0">
                                        <font len="216" lang="en"> - Include the date of application, your ID number, name
                                            of the bank account holder, identification number of the bank account holder,
                                            name of the bank, and bank account number, type of account. </font><br
                                            len="0"><br len="0">
                                        <font len="139">
                                            <font lang="en"><strong len="5">Note:</strong> </font>
                                            <font lang="en">There is no guarantee that the operation will be 100%
                                                successful, we will do our best to cancel the transaction. </font>
                                        </font>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1180">
                                <div id="heading13" class="card-header" len="302">
                                    <h2 class="mb-0" len="280"><button type="button" data-toggle="collapse"
                                            data-target="#collapse13" aria-expanded="false" aria-controls="collapse13"
                                            class="btn btn-link collapsed text-left" len="110" lang="en"> How much do I
                                            receive from payment? </button></h2>
                                </div>
                                <div id="collapse13" aria-labelledby="heading13" data-parent="#accordion_general"
                                    class="collapse" len="726">
                                    <div class="card-body pl-3" len="692">
                                        <font len="74" lang="en"> - The amount you see in your current balance is the exact
                                            amount you will receive. </font><br len="0">
                                        <font len="86" lang="en"> - You can make up to two transactions per month so as not
                                            to receive discounts by law. </font><br len="0">
                                        <font len="105" lang="en"> - Your bank may charge you conversion fees, per
                                            transaction, transfers for receiving the money. </font><br len="0">
                                        <font len="126" lang="en"> - Smirrow has no control over your bank's usage policies,
                                            nor over the exchange rates imposed by your bank. </font><br len="0"> <br
                                            len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1049">
                                <div id="heading14" class="card-header" len="404">
                                    <h2 class="mb-0" len="382"><button type="button" data-toggle="collapse"
                                            data-target="#collapse14" aria-expanded="false" aria-controls="collapse14"
                                            class="btn btn-link collapsed text-left" len="212" lang="en"> How do agencies
                                            providing adult entertainment services earn? </button></h2>
                                </div>
                                <div id="collapse14" aria-labelledby="heading14" data-parent="#accordion_general"
                                    class="collapse" len="493">
                                    <div class="card-body pl-3" len="459">
                                        <font len="120" lang="en"> - The agency that registers its staff provider of adult
                                            entertainment services obtains the net profit. </font><br len="0">
                                        <font len="131" lang="en"> - The agency is the one who must agree on the percentage
                                            of profits with its staff provider of adult entertainment services. </font><br
                                            len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="2428">
                                <div id="heading15" class="card-header" len="339">
                                    <h2 class="mb-0" len="317"><button type="button" data-toggle="collapse"
                                            data-target="#collapse15" aria-expanded="false" aria-controls="collapse15"
                                            class="btn btn-link collapsed text-left" len="147" lang="en"> How much can I
                                            charge for special services and services? </button></h2>
                                </div>
                                <div id="collapse15" aria-labelledby="heading15" data-parent="#accordion_general"
                                    class="collapse" len="1937">
                                    <div class="card-body pl-3" len="1903"><br len="0">
                                        <font len="143" lang="en"> - Please note that you can put the price you want to
                                            charge for special adult entertainment services and services. </font><br
                                            len="0">
                                        <font len="118" lang="en"> - Please note that you must charge according to your type
                                            of service and range of the profile you have within the platform. </font><br
                                            len="0">
                                        <font len="188" lang="en"> - If it is Gold level, the average to charge is from $
                                            450,000 pesos per hour, or $ 850,000 pesos for an 8-hour night and from then on
                                            you can charge what you want and think convenient. </font><br len="0">
                                        <font len="120" lang="en"> - If it is Platimum level, the average to charge is from
                                            $ 250,000 pesos per hour, or $ 450,000 pesos per night or 6 hours. </font><br
                                            len="0">
                                        <font len="115" lang="en"> - If it is Bronze level, the average to be charged is
                                            from $ 100,000 pesos per hour, or $ 250,000 pesos 6 hours or night. </font><br
                                            len="0">
                                        <font len="116" lang="en"> - Please note that you are free to choose the level you
                                            want and place the prices you want and deem convenient. </font><br len="0">
                                        <font len="238" lang="en"> - Keep in mind that, depending on the quality of your
                                            photos, videos and the beauty of your body, for example, if you are a fitness
                                            girl, model among other points, it will make the user see the veracity and
                                            credibility to pay for the value of your service. </font>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5" len="17">
                                <h3 len="8" lang="en">Councils</h3>
                            </div>
                            <div class="card" len="1584">
                                <div id="heading16" class="card-header" len="299">
                                    <h2 class="mb-0" len="277"><button type="button" data-toggle="collapse"
                                            data-target="#collapse16" aria-expanded="false" aria-controls="collapse16"
                                            class="btn btn-link collapsed text-left" len="107" lang="en"> To keep in mind:
                                        </button></h2>
                                </div>
                                <div id="collapse16" aria-labelledby="heading16" data-parent="#accordion_general"
                                    class="collapse" len="1133">
                                    <div class="card-body pl-3" len="1099">
                                        <font len="81" lang="en"> - Please note to complete the profile settings and all
                                            options. </font><br len="0">
                                        <font len="87" lang="en"> - Note the panic button that will give you security on
                                            your travels </font><br len="0">
                                        <font len="125" lang="en"> - Keep in mind to correctly fill in the bank account
                                            information to receive payments without inconvenience. </font><br len="0">
                                        <font len="85" lang="en"> - Please note to verify the email you register on the
                                            platform. </font><br len="0">
                                        <font len="109" lang="en"> - Keep in mind that the better your video and photo
                                            content, the more eye-catching it will be for users. </font><br len="0">
                                        <font len="66" lang="en"> - Fill in all the details for your account to be verified.
                                        </font><br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1189">
                                <div id="heading17" class="card-header" len="313">
                                    <h2 class="mb-0" len="291"><button type="button" data-toggle="collapse"
                                            data-target="#collapse17" aria-expanded="false" aria-controls="collapse17"
                                            class="btn btn-link collapsed text-left" len="121" lang="en"> Features of the
                                            panic button </button></h2>
                                </div>
                                <div id="collapse17" aria-labelledby="heading17" data-parent="#accordion_general"
                                    class="collapse" len="724">
                                    <div class="card-body pl-3" len="690"><br len="0">
                                        <font len="288" lang="en"> - The button appears at the top of the web and the mobile
                                            web, when shuttered an alert notice will arrive at the administrative platform,
                                            which will immediately appear the option to call 123 to contact the competent
                                            authority, giving them the address of the location. </font><br len="0">
                                        <font len="118" lang="en"> - It is an aid for service providers that they can use
                                            when they believe they are in danger or at risk. </font>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5" len="15">
                                <h3 len="6" lang="en">Account</h3>
                            </div>
                            <div class="card" len="2165">
                                <div id="heading18" class="card-header" len="332">
                                    <h2 class="mb-0" len="310"><button type="button" data-toggle="collapse"
                                            data-target="#collapse18" aria-expanded="false" aria-controls="collapse18"
                                            class="btn btn-link collapsed text-left" len="140" lang="en"> Account
                                            Approval/Account Application Requirements </button></h2>
                                </div>
                                <div id="collapse18" aria-labelledby="heading18" data-parent="#accordion_general"
                                    class="collapse" len="1681">
                                    <div class="card-body pl-3" len="1647"><br len="0">
                                        <font len="211" lang="en"> - To be approved and make use of your account, you will
                                            need to send a close-up selfie photo, which is recent of your face and upload it
                                            in the "Verification" option, make sure your face is fully visible. </font><br
                                            len="0">
                                        <font len="178" lang="en"> - The activation of your account will take place within
                                            the following 48 hours, but not before completing the mandatory minimum
                                            information requirements requested by the platform. </font><br len="0">
                                        <font len="123" lang="en"> - Images cannot be edited, cropped, or resized once
                                            uploaded to the platform in the "Gallery" option </font><br len="0">
                                        <font len="111" lang="en"> - Videos cannot be edited, nor resized once uploaded to
                                            the platform in the "Gallery" option. </font><br len="0">
                                        <font len="94" lang="en"> - Videos you upload to the "Gallery" option cannot be more
                                            than 30 seconds long. </font><br len="0">
                                        <font len="106" lang="en"> - The files you upload to the platform must be a
                                            compatible format such as mp4, jpg, png among others. </font>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="3122">
                                <div id="heading19" class="card-header" len="326">
                                    <h2 class="mb-0" len="304"><button type="button" data-toggle="collapse"
                                            data-target="#collapse19" aria-expanded="false" aria-controls="collapse19"
                                            class="btn btn-link collapsed text-left" len="134" lang="en"> My account is
                                            inactive/I don't get requests </button></h2>
                                </div>
                                <div id="collapse19" aria-labelledby="heading19" data-parent="#accordion_general"
                                    class="collapse" len="2644">
                                    <div class="card-body pl-3" len="2610"><br len="0">
                                        <font len="114" lang="en"> - If a service provider stops using the platform for more
                                            than 1 year or more, it will appear inactive. </font><br len="0">
                                        <font len="173" lang="en"> - If a service provider is sanctioned for 3 times for
                                            providing a bad service, bad rating, bad comments, his account will be inactive
                                            for one year. </font><br len="0">
                                        <font len="147" lang="en"> - Keep in mind that the more content you are creating,
                                            the more visible it will be for users in search engines, in the positioning of
                                            the platform. </font><br len="0">
                                        <font len="167" lang="en"> - Please note that the more content you are creating, the
                                            better comments and ratings you have, Smirrow will make totally free
                                            recommendations from your profile. </font><br len="0">
                                        <font len="187" lang="en"> - Keep in mind that the more complete all the information
                                            requested by the platform is, the easier and faster it will appear in the
                                            positioning of the platform, as in your search engine. </font><br len="0">
                                        <font len="243" lang="en"> - Keep in mind that the platform does not allow explicit
                                            sexual content, nor explicit nudity, Smirrow is focused on being a site with
                                            glamour, style, class, elegance, sensuality and let the imagination of users
                                            flow. </font><br len="0">
                                        <font len="110" lang="en"> - Please note that explicit sexual content and explicit
                                            nudity will be removed by the platform. </font><br len="0">
                                        <font len="100" lang="en"> - Please note that users will pay only for their services
                                            created within the platform. </font><br len="0">
                                        <font len="92" lang="en"> - Please note that you can create additional services to
                                            generate additional income. </font>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1232">
                                <div id="heading20" class="card-header" len="310">
                                    <h2 class="mb-0" len="288"><button type="button" data-toggle="collapse"
                                            data-target="#collapse20" aria-expanded="false" aria-controls="collapse20"
                                            class="btn btn-link collapsed text-left" len="118" lang="en"> Linking to Social
                                            Networks </button></h2>
                                </div>
                                <div id="collapse20" aria-labelledby="heading20" data-parent="#accordion_general"
                                    class="collapse" len="770">
                                    <div class="card-body pl-3" len="736"><br len="0">
                                        <font len="98" lang="en"> - Smirrow allows service providers to share their profile
                                            on social networks. </font><br len="0">
                                        <font len="228" lang="en"> - Likewise, Smirrow is allowed to share the content of
                                            the most outstanding service providers of the platforms on their social
                                            networks, without compromising their privacy and keeping their face reserved.
                                        </font><br len="0">
                                        <font len="78" lang="en"> - Please note that you can register with your Google or
                                            Facebook account. </font>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1341">
                                <div id="heading21" class="card-header" len="328">
                                    <h2 class="mb-0" len="306"><button type="button" data-toggle="collapse"
                                            data-target="#collapse21" aria-expanded="false" aria-controls="collapse21"
                                            class="btn btn-link collapsed text-left" len="136" lang="en"> Applications
                                            rejected for the following reasons: </button></h2>
                                </div>
                                <div id="collapse21" aria-labelledby="heading21" data-parent="#accordion_general"
                                    class="collapse" len="861">
                                    <div class="card-body pl-3" len="827">
                                        <font len="43" lang="en"> - Poor quality selfie, blurred face. </font><br len="0">
                                        <font len="84" lang="en"> - Selfie or photo of objects, toys, or dolls that do not
                                            identify the person. </font><br len="0">
                                        <font len="74" lang="en"> - Selfie or photo should not have cropping, cracks,
                                            wrinkles, perforations. </font><br len="0">
                                        <font len="76" lang="en"> - The minimum data required within the platform is not
                                            complete. </font><br len="0">
                                        <font len="68" lang="en"> - Upload third-party content with copyright protection.
                                        </font><br len="0">
                                        <font len="80" lang="en"> - The person who appears on the cover, in the albums, or
                                            videos do not match. </font><br len="0">
                                        <font len="52" lang="en"> - The account holder is not more than 18 years old.
                                        </font><br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="843">
                                <div id="heading22" class="card-header" len="305">
                                    <h2 class="mb-0" len="283"><button type="button" data-toggle="collapse"
                                            data-target="#collapse23" aria-expanded="false" aria-controls="collapse23"
                                            class="btn btn-link collapsed text-left" len="113" lang="en"> Number of active
                                            accounts </button></h2>
                                </div>
                                <div id="collapse23" aria-labelledby="heading22" data-parent="#accordion_general"
                                    class="collapse" len="386">
                                    <div class="card-body pl-3" len="352">
                                        <font len="103" lang="en"> - You can only have two active accounts, one as a service
                                            provider and one as a user. </font><br len="0">
                                        <font len="79" lang="en"> - They can only have one registered and active account
                                            with an email. </font><br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="960">
                                <div id="heading24" class="card-header" len="313">
                                    <h2 class="mb-0" len="291"><button type="button" data-toggle="collapse"
                                            data-target="#collapse24" aria-expanded="false" aria-controls="collapse24"
                                            class="btn btn-link collapsed text-left" len="121" lang="en"> Is nudity allowed
                                            in Smirrow? </button></h2>
                                </div>
                                <div id="collapse24" aria-labelledby="heading24" data-parent="#accordion_general"
                                    class="collapse" len="495">
                                    <div class="card-body pl-3" len="461">
                                        <p len="454">
                                            <font len="158" lang="en"> - Explicit nudity is not allowed, only half-nudes are
                                                allowed in posts as long as they are within established guidelines. </font>
                                            <br len="0">
                                            <font len="75" lang="en"> - Half-nudes are allowed by means of erotic and
                                                glamorous content. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1698">
                                <div id="heading25" class="card-header" len="316">
                                    <h2 class="mb-0" len="294"><button type="button" data-toggle="collapse"
                                            data-target="#collapse25" aria-expanded="false" aria-controls="collapse25"
                                            class="btn btn-link collapsed text-left" len="124" lang="en"> Content stolen
                                            from third-party sites </button></h2>
                                </div>
                                <div id="collapse25" aria-labelledby="heading25" data-parent="#accordion_general"
                                    class="collapse" len="1230">
                                    <div class="card-body pl-3" len="1196">
                                        <p len="1189">
                                            <font len="131" lang="en"> - Smirrow takes the protection of third-party content
                                                very seriously, so we do not allow them to infringe copyright. </font><br
                                                len="0">
                                            <font len="114" lang="en"> - Smirrow will issue formal takedown notices against
                                                all reported copyright infringements. </font><br len="0">
                                            <font len="108" lang="en"> - Smirrow has a copyright verification team, applied
                                                to uploaded content. </font><br len="0">
                                            <font len="124" lang="en"> - Please note that within the platform you may make
                                                complaints about content that infringes copyright. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="999">
                                <div id="heading26" class="card-header" len="353">
                                    <h2 class="mb-0" len="331"><button type="button" data-toggle="collapse"
                                            data-target="#collapse26" aria-expanded="false" aria-controls="collapse26"
                                            class="btn btn-link collapsed text-left" len="161" lang="en"> Adult
                                            Entertainment Service Agency Account Creation </button></h2>
                                </div>
                                <div id="collapse26" aria-labelledby="heading26" data-parent="#accordion_general"
                                    class="collapse" len="494">
                                    <div class="card-body pl-3" len="460">
                                        <p len="453" lang="en"> - Smirrow will provide a unique identification number within
                                            the platform for the agency to register with that number all the service
                                            providers it has at its disposal. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5" len="41">
                                <h3 len="32" lang="en">Account and Page Settings</h3>
                            </div>
                            <div class="card" len="1030">
                                <div id="heading27" class="card-header" len="310">
                                    <h2 class="mb-0" len="288"><button type="button" data-toggle="collapse"
                                            data-target="#collapse28" aria-expanded="false" aria-controls="collapse28"
                                            class="btn btn-link collapsed text-left" len="118" lang="en"> Account and Page
                                            Settings </button></h2>
                                </div>
                                <div id="collapse28" aria-labelledby="heading27" data-parent="#accordion_general"
                                    class="collapse" len="568">
                                    <div class="card-body pl-3" len="534">
                                        <p len="527">
                                            <font len="134" lang="en"> - Any user who is registered with Smirrow will be
                                                able to see your profile and all its published content present and past on
                                                your page. </font><br len="0">
                                            <font len="128" lang="en"> - Please note that all content must comply with our
                                                terms and conditions or be subject to suspension or closure. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="777">
                                <div id="heading29" class="card-header" len="295">
                                    <h2 class="mb-0" len="273"><button type="button" data-toggle="collapse"
                                            data-target="#collapse29" aria-expanded="false" aria-controls="collapse29"
                                            class="btn btn-link collapsed text-left" len="103" lang="en"> Hide your profile
                                        </button></h2>
                                </div>
                                <div id="collapse29" aria-labelledby="heading29" data-parent="#accordion_general"
                                    class="collapse" len="330">
                                    <div class="card-body pl-3" len="296">
                                        <p len="289" lang="en">- It is possible to hide your profile to national IP
                                            addresses where you opened your account and let only foreign IP addresses see
                                            your page. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1842">
                                <div id="heading30" class="card-header" len="292">
                                    <h2 class="mb-0" len="270"><button type="button" data-toggle="collapse"
                                            data-target="#collapse30" aria-expanded="false" aria-controls="collapse30"
                                            class="btn btn-link collapsed text-left" len="100" lang="en"> Public Profile
                                        </button></h2>
                                </div>
                                <div id="collapse30" aria-labelledby="heading30" data-parent="#accordion_general"
                                    class="collapse" len="1398">
                                    <div class="card-body pl-3" len="1364">
                                        <p len="1357">
                                            <font len="316" lang="en"> - The following data are those that will be visible
                                                in your public profile: user, gender, country, city, ethnicity, skin color,
                                                eye color, hair color, hair height, texture, style, tattoos, piercings,
                                                weight, height, I go home, I have a place, I receive services, attention
                                                zones and description. </font><br len="0">
                                            <font len="88" lang="en"> - Bust, waist and hip will be shown only if you have
                                                selected female or trans gender. </font><br len="0">
                                            <font len="47" lang="en"> - Your photo and video albums will be displayed.
                                            </font><br len="0">
                                            <font len="29" lang="en"> - Your ID number will be displayed. </font><br
                                                len="0">
                                            <font len="38" lang="en"> - Your available schedule will be displayed. </font>
                                            <br len="0">
                                            <font len="64" lang="en"> - Your services, additional services and prices will
                                                be displayed. </font><br len="0">
                                            <font len="50" lang="en"> - Your ratings and comments will be displayed. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1178">
                                <div id="heading31" class="card-header" len="304">
                                    <h2 class="mb-0" len="282"><button type="button" data-toggle="collapse"
                                            data-target="#collapse31" aria-expanded="false" aria-controls="collapse31"
                                            class="btn btn-link collapsed text-left" len="112" lang="en"> Page Unavailable
                                            Error </button></h2>
                                </div>
                                <div id="collapse31" aria-labelledby="heading31" data-parent="#accordion_general"
                                    class="collapse" len="722">
                                    <div class="card-body pl-3" len="688">
                                        <p len="681" lang="en"> - When a user reports that there is a page error not
                                            available when they visit their profile they should keep in mind that they may
                                            have activated the block of having their page published only for foreigners, if
                                            the error persists, communicate through the WhatsApp of customer service or send
                                            an email to ayuda@smirrow.com </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1346">
                                <div id="heading32" class="card-header" len="294">
                                    <h2 class="mb-0" len="272"><button type="button" data-toggle="collapse"
                                            data-target="#collapse32" aria-expanded="false" aria-controls="collapse32"
                                            class="btn btn-link collapsed text-left" len="102" lang="en"> Tagging and URL
                                        </button></h2>
                                </div>
                                <div id="collapse32" aria-labelledby="heading32" data-parent="#accordion_general"
                                    class="collapse" len="900">
                                    <div class="card-body pl-3" len="866">
                                        <p len="859">
                                            <font len="163" lang="en"> - Smirrow does not allow you to write addresses of
                                                other websites within the platform, by doing so, your account will not be
                                                verified, so you will not be able to have it active. </font><br len="0">
                                            <font len="131" lang="en"> - Please note that if you enter an address/URL from
                                                another site after having your account activated, it will be deactivated.
                                            </font><br len="0">
                                            <font len="118" lang="en"> - Please note that you can share the address/URL of
                                                your Smirrow page and your ID number on social networks and websites.
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5" len="109">
                                <h3 len="100" lang="en"> Promoting your Smirrow account </h3>
                            </div>
                            <div class="card" len="1647">
                                <div id="heading33" class="card-header" len="357">
                                    <h2 class="mb-0" len="335"><button type="button" data-toggle="collapse"
                                            data-target="#collapse33" aria-expanded="false" aria-controls="collapse33"
                                            class="btn btn-link collapsed text-left" len="165" lang="en"> Tips for adult
                                            entertainment service providers </button></h2>
                                </div>
                                <div id="collapse33" aria-labelledby="heading33" data-parent="#accordion_general"
                                    class="collapse" len="1138">
                                    <div class="card-body pl-3" len="1104">
                                        <p len="1097">
                                            <font len="43" lang="en"> - Post new content frequently. </font><br len="0">
                                            <font len="55" lang="en"> - Share your site on your existing social networks.
                                            </font><br len="0">
                                            <font len="67" lang="en"> - Promote your account anywhere you have followers.
                                            </font><br len="0">
                                            <font len="115" lang="en"> - Please note that the five-star rating works to have
                                                better positioning on the platform. </font><br len="0">
                                            <font len="140" lang="en"> - Please note that the five-star rating serves to
                                                show security and reliability to users requesting services. </font><br
                                                len="0">
                                            <font len="131" lang="en"> - Keep in mind that positive feedback helps build
                                                trust and security with users requesting services. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="758">
                                <div id="heading34" class="card-header" len="300">
                                    <h2 class="mb-0" len="278"><button type="button" data-toggle="collapse"
                                            data-target="#collapse34" aria-expanded="false" aria-controls="collapse34"
                                            class="btn btn-link collapsed text-left" len="108" lang="en"> Promotional
                                            campaigns </button></h2>
                                </div>
                                <div id="collapse34" aria-labelledby="heading34" data-parent="#accordion_general"
                                    class="collapse" len="306">
                                    <div class="card-body pl-3" len="272">
                                        <p len="265" lang="en"> - Smirrow will carry out promotional campaigns for the
                                            benefit of people providing adult entertainment services. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5" len="27">
                                <h3 len="18" lang="en">Technical questions</h3>
                            </div>
                            <div class="card" len="1490">
                                <div id="heading35" class="card-header" len="296">
                                    <h2 class="mb-0" len="274"><button type="button" data-toggle="collapse"
                                            data-target="#collapse36" aria-expanded="false" aria-controls="collapse36"
                                            class="btn btn-link collapsed text-left" len="104" lang="en"> Image size
                                        </button></h2>
                                </div>
                                <div id="collapse36" aria-labelledby="heading35" data-parent="#accordion_general"
                                    class="collapse" len="1042">
                                    <div class="card-body pl-3" len="1008">
                                        <p len="1001">
                                            <font len="103" lang="en"> - Profile photo size must be minimum of 110x110
                                                pixels and resolution of 180x180 pixels minimum. </font><br len="0">
                                            <font len="149" lang="en"> - Square photos for publications the ideal
                                                measurement is 1080x1080 pixels and minimum of 640x640 pixels, and a maximum
                                                measure of 2048x2048 pixels. </font><br len="0">
                                            <font len="105" lang="en"> - Vertical photos for publications the ideal measure
                                                is 1080x1350 pixels and minimum 600x749 pixels. </font><br len="0">
                                            <font len="106" lang="en"> - Horizontal photos for publications the ideal
                                                measurement is 1080x566 pixels and minimum 600x400 pixels. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1146">
                                <div id="heading37" class="card-header" len="293">
                                    <h2 class="mb-0" len="271"><button type="button" data-toggle="collapse"
                                            data-target="#collapse38" aria-expanded="false" aria-controls="collapse38"
                                            class="btn btn-link collapsed text-left" len="101" lang="en"> Video size
                                        </button></h2>
                                </div>
                                <div id="collapse38" aria-labelledby="heading37" data-parent="#accordion_general"
                                    class="collapse" len="701">
                                    <div class="card-body pl-3" len="667">
                                        <p len="660">
                                            <font len="132" lang="en"> - Video square format for publications the ideal size
                                                is 640x640 pixels, it is the most recommended format to upload video.
                                            </font><br len="0">
                                            <font len="86" lang="en"> - Video horizontal format for publications the ideal
                                                measurement is 600x315 pixels. </font><br len="0">
                                            <font len="84" lang="en"> - Vertical format video for publications the ideal
                                                measurement is 600x750 pixels. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1044">
                                <div id="heading39" class="card-header" len="334">
                                    <h2 class="mb-0" len="312"><button type="button" data-toggle="collapse"
                                            data-target="#collapse39" aria-expanded="false" aria-controls="collapse39"
                                            class="btn btn-link collapsed text-left" len="142" lang="en"> Code for adult
                                            entertainment agencies </button></h2>
                                </div>
                                <div id="collapse39" aria-labelledby="heading39" data-parent="#accordion_general"
                                    class="collapse" len="558">
                                    <div class="card-body pl-3" len="524">
                                        <p len="517">
                                            <font len="143" lang="en"> - Each agency will be given a unique numerical code
                                                to register its personal adult entertainment service provider. </font><br
                                                len="0">
                                            <font len="108" lang="en"> - The code identifies the agency and its staff
                                                providing adult entertainment services. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1052">
                                <div id="heading40" class="card-header" len="325">
                                    <h2 class="mb-0" len="303"><button type="button" data-toggle="collapse"
                                            data-target="#collapse40" aria-expanded="false" aria-controls="collapse40"
                                            class="btn btn-link collapsed text-left" len="133" lang="en"> Contact within
                                            the platform with the user </button></h2>
                                </div>
                                <div id="collapse40" aria-labelledby="heading40" data-parent="#accordion_general"
                                    class="collapse" len="575">
                                    <div class="card-body pl-3" len="541">
                                        <p len="534">
                                            <font len="141" lang="en"> - The chat and messaging will be activated only when
                                                the user makes the payment on the requested service to be able to have
                                                communication. </font><br len="0">
                                            <font len="128" lang="en"> - Please note that Smirrow has no responsibility for
                                                what is written, chatted and agreed outside the platform. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1203">
                                <div id="heading41" class="card-header" len="313">
                                    <h2 class="mb-0" len="291"><button type="button" data-toggle="collapse"
                                            data-target="#collapse42" aria-expanded="false" aria-controls="collapse42"
                                            class="btn btn-link collapsed text-left" len="121" lang="en"> Notifications and
                                            email </button></h2>
                                </div>
                                <div id="collapse42" aria-labelledby="heading41" data-parent="#accordion_general"
                                    class="collapse" len="738">
                                    <div class="card-body pl-3" len="704">
                                        <p len="697">
                                            <font len="147" lang="en"> - Please note that validating the email will allow
                                                notifications of requests for your service to reach your digital device.
                                            </font><br len="0">
                                            <font len="197" lang="en"> - Please note that your digital device through the
                                                registered and validated email, will allow you to see notifications about
                                                the payments made by each user for your services. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="817">
                                <div id="heading43" class="card-header" len="289">
                                    <h2 class="mb-0" len="267"><button type="button" data-toggle="collapse"
                                            data-target="#collapse44" aria-expanded="false" aria-controls="collapse44"
                                            class="btn btn-link collapsed text-left" len="97" lang="en"> Feedback </button>
                                    </h2>
                                </div>
                                <div id="collapse44" aria-labelledby="heading43" data-parent="#accordion_general"
                                    class="collapse" len="376">
                                    <div class="card-body pl-3" len="342">
                                        <p len="335" lang="en"> - Please note that all comments made by users help you to
                                            have positioning within the platform and references with users. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1323">
                                <div id="heading45" class="card-header" len="309">
                                    <h2 class="mb-0" len="287"><button type="button" data-toggle="collapse"
                                            data-target="#collapse45" aria-expanded="false" aria-controls="collapse45"
                                            class="btn btn-link collapsed text-left" len="117" lang="en"> Delete or edit
                                            posts </button></h2>
                                </div>
                                <div id="collapse45" aria-labelledby="heading45" data-parent="#accordion_general"
                                    class="collapse" len="862">
                                    <div class="card-body pl-3" len="828">
                                        <p len="821">
                                            <font len="74" lang="en"> - You can edit your profile settings as many times as
                                                you think necessary. </font><br len="0">
                                            <font len="89" lang="en"> - You can edit or delete photo and video gallery as
                                                many times as you deem necessary. </font><br len="0">
                                            <font len="100" lang="en"> - You can edit or delete the special services and
                                                services as many times as you deem necessary. </font><br len="0">
                                            <font len="74" lang="en"> - You can edit the available schedule as many times as
                                                you deem necessary. </font><br len="0">
                                            <font len="75" lang="en"> - You can edit or delete the bank accounts you deem
                                                necessary. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="766">
                                <div id="heading46" class="card-header" len="299">
                                    <h2 class="mb-0" len="277"><button type="button" data-toggle="collapse"
                                            data-target="#collapse47" aria-expanded="false" aria-controls="collapse47"
                                            class="btn btn-link collapsed text-left" len="107" lang="en"> Smirrow Watermark
                                        </button></h2>
                                </div>
                                <div id="collapse47" aria-labelledby="heading46" data-parent="#accordion_general"
                                    class="collapse" len="315">
                                    <div class="card-body pl-3" len="281">
                                        <p len="274" lang="en"> - You can activate the watermark to protect your photo and
                                            video content with copyright. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1581">
                                <div id="heading47" class="card-header" len="285">
                                    <h2 class="mb-0" len="263"><button type="button" data-toggle="collapse"
                                            data-target="#collapse47" aria-expanded="false" aria-controls="collapse47"
                                            class="btn btn-link collapsed text-left" len="93" lang="en"> Languages
                                        </button></h2>
                                </div>
                                <div id="collapse47" aria-labelledby="heading47" data-parent="#accordion_general"
                                    class="collapse" len="1144">
                                    <div class="card-body pl-3" len="1110">
                                        <p len="1103">
                                            <font len="89" lang="en"> - The platform is in two languages for now, which are
                                                Spanish and English. </font><br len="0">
                                            <font len="210" lang="en"> - Please note that, to change the language, at the
                                                beginning of the Smirrow page, you can go to the top of the page and you
                                                will find two flag options, one for Spanish and one for English. </font><br
                                                len="0">
                                            <font len="271" lang="en"> - Please note that, to change the language already
                                                registered within the platform, you must go to the top in the image and name
                                                option, to click a menu will be extended where you will find two options of
                                                flags, one for Spanish and one for English. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1110">
                                <div id="heading48" class="card-header" len="342">
                                    <h2 class="mb-0" len="320"><button type="button" data-toggle="collapse"
                                            data-target="#collapse48" aria-expanded="false" aria-controls="collapse48"
                                            class="btn btn-link collapsed text-left" len="150" lang="en"> Areas to provide
                                            adult entertainment services </button></h2>
                                </div>
                                <div id="collapse48" aria-labelledby="heading48" data-parent="#accordion_general"
                                    class="collapse" len="616">
                                    <div class="card-body pl-3" len="582">
                                        <p len="575">
                                            <font len="144" lang="en"> - The person providing the adult entertainment
                                                service may choose the country, city and localities where they provide their
                                                services. </font><br len="0">
                                            <font len="122" lang="en"> - Please note that you can also choose other
                                                countries, cities and municipalities where you accept travel. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="792">
                                <div id="heading49" class="card-header" len="293">
                                    <h2 class="mb-0" len="271"><button type="button" data-toggle="collapse"
                                            data-target="#collapse49" aria-expanded="false" aria-controls="collapse49"
                                            class="btn btn-link collapsed text-left" len="101" lang="en"> Geolocation
                                        </button></h2>
                                </div>
                                <div id="collapse49" aria-labelledby="heading49" data-parent="#accordion_general"
                                    class="collapse" len="347">
                                    <div class="card-body pl-3" len="313">
                                        <p len="306" lang="en"> - The person providing the service may activate the
                                            geolocation system at times of travel for their safety. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5" len="19">
                                <h3 len="10" lang="en"> Taxation</h3>
                            </div>
                            <div class="card" len="1147">
                                <div id="heading50" class="card-header" len="294">
                                    <h2 class="mb-0" len="272"><button type="button" data-toggle="collapse"
                                            data-target="#collapse50" aria-expanded="false" aria-controls="collapse50"
                                            class="btn btn-link collapsed text-left" len="102" lang="en"> VAT tax </button>
                                    </h2>
                                </div>
                                <div id="collapse50" aria-labelledby="heading50" data-parent="#accordion_general"
                                    class="collapse" len="701">
                                    <div class="card-body pl-3" len="667">
                                        <p len="660">
                                            <font lang="en"> - The value added tax known as VAT, is a consumption tax that
                                                is added to the value of the goods or services purchased, the rate varies
                                                according to the country. </font>
                                            <font lang="en">The tax is added to the value of the product or service at the
                                                time of purchase and is paid directly to the corresponding tax authority.
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="924">
                                <div id="heading51" class="card-header" len="311">
                                    <h2 class="mb-0" len="289"><button type="button" data-toggle="collapse"
                                            data-target="#collapse51" aria-expanded="false" aria-controls="collapse51"
                                            class="btn btn-link collapsed text-left" len="119" lang="en"> Modifications and
                                            new taxes </button></h2>
                                </div>
                                <div id="collapse51" aria-labelledby="heading51" data-parent="#accordion_general"
                                    class="collapse" len="461">
                                    <div class="card-body pl-3" len="427">
                                        <p len="420" lang="en"> - Smirrow is subject and obliged to make changes,
                                            modifications or add new taxes according to changes in the rules and laws of
                                            each country in which the platform is active and operating. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="844">
                                <div id="heading51" class="card-header" len="296">
                                    <h2 class="mb-0" len="274"><button type="button" data-toggle="collapse"
                                            data-target="#collapse51" aria-expanded="false" aria-controls="collapse51"
                                            class="btn btn-link collapsed text-left" len="104" lang="en"> Tax payments
                                        </button></h2>
                                </div>
                                <div id="collapse51" aria-labelledby="heading51" data-parent="#accordion_general"
                                    class="collapse" len="396">
                                    <div class="card-body pl-3" len="362">
                                        <p len="355" lang="en"> - Smirrow pays directly all VAT collected to the
                                            corresponding authority and entity, based on the legal regulations of each
                                            country in which the platform is operating. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1182">
                                <div id="heading52" class="card-header" len="304">
                                    <h2 class="mb-0" len="282"><button type="button" data-toggle="collapse"
                                            data-target="#collapse52" aria-expanded="false" aria-controls="collapse52"
                                            class="btn btn-link collapsed text-left" len="112" lang="en"> VAT collection
                                        </button></h2>
                                </div>
                                <div id="collapse52" aria-labelledby="heading52" data-parent="#accordion_general"
                                    class="collapse" len="726">
                                    <div class="card-body pl-3" len="692">
                                        <p len="685">
                                            <font len="252" lang="en"> - If a person providing adult entertainment services
                                                resides in the different country where the User of the country requests and
                                                makes the payment, VAT will be charged according to the country where he
                                                resides and based on his legal regulations. </font><br len="0">
                                            <font len="79" lang="en"> - Please note that VAT tax will be subject to the
                                                country where you reside. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="809">
                                <div id="heading53" class="card-header" len="330">
                                    <h2 class="mb-0" len="308"><button type="button" data-toggle="collapse"
                                            data-target="#collapse54" aria-expanded="false" aria-controls="collapse54"
                                            class="btn btn-link collapsed text-left" len="138" lang="en"> Who can I contact
                                            if I have further questions? </button></h2>
                                </div>
                                <div id="collapse54" aria-labelledby="heading53" data-parent="#accordion_general"
                                    class="collapse" len="327">
                                    <div class="card-body pl-3" len="293">
                                        <p len="286" lang="en"> - If you have any additional questions you can contact by
                                            WhatsApp or by email ayuda@smirrow.com </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5" len="35">
                                <h3 len="26" lang="en"> Service Compliance</h3>
                            </div>
                            <div class="card" len="1305">
                                <div id="heading55" class="card-header" len="320">
                                    <h2 class="mb-0" len="298"><button type="button" data-toggle="collapse"
                                            data-target="#collapse55" aria-expanded="false" aria-controls="collapse55"
                                            class="btn btn-link collapsed text-left" len="128" lang="en"> What happens if I
                                            fail to provide a service? </button></h2>
                                </div>
                                <div id="collapse55" aria-labelledby="heading55" data-parent="#accordion_general"
                                    class="collapse" len="833">
                                    <div class="card-body pl-3" len="799">
                                        <p len="792">
                                            <font len="195" lang="en"> - If the provider of adult entertainment services
                                                fails to comply with the service that the user has already paid, he will
                                                have a penalty of 1 month of not being able to use the digital platform.
                                            </font><br len="0">
                                            <font len="82" lang="en"> - Please note that after 3 penalties, your account
                                                will be deactivated for 1 year. </font><br len="0">
                                            <font len="114" lang="en"> - Please note that, when defaulting, the money paid
                                                for the service will be returned to the user in full. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1257">
                                <div id="heading56" class="card-header" len="323">
                                    <h2 class="mb-0" len="301"><button type="button" data-toggle="collapse"
                                            data-target="#collapse57" aria-expanded="false" aria-controls="collapse57"
                                            class="btn btn-link collapsed text-left" len="131" lang="en"> Justification of
                                            non-compliance with the service </button></h2>
                                </div>
                                <div id="collapse57" aria-labelledby="heading56" data-parent="#accordion_general"
                                    class="collapse" len="782">
                                    <div class="card-body pl-3" len="748">
                                        <p len="741">
                                            <font len="211" lang="en"> - If the provider of the adult entertainment service
                                                presents a legal excuse or a strong proof of why he failed to comply with
                                                the service requested by the user, he will not be sanctioned. </font><br
                                                len="0">
                                            <font len="133" lang="en"> - Please note that, if you fail to comply with the
                                                provision of the service and do not present a legal excuse or conclusive
                                                evidence, you will be sanctioned. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1155">
                                <div id="heading57" class="card-header" len="337">
                                    <h2 class="mb-0" len="315"><button type="button" data-toggle="collapse"
                                            data-target="#collapse57" aria-expanded="false" aria-controls="collapse57"
                                            class="btn btn-link collapsed text-left" len="145" lang="en"> Terms or time to
                                            present evidence for non-compliance </button></h2>
                                </div>
                                <div id="collapse57" aria-labelledby="heading57" data-parent="#accordion_general"
                                    class="collapse" len="666">
                                    <div class="card-body pl-3" len="632">
                                        <p len="625">
                                            <font len="175" lang="en"> - The person providing the service will have a term
                                                of 8 calendar days to present the legal excuse or conclusive proof of why he
                                                did not comply with the requested service. </font><br len="0">
                                            <font len="141" lang="en"> - To present the legal excuse or strong proof that
                                                proves why he breached, I sent an email with his almost to
                                                legal@smirrow.coms </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5" len="18">
                                <h3 len="9" lang="en">Safety</h3>
                            </div>
                            <div class="card" len="1077">
                                <div id="heading58" class="card-header" len="293">
                                    <h2 class="mb-0" len="271"><button type="button" data-toggle="collapse"
                                            data-target="#collapse58" aria-expanded="false" aria-controls="collapse58"
                                            class="btn btn-link collapsed text-left" len="101" lang="en"> Panic button
                                        </button></h2>
                                </div>
                                <div id="collapse58" aria-labelledby="heading58" data-parent="#accordion_general"
                                    class="collapse" len="632">
                                    <div class="card-body pl-3" len="598">
                                        <p len="591" lang="en"> - It is a plus that Smirrow provides to service providers to
                                            alert the administrative security part of the platform that the person providing
                                            the service is being attacked, violated, is at risk or in danger, so that they
                                            can receive help in the shortest possible time from the competent authority.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="790">
                                <div id="heading59" class="card-header" len="293">
                                    <h2 class="mb-0" len="271"><button type="button" data-toggle="collapse"
                                            data-target="#collapse59" aria-expanded="false" aria-controls="collapse59"
                                            class="btn btn-link collapsed text-left" len="101" lang="en"> Geolocation
                                        </button></h2>
                                </div>
                                <div id="collapse59" aria-labelledby="heading59" data-parent="#accordion_general"
                                    class="collapse" len="345">
                                    <div class="card-body pl-3" len="311">
                                        <p len="304" lang="en"> - The person providing the service may activate the
                                            geolocation system at times of travel for their safety </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1976">
                                <div id="heading60" class="card-header" len="300">
                                    <h2 class="mb-0" len="278"><button type="button" data-toggle="collapse"
                                            data-target="#collapse61" aria-expanded="false" aria-controls="collapse61"
                                            class="btn btn-link collapsed text-left" len="108" lang="en"> Payment security
                                        </button></h2>
                                </div>
                                <div id="collapse61" aria-labelledby="heading60" data-parent="#accordion_general"
                                    class="collapse" len="1524">
                                    <div class="card-body pl-3" len="1490">
                                        <p len="1483">
                                            <font len="142" lang="en"> - No user will provide the adult entertainment
                                                service until the user has made the payment for the requested service
                                            </font><br len="0">
                                            <font len="644">
                                                <font lang="en"><strong len="5">NOTE:</strong> </font>
                                                <font lang="en">Please note that the user when making a request for a
                                                    service, the person providing the service will receive a notification to
                                                    accept or reject the requested service, if the service is rejected, it
                                                    is canceled, but if the service is accepted, the user will receive a
                                                    notification informing that the request to provide the service was
                                                    accepted, </font>
                                                <font lang="en">so in that same notification the payment order will arrive,
                                                    next step, the user makes the payment and the person providing the
                                                    service will receive a new notification communicating that the payment
                                                    for the service was made successfully. </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card border" len="728">
                                <div id="heading61" class="card-header " len="308">
                                    <h2 class="mb-0" len="286"><button type="button" data-toggle="collapse"
                                            data-target="#collapse61" aria-expanded="false" aria-controls="collapse61"
                                            class="btn btn-link collapsed text-left" len="116" lang="en"> Means to make
                                            payments </button></h2>
                                </div>
                                <div id="collapse61" aria-labelledby="heading61" data-parent="#accordion_general"
                                    class="collapse " len="266">
                                    <div class="card-body pl-3" len="232">
                                        <p len="225" lang="en"> - The only means enabled and accepted by Smirrow are through
                                            the Wompi platforms. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acordion_two d-none" len="37873">
                            <h3 len="8" lang="en">Registration</h3>
                            <div class="card " len="1085">
                                <div id="heading2_1" class="card-header" len="301">
                                    <h2 class="mb-0" len="279"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_1" aria-expanded="false" aria-controls="collapse2_1"
                                            class="btn btn-link collapsed text-left" len="107" lang="en"> Why register?
                                        </button></h2>
                                </div>
                                <div id="collapse2_1" aria-labelledby="heading2_1" data-parent="#accordion_general"
                                    class="collapse" len="629">
                                    <div class="card-body pl-4" len="595">
                                        <p len="583">
                                            <font len="158" lang="en"> - Registering gives you access to all catalogs and
                                                private content published by adult entertainment service providers. </font>
                                            <br len="0">
                                            <font len="102" lang="en"> - When requesting a service, a chat and private
                                                messaging is activated to communicate between the parties. </font><br
                                                len="0">
                                            <font len="47" lang="en"> - Registering on Smirrow is totally free.</font><br
                                                len="0">
                                        </p> <br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="755">
                                <div id="heading2_2" class="card-header" len="315">
                                    <h2 class="mb-0" len="293"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_2" aria-expanded="false" aria-controls="collapse2_2"
                                            class="btn btn-link collapsed text-left" len="121" lang="en"> By what means can
                                            I register? </button></h2>
                                </div>
                                <div id="collapse2_2" aria-labelledby="heading2_2" data-parent="#accordion_general"
                                    class="collapse" len="285">
                                    <div class="card-body pl-3" len="251">
                                        <p len="244">
                                            <font len="57" lang="en"> - You can register via your email. </font><br len="0">
                                            <font len="54" lang="en"> - You can register via Facebook or Google. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1409">
                                <div id="heading2_3" class="card-header" len="306">
                                    <h2 class="mb-0" len="284"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_3" aria-expanded="false" aria-controls="collapse2_3"
                                            class="btn btn-link collapsed text-left" len="112" lang="en"> How to find a
                                            profile? </button></h2>
                                </div>
                                <div id="collapse2_3" aria-labelledby="heading2_3" data-parent="#accordion_general"
                                    class="collapse" len="948">
                                    <div class="card-body pl-3" len="914">
                                        <p len="907">
                                            <font len="185" lang="en"> - At the beginning the search option will appear with
                                                the image of a magnifying glass, where you can search if you know the name
                                                of the service provider you want to contact. </font><br len="0">
                                            <font len="136" lang="en"> - In the search option you can also make queries by
                                                filtering type of service, prices, skin color, hair color, etc. </font><br
                                                len="0">
                                            <font len="185" lang="en"> - When performing generic searches, the results that
                                                the platform throws will be from the people who provide adult entertainment
                                                services that are best positioned. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1433">
                                <div id="heading2_4" class="card-header" len="300">
                                    <h2 class="mb-0" len="278"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_4" aria-expanded="false" aria-controls="collapse2_4"
                                            class="btn btn-link collapsed text-left" len="106" lang="en"> I can't register
                                        </button></h2>
                                </div>
                                <div id="collapse2_4" aria-labelledby="heading2_4" data-parent="#accordion_general"
                                    class="collapse" len="978">
                                    <div class="card-body pl-3" len="944">
                                        <p len="937">
                                            <font len="83" lang="en"> - You need to verify that your email is written
                                                correctly and complete. </font><br len="0">
                                            <font len="106" lang="en"> - If you open a profile with Facebook or Google,
                                                verify that you are entering your password correctly. </font><br len="0">
                                            <font len="41" lang="en"> - Use an up-to-date web browser. </font><br len="0">
                                            <font len="102" lang="en"> - Delete cookies, history and your browsing history
                                                in the settings option of your browser. </font><br len="0">
                                            <font len="48" lang="en"> - Update your browser by pressing Ctrl + F5. </font>
                                            <br len="0">
                                            <font len="93" lang="en"> - If you have problems registering or these persist
                                                write to ayuda@smirrow.com </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="903">
                                <div id="heading2_5" class="card-header" len="331">
                                    <h2 class="mb-0" len="309"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_5" aria-expanded="false" aria-controls="collapse2_5"
                                            class="btn btn-link collapsed text-left" len="137" lang="en"> I can't find a
                                            profile after signing up </button></h2>
                                </div>
                                <div id="collapse2_5" aria-labelledby="heading2_5" data-parent="#accordion_general"
                                    class="collapse" len="417">
                                    <div class="card-body pl-3" len="383">
                                        <p len="376" lang="en"> - Some providers of adult entertainment services block
                                            access, IP addresses or Users, if this happens, you will not have access to the
                                            profile of the person providing the service. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="744">
                                <div id="heading2_6" class="card-header" len="320">
                                    <h2 class="mb-0" len="298"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_6" aria-expanded="false" aria-controls="collapse2_6"
                                            class="btn btn-link collapsed text-left" len="126" lang="en"> Does the
                                            registration expire or expire? </button></h2>
                                </div>
                                <div id="collapse2_6" aria-labelledby="heading2_6" data-parent="#accordion_general"
                                    class="collapse" len="269">
                                    <div class="card-body pl-3" len="235">
                                        <p len="228" lang="en"> - Registered profiles will be inactive after twelve months
                                            of not having any movement. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1214">
                                <div id="heading2_7" class="card-header" len="351">
                                    <h2 class="mb-0" len="329"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_7" aria-expanded="false" aria-controls="collapse2_7"
                                            class="btn btn-link collapsed text-left" len="157" lang="en"> View the profile
                                            and video gallery of the service provider </button></h2>
                                </div>
                                <div id="collapse2_7" aria-labelledby="heading2_7" data-parent="#accordion_general"
                                    class="collapse" len="708">
                                    <div class="card-body pl-3" len="674">
                                        <p len="667">
                                            <font len="100" lang="en"> - You can identify the person's profile by means of
                                                their ID number, name and cover image. </font><br len="0">
                                            <font len="258" lang="en"> - You can click on the cover image to enter the
                                                information of the service provider, where you can see the gallery options,
                                                profile, available schedule, price of services and special services,
                                                comments and ratings. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3 len="19" lang="en">Payments for services</h3>
                            <div class="card" len="1285">
                                <div id="heading2_8" class="card-header" len="294">
                                    <h2 class="mb-0" len="272"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_8" aria-expanded="false" aria-controls="collapse2_8"
                                            class="btn btn-link collapsed text-left" len="100" lang="en"> Means of payment
                                        </button></h2>
                                </div>
                                <div id="collapse2_8" aria-labelledby="heading2_8" data-parent="#accordion_general"
                                    class="collapse" len="836">
                                    <div class="card-body pl-3" len="802">
                                        <p len="795">
                                            <font len="150" lang="en"> - Currently Smirrow handles payments by debit and
                                                credit card, Bancolombia button, banking correspondent Bancolombia, Nequi,
                                                Pse through Wompi. </font><br len="0">
                                            <font len="91" lang="en"> - The user will be able to make payments through the
                                                options provided by e-payco and PayPal. </font><br len="0">
                                            <font len="118" lang="en"> - Please note that Smirrow is not responsible for
                                                payments made by the user outside the platform. </font><br len="0">
                                            <font len="111" lang="en"> - Please note that Wompi provides payment options in
                                                cash, with cards, PSE, digital applications etc. </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="3294">
                                <div id="heading2_9" class="card-header" len="305">
                                    <h2 class="mb-0" len="283"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_9" aria-expanded="false" aria-controls="collapse2_9"
                                            class="btn btn-link collapsed text-left" len="111" lang="en"> Refunds and
                                            compliance </button></h2>
                                </div>
                                <div id="collapse2_9" aria-labelledby="heading2_9" data-parent="#accordion_general"
                                    class="collapse" len="2834">
                                    <div class="card-body pl-3" len="2800">
                                        <p len="2793">
                                            <font len="108" lang="en"> - The refund of the payment is made only when an
                                                exception is presented within the guidelines of Smirrow. </font><br len="0">
                                            <font len="157" lang="en"> - Please note that, if the person providing adult
                                                entertainment services fails to comply with the requested service, their
                                                payment will be refunded. </font><br len="0">
                                            <font len="168" lang="en"> - Please note that if when requesting a service you
                                                do not receive the service due to non-compliance with the agreement of the
                                                request, you will not be refunded your payment. </font><br len="0">
                                            <font len="236" lang="en"> - Please note that the exceptions for the return of
                                                the payment made are for a fortuitous event or force majeure, so you must
                                                present evidence such as a legal document, a medical document, a video,
                                                photos etc. </font><br len="0">
                                            <font len="270" lang="en"> - Please note that when you fail to comply without
                                                presenting excuse or evidence and the person providing the service complies
                                                with going to provide the adult entertainment service, the money will not be
                                                refunded and the full payment will be made to the person providing the
                                                service. </font><br len="0">
                                            <font len="241" lang="en"> - Please note that as a user you will have eight (8)
                                                calendar days to present legal excuse, medium excuse or evidence for
                                                non-compliance, a term that will be counted from the next day of the
                                                unfulfilled date of the requested service. </font><br len="0">
                                            <font len="176" lang="en"> - Please note that Smirrow will have eight (8)
                                                business days to study the case and review the evidence presented to make a
                                                decision which will be communicated to the user. </font><br len="0">
                                            <font len="175" lang="en"> - Please note that the eight (8) business days will
                                                be counted from the next day of the fulfillment of the eighth day that the
                                                user has to present excuses and evidence. </font><br len="0">
                                            <font len="44" lang="en"> - You can send your case to legal@smirrow.com </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1235">
                                <div id="heading2_10" class="card-header" len="304">
                                    <h2 class="mb-0" len="282"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_10" aria-expanded="false" aria-controls="collapse2_10"
                                            class="btn btn-link collapsed text-left" len="108" lang="en"> Payment security
                                        </button></h2>
                                </div>
                                <div id="collapse2_10" aria-labelledby="heading2_10" data-parent="#accordion_general"
                                    class="collapse" len="773">
                                    <div class="card-body pl-3" len="739">
                                        <p len="732">
                                            <font len="130" lang="en"> - Smirrow has digital security on its platform, for
                                                anti-hacking with security certificates and code injections. </font><br
                                                len="0">
                                            <font len="91" lang="en"> - Please note that for security it is only allowed to
                                                make payments through Wompi. </font><br len="0">
                                            <font len="98" lang="en"> - Your payment made by transaction will be reflected
                                                in the statement as special services. </font><br len="0">
                                            <font len="52" lang="en"> - If your payment bounces write to pagos@smirrow.com
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1622">
                                <div id="heading2_11" class="card-header" len="308">
                                    <h2 class="mb-0" len="286"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_11" aria-expanded="false" aria-controls="collapse2_11"
                                            class="btn btn-link collapsed text-left" len="112" lang="en"> Failures to make
                                            a payment </button></h2>
                                </div>
                                <div id="collapse2_11" aria-labelledby="heading2_11" data-parent="#accordion_general"
                                    class="collapse" len="1156">
                                    <div class="card-body pl-3" len="1122">
                                        <p len="1115">
                                            <font len="162" lang="en"> - A failed transaction may be due to the Wompi
                                                platform update, so you will have to try up to 3 times or try 24 hours
                                                later. </font><br len="0">
                                            <font len="78" lang="en"> - A failed transaction can be due to failed entry of
                                                data: </font><br len="0">
                                            <font len="81" lang="en"> o A limitation by your bank to make transactions
                                                online. </font><br len="0">
                                            <font len="79" lang="en"> o Credit card details entered incorrectly by you.
                                            </font><br len="0">
                                            <font len="38" lang="en"> o Insufficient funds in your account. </font><br
                                                len="0">
                                            <font len="88" lang="en"> o Incorrect address, zip code or zip code data entered
                                                by you. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3 len="98" lang="en"> Notifications and shopping cart </h3>
                            <div class="card" len="1351">
                                <div id="heading2_12" class="card-header" len="300">
                                    <h2 class="mb-0" len="278"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_12" aria-expanded="false" aria-controls="collapse2_12"
                                            class="btn btn-link collapsed text-left" len="104" lang="en"> Shopping cart
                                        </button></h2>
                                </div>
                                <div id="collapse2_12" aria-labelledby="heading2_12" data-parent="#accordion_general"
                                    class="collapse" len="893">
                                    <div class="card-body pl-3" len="859">
                                        <p len="852">
                                            <font len="193" lang="en"> - The requests for services you make will be added to
                                                the shopping cart which you can see in the upper right of the site, when you
                                                click the list of purchases to be made is displayed. </font><br len="0">
                                            <font len="91" lang="en"> - Please note that you can add all the services you
                                                want to the shopping cart. </font><br len="0">
                                            <font len="167" lang="en"> - In the shopping cart option you can click to
                                                confirm request so that the service provider receives the notification about
                                                the request. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1471">
                                <div id="heading2_13" class="card-header" len="296">
                                    <h2 class="mb-0" len="274"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_13" aria-expanded="false" aria-controls="collapse2_13"
                                            class="btn btn-link collapsed text-left" len="100" lang="en"> Notifications
                                        </button></h2>
                                </div>
                                <div id="collapse2_13" aria-labelledby="heading2_13" data-parent="#accordion_general"
                                    class="collapse" len="1017">
                                    <div class="card-body pl-3" len="983">
                                        <p len="976">
                                            <font len="184" lang="en"> - When you confirm the request for the service, the
                                                person providing the adult entertainment service receives a notification to
                                                accept the request for the service. </font><br len="0">
                                            <font len="176" lang="en"> - If the person providing the adult entertainment
                                                service accepts, immediately a notification arrives to the user confirming
                                                and requesting to make the payment. </font><br len="0">
                                            <font len="171" lang="en"> - When the payment is made by the user, the person
                                                providing the adult entertainment service receives a notification about the
                                                payment made for their service. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3 len="11" lang="en">Promotions</h3>
                            <div class="card" len="1015">
                                <div id="heading2_14" class="card-header" len="304">
                                    <h2 class="mb-0" len="282"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_14" aria-expanded="false" aria-controls="collapse2_14"
                                            class="btn btn-link collapsed text-left" len="108" lang="en"> Promotion offers
                                        </button></h2>
                                </div>
                                <div id="collapse2_14" aria-labelledby="heading2_14" data-parent="#accordion_general"
                                    class="collapse" len="553">
                                    <div class="card-body pl-3" len="519">
                                        <p len="512">
                                            <font len="58" lang="en"> - The platform saves and reserves any promotion.
                                            </font><br len="0">
                                            <font len="82" lang="en"> - Please note that promotions may vary depending on
                                                the date and time of year. </font><br len="0">
                                            <font len="103" lang="en"> - The promotions that are made within the platform
                                                are exclusive to surprise its users. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3 len="18" lang="en">Chat &amp; Messaging </h3>
                            <div class="card" len="1173">
                                <div id="heading2_15" class="card-header" len="319">
                                    <h2 class="mb-0" len="297"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_15" aria-expanded="false" aria-controls="collapse2_15"
                                            class="btn btn-link collapsed text-left" len="123" lang="en"> Contact with
                                            service providers </button></h2>
                                </div>
                                <div id="collapse2_15" aria-labelledby="heading2_15" data-parent="#accordion_general"
                                    class="collapse" len="696">
                                    <div class="card-body pl-3" len="662">
                                        <p len="655">
                                            <font len="130" lang="en"> - Please note that the platform only enables chat and
                                                messaging when the user has made the payment for the service. </font><br
                                                len="0">
                                            <font len="112" lang="en"> - Please note that Smirrow has no responsibility for
                                                whatever you agree outside the platform. </font><br len="0">
                                            <font len="100" lang="en"> - Chat and messaging is encrypted so it is
                                                confidential and secured information. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3 len="9" lang="en">Taxation</h3>
                            <div class="card" len="1813">
                                <div id="heading2_16" class="card-header" len="298">
                                    <h2 class="mb-0" len="276"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_17" aria-expanded="false" aria-controls="collapse2_17"
                                            class="btn btn-link collapsed text-left" len="102" lang="en"> VAT tax </button>
                                    </h2>
                                </div>
                                <div id="collapse2_17" aria-labelledby="heading2_16" data-parent="#accordion_general"
                                    class="collapse" len="1357">
                                    <div class="card-body pl-3" len="1323">
                                        <p len="1316">
                                            <font len="131" lang="en"> - Value added tax is a consumption tax that is added
                                                to the value of goods or services purchased in a country. </font><br
                                                len="0">
                                            <font len="75" lang="en"> - The specific tax rate of VAT tax varies by country.
                                            </font><br len="0">
                                            <font len="122" lang="en"> - As its name says, the tax is added to the product
                                                or service at the time of purchase for the service. </font><br len="0">
                                            <font len="168" lang="en"> - Please note that due to the variation for the
                                                payment of the tax the value may change, since the rate to be paid is
                                                determined by each country where you make the purchase. </font><br len="0">
                                            <font len="200">
                                                <font lang="en"> - Please note that this tax is paid directly to the
                                                    competent authority depending on the country. </font>
                                                <font lang="en"><strong len="5">NOTE:</strong> </font>
                                                <font lang="en">If you have any other questions, you can write to us at
                                                    legal@smirrow.com </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1079">
                                <div id="heading2_17" class="card-header" len="327">
                                    <h2 class="mb-0" len="305"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_17" aria-expanded="false" aria-controls="collapse2_17"
                                            class="btn btn-link collapsed text-left" len="131" lang="en"> Who determines
                                            the value of VAT tax </button></h2>
                                </div>
                                <div id="collapse2_17" aria-labelledby="heading2_17" data-parent="#accordion_general"
                                    class="collapse" len="594">
                                    <div class="card-body pl-3" len="560">
                                        <p len="553">
                                            <font len="110" lang="en"> - Please note that you can find by your means the
                                                corresponding rate for you to check the tax. </font><br len="0">
                                            <font len="68" lang="en"> - The country where you are located is the one that
                                                imposes the tax rate. </font><br len="0">
                                            <font len="106" lang="en"> - Changes on the VAT tax rate are made only under the
                                                terms of law according to the country. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1253">
                                <div id="heading2_18" class="card-header" len="319">
                                    <h2 class="mb-0" len="297"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_18" aria-expanded="false" aria-controls="collapse2_18"
                                            class="btn btn-link collapsed text-left" len="123" lang="en"> Is VAT applied to
                                            all services? </button></h2>
                                </div>
                                <div id="collapse2_18" aria-labelledby="heading2_18" data-parent="#accordion_general"
                                    class="collapse" len="776">
                                    <div class="card-body pl-3" len="742">
                                        <p len="735">
                                            <font len="51" lang="en"> - It depends on the country where the tax is taxed.
                                            </font><br len="0">
                                            <font len="101" lang="en"> - Please note that most countries apply VAT on
                                                products and services. </font><br len="0">
                                            <font len="111" lang="en"> - Any purchase made by the User resident in a country
                                                that charges VAT will be subject to the local tax. </font><br len="0">|
                                            <font len="118">
                                                <font lang="en"><strong len="5">NOTE:</strong> </font>
                                                <font lang="en">Please note that Smirrow charges VAT only in countries that
                                                    apply this tax. </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3 len="71" lang="en"> Safety </h3>
                            <div class="card" len="832">
                                <div id="heading2_19" class="card-header" len="297">
                                    <h2 class="mb-0" len="275"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_19" aria-expanded="false" aria-controls="collapse2_19"
                                            class="btn btn-link collapsed text-left" len="101" lang="en"> Geolocation
                                        </button></h2>
                                </div>
                                <div id="collapse2_19" aria-labelledby="heading2_19" data-parent="#accordion_general"
                                    class="collapse" len="377">
                                    <div class="card-body pl-3" len="343">
                                        <p len="336" lang="en"> - Please note that adult entertainment providers can
                                            activate geolocation for their safety on the move. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1104">
                                <div id="heading2_20" class="card-header" len="302">
                                    <h2 class="mb-0" len="280"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_20" aria-expanded="false" aria-controls="collapse2_20"
                                            class="btn btn-link collapsed text-left" len="106" lang="en"> Address and
                                            telephone number </button></h2>
                                </div>
                                <div id="collapse2_20" aria-labelledby="heading2_20" data-parent="#accordion_general"
                                    class="collapse" len="644">
                                    <div class="card-body pl-3" len="610">
                                        <p len="603">
                                            <font len="221" lang="en"> - Please note that the platform mandatorily requests
                                                the user to register the address where he or she quotes the person providing
                                                the adult entertainment service for the safety of the parties. </font><br
                                                len="0">
                                            <font len="117" lang="en"> - Please note that the platform obligatorily requests
                                                the User to leave the registration of the contact number. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1087">
                                <div id="heading2_21" class="card-header" len="301">
                                    <h2 class="mb-0" len="279"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_21" aria-expanded="false" aria-controls="collapse2_21"
                                            class="btn btn-link collapsed text-left" len="105" lang="en"> Payments for
                                            services </button></h2>
                                </div>
                                <div id="collapse2_21" aria-labelledby="heading2_21" data-parent="#accordion_general"
                                    class="collapse" len="628">
                                    <div class="card-body pl-3" len="594">
                                        <p len="587">
                                            <font len="130" lang="en"> - Please note that Smirrow does not accept payments
                                                outside the platform, currently payments are made only through Wompi.
                                            </font><br len="0">
                                            <font len="198">
                                                <font lang="en"><strong len="5">NOTE:</strong> </font>
                                                <font lang="en">All data requested by Smirrow are under the legal protection
                                                    of security, policies of use and handling of personal data according to
                                                    the regulations of each country. </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3 len="68" lang="en"> Beginning </h3>
                            <div class="card" len="771">
                                <div id="heading2_22" class="card-header" len="288">
                                    <h2 class="mb-0" len="266"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_22" aria-expanded="false" aria-controls="collapse2_22"
                                            class="btn btn-link collapsed text-left" len="92" lang="en"> Notices </button>
                                    </h2>
                                </div>
                                <div id="collapse2_22" aria-labelledby="heading2_22" data-parent="#accordion_general"
                                    class="collapse" len="325">
                                    <div class="card-body pl-3" len="291">
                                        <p len="284" lang="en"> - Please note that when entering Smirrow, you will always
                                            come across help notices that we recommend taking into account for a good use of
                                            the platform. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="788">
                                <div id="heading2_23" class="card-header" len="306">
                                    <h2 class="mb-0" len="284"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_23" aria-expanded="false" aria-controls="collapse2_23"
                                            class="btn btn-link collapsed text-left" len="110" lang="en"> Mail verification
                                        </button></h2>
                                </div>
                                <div id="collapse2_23" aria-labelledby="heading2_23" data-parent="#accordion_general"
                                    class="collapse" len="324">
                                    <div class="card-body pl-3" len="290">
                                        <p len="283" lang="en"> - Please note that it is mandatory to verify your registered
                                            email so that you can receive notifications and make requests for services </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1886">
                                <div id="heading2_24" class="card-header" len="305">
                                    <h2 class="mb-0" len="283"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_24" aria-expanded="false" aria-controls="collapse2_24"
                                            class="btn btn-link collapsed text-left" len="109" lang="en"> Profile settings
                                        </button></h2>
                                </div>
                                <div id="collapse2_24" aria-labelledby="heading2_24" data-parent="#accordion_general"
                                    class="collapse" len="1423">
                                    <div class="card-body pl-3" len="1389">
                                        <p len="1382">
                                            <font len="200" lang="en"> - Keep in mind that the more complete your
                                                information is, the more confident the adult entertainment service provider
                                                will be to accept your request for a service. </font><br len="0">
                                            <font len="93" lang="en"> - Please note that you will not be able to request
                                                services if you do not fill in the profile information. </font><br len="0">
                                            <font len="163" lang="en"> - Please note that the data is private and will not
                                                be shown to third parties and only a few to the person providing the adult
                                                entertainment service. </font><br len="0">
                                            <font len="159" lang="en"> - The data that is visible to the person providing
                                                adult entertainment services are username, location, country, city and
                                                address. </font><br len="0">
                                            <font len="145">
                                                <font lang="en"><strong len="6">NOTE:</strong> </font>
                                                <font lang="en">For your safety you can use a username different from your
                                                    own before the people who provide services. </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1563">
                                <div id="heading2_25" class="card-header" len="294">
                                    <h2 class="mb-0" len="272"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_25" aria-expanded="false" aria-controls="collapse2_25"
                                            class="btn btn-link collapsed text-left" len="98" lang="en"> Verification
                                        </button></h2>
                                </div>
                                <div id="collapse2_25" aria-labelledby="heading2_25" data-parent="#accordion_general"
                                    class="collapse" len="1111">
                                    <div class="card-body pl-3" len="1077">
                                        <p len="1070">
                                            <font len="168" lang="en"> - For your safety and the safety of our service
                                                providers and providers, the platform asks you for a photo of your profile
                                                to verify your account. </font><br len="0">
                                            <font len="158" lang="en"> - Please note that the photo will not be seen by
                                                third parties, nor delivered to third parties, nor by the person providing
                                                adult entertainment service. </font><br len="0">
                                            <font len="262">
                                                <font lang="en"><strong len="5">NOTE:</strong> </font>
                                                <font lang="en">Smirrow gives priority to the protection of the identity of
                                                    our users and providers of adult entertainment services, so they are not
                                                    at risk of being identified by third parties or by any of the parties.
                                                </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1503">
                                <div id="heading2_26" class="card-header" len="289">
                                    <h2 class="mb-0" len="267"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_26" aria-expanded="false" aria-controls="collapse2_26"
                                            class="btn btn-link collapsed text-left" len="93" lang="en"> Languages
                                        </button></h2>
                                </div>
                                <div id="collapse2_26" aria-labelledby="heading2_26" data-parent="#accordion_general"
                                    class="collapse" len="1056">
                                    <div class="card-body pl-3" len="1022">
                                        <p len="1015">
                                            <font len="89" lang="en"> - The platform is in two languages for now, which are
                                                Spanish and English. </font><br len="0">
                                            <font len="210" lang="en"> - Please note that, to change the language, at the
                                                beginning of the Smirrow page, you can go to the top of the page and you
                                                will find two flag options, one for Spanish and one for English. </font><br
                                                len="0">
                                            <font len="271" lang="en"> - Please note that, to change the language already
                                                registered within the platform, you must go to the top in the image and name
                                                option, to click a menu will be extended where you will find two options of
                                                flags, one for Spanish and one for English. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1063">
                                <div id="heading2_27" class="card-header" len="303">
                                    <h2 class="mb-0" len="281"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_27" aria-expanded="false" aria-controls="collapse2_27"
                                            class="btn btn-link collapsed text-left" len="107" lang="en"> Smirrow Watermark
                                        </button></h2>
                                </div>
                                <div id="collapse2_27" aria-labelledby="heading2_27" data-parent="#accordion_general"
                                    class="collapse" len="602">
                                    <div class="card-body pl-3" len="568">
                                        <p len="561">
                                            <font len="129" lang="en"> - Please note that content within the platform is for
                                                the exclusive use of Smirrow, and is protected by copyright. </font><br
                                                len="0">
                                            <font len="167" lang="en"> - The images or videos you download from Smirrow will
                                                be watermarked and use without authorization by the platform may lead to
                                                legal penalties. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="783">
                                <div id="heading2_28" class="card-header" len="332">
                                    <h2 class="mb-0" len="310"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_28" aria-expanded="false" aria-controls="collapse2_28"
                                            class="btn btn-link collapsed text-left" len="136" lang="en"> Location of
                                            service providers </button></h2>
                                </div>
                                <div id="collapse2_28" aria-labelledby="heading2_28" data-parent="#accordion_general"
                                    class="collapse" len="293">
                                    <div class="card-body pl-3" len="259">
                                        <p len="252" lang="en"> - Please note that you can find people who provide adult
                                            entertainment services by country and city. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1252">
                                <div id="heading2_29" class="card-header" len="338">
                                    <h2 class="mb-0" len="316"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_29" aria-expanded="false" aria-controls="collapse2_29"
                                            class="btn btn-link collapsed text-left" len="142" lang="en"> Movements of
                                            service providers </button></h2>
                                </div>
                                <div id="collapse2_29" aria-labelledby="heading2_29" data-parent="#accordion_general"
                                    class="collapse" len="756">
                                    <div class="card-body pl-3" len="722">
                                        <p len="715">
                                            <font len="242" lang="en"> - The providers of adult entertainment services in
                                                their profile will have published the country, city, areas or localities
                                                where they provide their services, as well as trips to other cities or
                                                municipalities. </font><br len="0">
                                            <font len="164" lang="en"> - Please note that the person providing the adult
                                                entertainment service will only be able to provide their requested services
                                                at the requested location </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" acordion_three " len="13892">
                            <h3 len="6" lang="en" style="">Account</h3>
                            <div class="card " len="1471">
                                <div id="heading3_1" class="card-header" len="354">
                                    <h2 class="mb-0" len="332"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_1" aria-expanded="false" aria-controls="collapse3_1"
                                            class="btn btn-link text-left collapsed" len="160" lang="en" style=""> I can't
                                            log in to my account, my name and username are incorrect </button></h2>
                                </div>
                                <div id="collapse3_1" aria-labelledby="heading3_1" data-parent="#accordion_general"
                                    class="collapse" len="962" style="">
                                    <div class="card-body pl-4" len="928">
                                        <p len="921">
                                            <font len="101" lang="en"> - Check your email to see if your account has been
                                                flagged as suspicious or restricted. </font><br len="0">
                                            <font len="101" lang="en"> - If you have a penalty on the terms of service it is
                                                possible that it is temporarily blocked. </font><br len="0">
                                            <font len="109" lang="en"> - If you have a previous account on Smirrow with a
                                                penalty, your current account may be restricted. </font><br len="0">
                                            <font len="161" lang="en"> - If you believe you have been blocked by mistake
                                                please contact ayuda@smirrow.com with information or evidence that will
                                                allow us to review your situation within Smirrow. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1174">
                                <div id="heading3_2" class="card-header" len="298">
                                    <h2 class="mb-0" len="276"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_2" aria-expanded="false" aria-controls="collapse3_2"
                                            class="btn btn-link collapsed text-left" len="104" lang="en"> Delete your
                                            account </button></h2>
                                </div>
                                <div id="collapse3_2" aria-labelledby="heading3_2" data-parent="#accordion_general"
                                    class="collapse" len="721">
                                    <div class="card-body pl-4" len="687">
                                        <p len="680">
                                            <font len="203" lang="en"> - Enter the requested data in the delete account
                                                option, your account will be deleted and a confirmation email will be sent
                                                informing you that your account was successfully deleted. </font><br
                                                len="0">
                                            <font len="168" lang="en"> - Please note that your account will be completely
                                                deleted you will not be able to recover it, nor be restored, you will need
                                                to create a new account and reconfigure your entire profile. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1546">
                                <div id="heading3_3" class="card-header" len="299">
                                    <h2 class="mb-0" len="277"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_3" aria-expanded="false" aria-controls="collapse3_3"
                                            class="btn btn-link collapsed text-left" len="105" lang="en" style=""> Report
                                            an account </button></h2>
                                </div>
                                <div id="collapse3_3" aria-labelledby="heading3_3" data-parent="#accordion_general"
                                    class="collapse" len="1092">
                                    <div class="card-body pl-4" len="1058">
                                        <p len="1051">
                                            <font len="224" lang="en"> - To report an account of a service provider take the
                                                ID number and send us an email to legal@smirrow.com with the information or
                                                evidence that allows us to review the case within Smirrow. </font><br
                                                len="0">
                                            <font len="249" lang="en"> - To report a user requesting a service, take the
                                                service data, registration, day, time, date, username and information or
                                                evidence and write to us at the email legal@smirrow.com and we will review
                                                your case within Smirrow. </font><br len="0">
                                            <font len="133" lang="en"> - If any of the parties has infringed or committed a
                                                punishable offence, file a complaint with the competent legal authority.
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3 len="84" lang="en" style=""> Account Security </h3>
                            <div class="card " len="1243">
                                <div id="heading3_4" class="card-header" len="343">
                                    <h2 class="mb-0" len="321"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_4" aria-expanded="false" aria-controls="collapse3_4"
                                            class="btn btn-link collapsed text-left" len="149" lang="en"> What to do if you
                                            suspect someone else has accessed your account? </button></h2>
                                </div>
                                <div id="collapse3_4" aria-labelledby="heading3_4" data-parent="#accordion_general"
                                    class="collapse" len="745">
                                    <div class="card-body pl-4" len="711">
                                        <p len="704">
                                            <font len="111" lang="en"> - If you suspect that your account has been
                                                compromised, log in and try to change your password immediately. </font><br
                                                len="0">
                                            <font len="134" lang="en"> - To modify your password or recover your password go
                                                to the login page and enter the option "I forgot my password". </font><br
                                                len="0">
                                            <font len="146" lang="en"> - If when making these changes you are still unable
                                                to log in, please contact support for email help ayuda@smirrow.com. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3 len="18" lang="en">Technical questions</h3>
                            <div class="card " len="864">
                                <div id="heading3_5" class="card-header" len="310">
                                    <h2 class="mb-0" len="288"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_5" aria-expanded="false" aria-controls="collapse3_5"
                                            class="btn btn-link collapsed text-left" len="116" lang="en"> Email settings
                                        </button></h2>
                                </div>
                                <div id="collapse3_5" aria-labelledby="heading3_5" data-parent="#accordion_general"
                                    class="collapse" len="399">
                                    <div class="card-body pl-4" len="365">
                                        <p len="358" lang="en"> - A verified email address ensures that you receive
                                            important system notifications, will be able to reset your password, and receive
                                            updates about your account. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1796">
                                <div id="heading3_6" class="card-header" len="329">
                                    <h2 class="mb-0" len="307"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_6" aria-expanded="false" aria-controls="collapse3_6"
                                            class="btn btn-link collapsed text-left" len="135" lang="en"> Do you have a
                                            digital app for IOS or Android? </button></h2>
                                </div>
                                <div id="collapse3_6" aria-labelledby="heading3_6" data-parent="#accordion_general"
                                    class="collapse" len="1312">
                                    <div class="card-body pl-4" len="1278">
                                        <p len="1271">
                                            <font len="133" lang="en"> - Smirrow if you will have digital applications for
                                                your mobile, which you can download directly from the Smirrow web platform.
                                            </font><br len="0">
                                            <font len="146" lang="en"> - The platform works perfectly from a desktop
                                                computer and mobile device smartphone and tablet through its web and mobile
                                                web. </font><br len="0">
                                            <font len="145" lang="en"> - The advantage of downloading our app from the
                                                platform is that it should not be constantly updating, this will be done
                                                automatically. </font><br len="0">
                                            <font len="137" lang="en"> - Our technology is always improving, changing,
                                                updating to provide excellent performance and use of the product. </font><br
                                                len="0">
                                            <font len="169" lang="en"> - You should not download any digital application
                                                outside the platform, if so, consider it suspicious and you should inform us
                                                at the email legal@smirrow.com </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1905">
                                <div id="heading3_7" class="card-header" len="334">
                                    <h2 class="mb-0" len="312"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_7" aria-expanded="false" aria-controls="collapse3_7"
                                            class="btn btn-link collapsed text-left" len="140" lang="en"> How to create a
                                            shortcut on my mobile device? </button></h2>
                                </div>
                                <div id="collapse3_7" aria-labelledby="heading3_7" data-parent="#accordion_general"
                                    class="collapse" len="1416">
                                    <div class="card-body pl-4" len="1382">
                                        <p len="1375">
                                            <font len="107" lang="en"> - The easiest ways to enter Smirrow is to go to your
                                                browser and add it to the home screen. </font><br len="0">
                                            <font len="333" lang="en"> - If you have an iPhone or iPad, open safari on your
                                                mobile device, navigate to Smirrow, tap on the "share" option at the bottom,
                                                this icon looks square with an arrow pointing up and select the "Add to home
                                                screen" option, ready you will have access to Smirrow as if you had a
                                                digital app. </font><br len="0">
                                            <font len="358" lang="en"> - If you have an Android, open Chrome on your mobile
                                                device, navigate to Smirrow, tap "options", three vertical dots may appear
                                                at the top, then select the "add to home screen" option, then select add and
                                                voila, a shortcut similar to a digital app will be added and you can keep
                                                fast entering Smirrow. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1811">
                                <div id="heading3_8" class="card-header" len="314">
                                    <h2 class="mb-0" len="292"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_8" aria-expanded="false" aria-controls="collapse3_8"
                                            class="btn btn-link collapsed text-left" len="120" lang="en"> Privacy Address
                                            and Terms </button></h2>
                                </div>
                                <div id="collapse3_8" aria-labelledby="heading3_8" data-parent="#accordion_general"
                                    class="collapse" len="1342">
                                    <div class="card-body pl-4" len="1308">
                                        <p len="1301">
                                            <font len="177" lang="en"> - Please note that according to the legal regulations
                                                of the country where you are located and the evolution of technology, it
                                                will make the policies of terms and conditions may change. </font><br
                                                len="0">
                                            <font len="245" lang="en"> - The terms of service are constantly updated as a
                                                major effort to continuously simplify and improve the operation of Smirrow
                                                for all users and providers of adult entertainment services. </font><br
                                                len="0">
                                            <font len="174" lang="en"> - Please note that, if you do not accept and do not
                                                agree with the new terms that may be presented, you must delete your profile
                                                and stop using the platform. </font><br len="0">
                                            <font len="124" lang="en"> - To learn more about our terms, go to the login page
                                                and at the bottom select terms and conditions. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1651">
                                <div id="heading3_9" class="card-header" len="300">
                                    <h2 class="mb-0" len="278"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_9" aria-expanded="false" aria-controls="collapse3_9"
                                            class="btn btn-link collapsed text-left" len="106" lang="en"> Personal
                                            Information </button></h2>
                                </div>
                                <div id="collapse3_9" aria-labelledby="heading3_9" data-parent="#accordion_general"
                                    class="collapse" len="1196">
                                    <div class="card-body pl-4" len="1162">
                                        <p len="1155">
                                            <font len="304" lang="en"> - If any user or person providing adult entertainment
                                                services deletes the account and profile, all data related to your use of
                                                Smirrow, bank details, personal data and any data we hold about you, will be
                                                completely deleted after twelve (12) months. </font><br len="0">
                                            <font len="126" lang="en"> - We comply with the handling, use and security of
                                                personal data based on legal regulations according to the country. </font>
                                            <br len="0">
                                            <font len="144" lang="en"> - If you want to know more about the handling of
                                                personal data go to the login page, select the privacy option at the bottom.
                                            </font><br len="0">
                                            <font len="88" lang="en"> - If you have more questions and concerns, write to
                                                the email legal@smirrow.com </font>
                                        </p>
                                    </div>
                                </div>
                            </div> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0">
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="footer">
            Smirrow
        </div>
    </section>


@endsection
