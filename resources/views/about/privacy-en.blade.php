@extends('layouts.simple')
@yield('css_before')
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
@section('meta_description')Smirrow Politicas de privacidad | Conoce nuestras políticas de privacidad y sientete cómod@
con nuestro servicio@endsection @endsection
@section('title')@lang('messages.title_frecuency')@endsection
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/flag-icon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@section('css_before')
@endsection
@section('content')
    <div class="language" style="z-index: 900; position: absolute; right: 0;padding: 20px;cursor: pointer;">
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
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21Flag_of_Colombia.svg/200px-Flag_of_Colombia.svg.png"
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
                            <h2 class="text-light mt-4 ">Privacy</h2>
                        </div>
                    </div>
                </div>
            </a>
        </nav>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  position-static mb-5">
                    <ul class="list-group ">
                        <li class="list-group-item item-one smirrow-active c-pointer"> Security policies, handling, privacy
                            and your personal data</li>
                        <li class="list-group-item item-two c-pointer">Acceptable use policies</li>
                        <li class="list-group-item  item-three  c-pointer"> Complaints and claims policies</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8  res bg-light">
                    <div id="accordion_general" class="accordion  " len="48578">
                        <div class="acordion_one" len="26910">
                            <div class="card " len="3430">
                                <div id="heading1_1" class="card-header" len="328">
                                    <h2 class="mb-0" len="306"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_1" aria-expanded="false" aria-controls="collapse1_1"
                                            class="btn btn-link collapsed text-left" len="134" lang="en"> Privacy policy and
                                            use of personal data </button></h2>
                                </div>
                                <div id="collapse1_1" aria-labelledby="heading1_1" data-parent="#accordion_general"
                                    class="collapse" len="2947">
                                    <div class="card-body pl-4" len="2913">
                                        <p len="2906"><br len="0">
                                            <font lang="en"> The company listed above, hereinafter Smirrow, owns this site
                                                smirrow.com hereinafter, Smirrow. </font><br len="0">
                                            <font>
                                                <font lang="en"> In compliance with the provisions of Law 1581 of 2012
                                                    partially regulated by Decree 1377 of 2013 and Decree 886 of 2014,
                                                    standards compiled in the Single National Decree of the Commerce,
                                                    Industry and Tourism Sector 1074 of 2015 (Articles 2.2.2.25.1.1. to
                                                    2.2.2.26.3.4), this document adopts the POLICY OF PROTECTION AND
                                                    PROCESSING OF PERSONAL DATA with the purpose of protecting the personal
                                                    information provided by the partners, </font>
                                                <font lang="en">suppliers, customers, employees, users and any other natural
                                                    person from whom Smirrow obtains or processes personal information.
                                                </font>
                                            </font><br len="0">
                                            <font lang="en"> The collection and automated processing of personal data is
                                                intended for the proper functioning of the service provided by Smirrow, the
                                                maintenance of the commercial relationship in case there is one and the
                                                performance of tasks of information, advice and other activities of Smirrow.
                                            </font><br len="0">
                                            <font lang="en"> These data will only be transferred to those entities that are
                                                necessary for the sole purpose of complying with the aforementioned purpose.
                                            </font><br len="0">
                                            <font lang="en"> Smirrow, adopts the necessary measures to guarantee the
                                                security, integrity and confidentiality of the data and the free movement of
                                                these. </font><br len="0">
                                            <font>
                                                <font lang="en"> The user may at any time exercise the rights of access,
                                                    opposition, rectification and cancellation recognized in Colombian
                                                    regulations. </font>
                                                <font lang="en">The exercise of these rights can be done by the user himself
                                                    through email or address. </font>
                                            </font><br len="0">
                                            <font lang="en"> The user declares that all the data provided by him are true
                                                and correct, and undertakes to keep them updated, communicating the changes
                                                to Smirrow. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="2861">
                                <div id="heading1_2" class="card-header" len="329">
                                    <h2 class="mb-0" len="307"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_2" aria-expanded="false" aria-controls="collapse1_2"
                                            class="btn btn-link collapsed text-left" len="135" lang="en"> Purpose of the
                                            processing of personal data </button></h2>
                                </div>
                                <div id="collapse1_2" aria-labelledby="heading1_2" data-parent="#accordion_general"
                                    class="collapse" len="2377">
                                    <div class="card-body pl-4" len="2343">
                                        <p len="2336">
                                            <font lang="en"> We will process your personal data collected through the
                                                Smirrow, for the following purposes: </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> Profile created in Smirrow: To be able to provide you with
                                                    the requested service, so that you can publish your account in Smirrow.
                                                </font>
                                                <font lang="en">Remember that the data you provide when creating your
                                                    profile except for your email will be public. </font>
                                            </font><br len="0"><br len="0">
                                            <font>
                                                <font lang="en"> Contact within Smirrow: In order for you to contact
                                                    Smirrow, these data are private and will be sent to the HOLDER. </font>
                                                <font lang="en">We will never give up this data and we will never send you
                                                    any notification. </font>
                                                <font lang="en">In the event that you are a user, the person who contacts
                                                    you will never know your email unless you respond to the email sent by
                                                    the web. </font>
                                            </font><br len="0"><br len="0">
                                            <font>
                                                <font lang="en"> Report within Smirrow: To be able to report the misuse of
                                                    the Smirrow digital platform. </font>
                                                <font lang="en">This data is private and once an action has been taken, we
                                                    can respond by email to the actions taken. </font>
                                                <font lang="en">We will never give this data and we will never send you any
                                                    newsletter to them. </font>
                                            </font><br len="0"><br len="0">
                                            <font lang="en"> Send newsletters, as well as commercial communications of
                                                promotions and / or advertising of Smirrow or the websites administered by
                                                Smirrow, never of third parties. </font><br len="0"><br len="0">
                                            <font lang="en"> We remind you that you can oppose the sending of commercial
                                                communications by any means and at any time, by sending an email to the
                                                address indicated. </font><br len="0"><br len="0">
                                            <font lang="en"> Completing the profile and other tabs is mandatory for your
                                                account within Smirrow to be activated. </font><br len="0"><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1723">
                                <div id="heading1_3" class="card-header" len="354">
                                    <h2 class="mb-0" len="332"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_3" aria-expanded="false" aria-controls="collapse1_3"
                                            class="btn btn-link collapsed text-left  text-left" len="149" lang="en"> How
                                            long is the personal data collected kept? </button></h2>
                                </div>
                                <div id="collapse1_3" aria-labelledby="heading1_3" data-parent="#accordion_general"
                                    class="collapse" len="1214">
                                    <div class="card-body pl-4" len="1180">
                                        <p len="1173">
                                            <font lang="en"> The personal data provided will be kept as long as the
                                                commercial relationship is maintained or you do not request its deletion and
                                                during the period for which legal responsibilities may arise for the
                                                services provided. </font><br len="0">
                                            <font lang="en"> If you do not delete your account, Smirrow, will keep them
                                                public for a period of 2 years, after two years of inactivity your account
                                                will expire, we remind you that you can delete your profile at any time from
                                                your control panel. </font><br len="0">
                                            <font lang="en"> Once you delete your account, the law requires us to keep your
                                                deleted profile data for a period of one year in case there is a police,
                                                legal or judicial investigation, your data will not be public, but will
                                                physically be deleted when they reach this period. </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1975">
                                <div id="heading1_4" class="card-header" len="292">
                                    <h2 class="mb-0" len="270"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_4" aria-expanded="false" aria-controls="collapse1_4"
                                            class="btn btn-link collapsed text-left" len="98" lang="en"> Legitimation
                                        </button></h2>
                                </div>
                                <div id="collapse1_4" aria-labelledby="heading1_4" data-parent="#accordion_general"
                                    class="collapse" len="1528">
                                    <div class="card-body pl-4" len="1494">
                                        <p len="1487">
                                            <font lang="en"> The processing of your data is carried out with the following
                                                legal bases that legitimize it: </font><br len="0">
                                            <font lang="en"> The request to acquire a service through the Smirrow digital
                                                platform, whose terms and conditions will be made available in any case,
                                                prior to a possible contract. </font><br len="0">
                                            <font>
                                                <font lang="en"> The free, specific, informed and unequivocal consent, while
                                                    we inform you by making this privacy policy available to you, which,
                                                    after reading it, if you agree, you can accept by means of a statement
                                                    or a clear affirmative action, such as the marking of a box provided for
                                                    this purpose. </font>
                                                <font lang="en">In the event that you do not provide us with your data or do
                                                    so erroneously or incompletely, we will not be able to meet your
                                                    request, making it completely impossible to provide you with the
                                                    requested information or carry out the activation of the account so that
                                                    they acquire your services. </font>
                                            </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1517">
                                <div id="heading1_5" class="card-header" len="293">
                                    <h2 class="mb-0" len="271"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_5" aria-expanded="false" aria-controls="collapse1_5"
                                            class="btn btn-link collapsed text-left" len="99" lang="en"> Recipients
                                        </button></h2>
                                </div>
                                <div id="collapse1_5" aria-labelledby="heading1_5" data-parent="#accordion_general"
                                    class="collapse" len="1069">
                                    <div class="card-body pl-4" len="1035">
                                        <p len="1028">
                                            <font lang="en"> The data will not be communicated to any third party outside
                                                Smirrow, except legal obligation. </font><br len="0">
                                            <font lang="en"> As data processors, we have contracted external service
                                                providers, such as collection, management and administration companies,
                                                programming, hosting, having committed to compliance with the regulatory
                                                provisions, applicable in terms of data protection, at the time of hiring.
                                            </font><br len="0">
                                            <font lang="en"> If you contact a Smirrow service provider user, your data will
                                                be transferred to him/her because you have requested it in order to purchase
                                                a service. </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="866">
                                <div id="heading1_6" class="card-header" len="327">
                                    <h2 class="mb-0" len="305"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_6" aria-expanded="false" aria-controls="collapse1_6"
                                            class="btn btn-link collapsed text-left" len="133" lang="en"> Data collected by
                                            users of the services </button></h2>
                                </div>
                                <div id="collapse1_6" aria-labelledby="heading1_6" data-parent="#accordion_general"
                                    class="collapse" len="384">
                                    <div class="card-body pl-4" len="350">
                                        <p len="343">
                                            <font lang="en"> In cases where the user includes files with personal data on
                                                the shared hosting servers, Smirrow is not responsible for the user's breach
                                                of the GDPR. </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1472">
                                <div id="heading1_7" class="card-header" len="298">
                                    <h2 class="mb-0" len="276"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_7" aria-expanded="false" aria-controls="collapse1_7"
                                            class="btn btn-link collapsed text-left" len="104" lang="en"> Data retention
                                        </button></h2>
                                </div>
                                <div id="collapse1_7" aria-labelledby="heading1_7" data-parent="#accordion_general"
                                    class="collapse" len="1019">
                                    <div class="card-body pl-4" len="985">
                                        <p len="978">
                                            <font>
                                                <font lang="en"> Smirrow informs that, as a digital platform for the
                                                    collaborative economy and by virtue of the provisions of the Law, it
                                                    retains for a maximum period of 12 months the essential information to
                                                    identify the origin of the data hosted and the moment in which the
                                                    provision of the service began. </font>
                                                <font lang="en">The retention of these data does not affect the secrecy of
                                                    communications and may only be used in the framework of a criminal
                                                    investigation or for the safeguarding of public security, making
                                                    themselves available to judges and / or courts or the Ministry that
                                                    requires them. </font>
                                            </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1371">
                                <div id="heading1_8" class="card-header" len="332">
                                    <h2 class="mb-0" len="310"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_8" aria-expanded="false" aria-controls="collapse1_8"
                                            class="btn btn-link collapsed text-left  text-left" len="127" lang="en">
                                            Smirrow's Intellectual Property Rights </button></h2>
                                </div>
                                <div id="collapse1_8" aria-labelledby="heading1_8" data-parent="#accordion_general"
                                    class="collapse" len="884">
                                    <div class="card-body pl-4" len="850">
                                        <p len="843">
                                            <font lang="en"> Smirrow is the owner of all copyrights, intellectual property,
                                                industrial property, "know how" and any other rights related to the contents
                                                of the Smirrow website and the services offered therein, as well as the
                                                programs necessary for its implementation and related information. </font>
                                            <br len="0">
                                            <font lang="en"> The reproduction, publication and / or non-strictly private use
                                                of the contents, total or partial, of Smirrow is not allowed without the
                                                prior written consent. </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="2336">
                                <div id="heading1_9" class="card-header" len="311">
                                    <h2 class="mb-0" len="289"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_9" aria-expanded="false" aria-controls="collapse1_9"
                                            class="btn btn-link collapsed text-left text-left" len="107" lang="en"> Software
                                            Intellectual Property <i len="20">(Copyright)</i></button></h2>
                                </div>
                                <div id="collapse1_9" aria-labelledby="heading1_9" data-parent="#accordion_general"
                                    class="collapse" len="1870">
                                    <div class="card-body pl-4" len="1836">
                                        <p len="1829">
                                            <font lang="en"> The user must respect the third-party programs made available
                                                by Smirrow, even if they are free and/or publicly available. </font><br
                                                len="0">
                                            <font lang="en"> Smirrow has the necessary exploitation and intellectual
                                                property rights to the software. </font><br len="0">
                                            <font lang="en"> No type or classes of users acquire any right or license on the
                                                Smirrow digital platform, nor on the software necessary for the provision of
                                                services, nor on the technical information of monitoring the service, except
                                                for the rights and licenses necessary for the fulfillment of the services
                                                and only for the duration of these. </font><br len="0">
                                            <font lang="en"> For any action that exceeds the fulfillment of the service, the
                                                user will need written authorization from Smirrow, being forbidden to the
                                                user to access, modify, visualize the configuration, structure and files of
                                                the servers owned by Smirrow, assuming the civil and criminal responsibility
                                                derived from any incident that may occur in the servers and security systems
                                                as a direct result of a negligent or malicious action on their part. </font>
                                            <br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="3533">
                                <div id="heading1_10" class="card-header" len="332">
                                    <h2 class="mb-0" len="310"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_10" aria-expanded="false" aria-controls="collapse1_10"
                                            class="btn btn-link collapsed text-left" len="136" lang="en"> Intellectual
                                            property of the hosted content </button></h2>
                                </div>
                                <div id="collapse1_10" aria-labelledby="heading1_10" data-parent="#accordion_general"
                                    class="collapse" len="3043">
                                    <div class="card-body pl-4" len="3009">
                                        <p len="3002">
                                            <font lang="en"> The use contrary to intellectual property law of the services
                                                provided by Smirrow and, in particular, of: </font><br len="0">
                                            <font lang="en"> The use that is contrary to Colombian laws, good faith and
                                                constitutional principles or that infringes the rights of third parties.
                                            </font><br len="0">
                                            <font lang="en"> The publication or transmission of any content that, in
                                                Smirrow's opinion, is violent, obscene, abusive, illegal, racial, xenophobic
                                                or defamatory. </font><br len="0">
                                            <font lang="en"> Cracks, program serial numbers or any other content that
                                                infringes the intellectual property rights of third parties. </font><br
                                                len="0">
                                            <font lang="en"> The collection and / or use of personal data of other users
                                                without their express consent or in contravention of the provisions of the
                                                law, relating to the protection of natural persons with regard to the
                                                processing of personal data and the free movement of these. </font><br
                                                len="0">
                                            <font lang="en"> Using the domain's mail server and e-mail addresses for sending
                                                mass spam. </font><br len="0">
                                            <font lang="en"> The user has full responsibility for the content of his
                                                profile, the information transmitted and stored, hypertext links, the claims
                                                of third parties and legal actions in reference to intellectual property,
                                                rights of third parties and protection of minors. </font><br len="0">
                                            <font lang="en"> The user is responsible for the laws and regulations in force
                                                and the rules that have to do with the operation of the online service,
                                                electronic commerce, copyright, maintenance of public order, as well as
                                                universal principles of internet use. </font><br len="0">
                                            <font lang="en"> The user shall indemnify Smirrow for the expenses incurred by
                                                the imputation of charges in Smirrow for any cause whose responsibility was
                                                attributable to the user, including fees and expenses of legal defense, even
                                                in the case of a non-final judicial decision. </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="2048">
                                <div id="heading1_11" class="card-header" len="318">
                                    <h2 class="mb-0" len="296"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_11" aria-expanded="false" aria-controls="collapse1_11"
                                            class="btn btn-link collapsed text-left" len="122" lang="en"> Protection of
                                            hosted information </button></h2>
                                </div>
                                <div id="collapse1_11" aria-labelledby="heading1_11" data-parent="#accordion_general"
                                    class="collapse" len="1572">
                                    <div class="card-body pl-4" len="1538">
                                        <p len="1531">
                                            <font>
                                                <font lang="en"> Smirrow makes backup copies of the contents hosted on its
                                                    servers, however, it is not responsible for the loss or accidental
                                                    deletion of data by users. </font>
                                                <font lang="en">Similarly, it does not guarantee the total replacement of
                                                    the data deleted by the users, since the aforementioned data could have
                                                    been deleted and / or modified during the period of time elapsed since
                                                    the last backup. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> The services offered, except for the specific backup
                                                    services, do not include the replacement of the contents preserved in
                                                    the backup copies made by Smirrow, when this loss is attributable to the
                                                    user; </font>
                                                <font lang="en">in this case, a fee will be determined according to the
                                                    complexity and volume of the recovery, always prior acceptance of the
                                                    user. </font>
                                            </font><br len="0">
                                            <font lang="en"> The replacement of deleted data is only included in the price
                                                of the service when the loss of the content is due to causes attributable to
                                                Smirrow. </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1714">
                                <div id="heading1_12" class="card-header" len="308">
                                    <h2 class="mb-0" len="286"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_12" aria-expanded="false" aria-controls="collapse1_12"
                                            class="btn btn-link collapsed text-left" len="112" lang="en"> Commercial
                                            communications </button></h2>
                                </div>
                                <div id="collapse1_12" aria-labelledby="heading1_12" data-parent="#accordion_general"
                                    class="collapse" len="1248">
                                    <div class="card-body pl-4" len="1214">
                                        <p len="1207">
                                            <font lang="en"> In application of Habeas Data, Smirrow will not send
                                                advertising or promotional communications by email or other equivalent means
                                                of electronic communication that have not previously been requested or
                                                expressly authorized by the recipients of these. </font><br len="0">
                                            <font lang="en"> In the case of users with whom there is a previous
                                                relationship, Smirrow is authorized to send commercial communications
                                                regarding Smirrow products or services that are similar to those that were
                                                initially contracted with the client. </font><br len="0">
                                            <font lang="en"> In any case, the user, after proving his identity, may request
                                                that no more commercial information be sent to him through the Customer
                                                Service channels. </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1672">
                                <div id="heading1_13" class="card-header" len="348">
                                    <h2 class="mb-0" len="326"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_13" aria-expanded="false" aria-controls="collapse1_13"
                                            class="btn btn-link collapsed text-left text-left" len="142" lang="en"> What
                                            are your rights when you provide us with your data? </button></h2>
                                </div>
                                <div id="collapse1_13" aria-labelledby="heading1_13" data-parent="#accordion_general"
                                    class="collapse" len="1166">
                                    <div class="card-body pl-4" len="1132">
                                        <p len="1125">
                                            <font lang="en"> • Right to information </font><br len="0">
                                            <font lang="en"> • Right of access </font><br len="0">
                                            <font lang="en"> • Right to rectification </font><br len="0">
                                            <font lang="en"> • Right of cancellation </font><br len="0">
                                            <font lang="en"> • Right of limitation </font><br len="0">
                                            <font lang="en"> • Right to portability </font><br len="0">
                                            <font lang="en"> • Right to object </font><br len="0">
                                            <font lang="en"> You can write directly to the email privacidad@smirrow.com or
                                                write to WhatSapp No 322 378 1478 and we will attend to your claims,
                                                complaints and other concerns. </font><br len="0">
                                            <font lang="en"> The acceptable use policies and the complaints and claims
                                                policies adhere to these policies on security, handling, privacy and use of
                                                personal data. </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0">
                        </div>
                        <div class="acordion_two d-none" len="16063">
                            <div class="card " len="15783">
                                <div id="heading2_1" class="card-header" len="306">
                                    <h2 class="mb-0" len="284"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_1" aria-expanded="false" aria-controls="collapse2_1"
                                            class="btn btn-link collapsed text-left" len="112" lang="en"> Acceptable Use
                                            Policies </button></h2>
                                </div>
                                <div id="collapse2_1" aria-labelledby="heading2_1" data-parent="#accordion_general"
                                    class="collapse" len="15322">
                                    <div class="card-body pl-4" len="15288">
                                        <h5 len="147" lang="en"> By using our platform, you agree to these policies: </h5>
                                        <p len="15119">
                                            <font>
                                                <font lang="en"> These policies apply to your use of Smirrow and all Smirrow
                                                    services and content and form part of your agreement with us. </font>
                                                <font lang="en">These policies set out what is and is not allowed in
                                                    Smirrow. </font>
                                            </font><br len="0">
                                            <font lang="en"> In these policies, the defined terms have the same meaning as
                                                in our terms and conditions of use for all users and the policies of
                                                security, handling and privacy of personal data. </font><br len="0"> <br
                                                len="0">
                                            <font lang="en"> 1. Do not use Smirrow except for your own personal use and do
                                                not sell, rent, transfer or share your account or any services or content
                                                obtained from your use of Smirrow with anyone else. </font><br len="0">
                                            <font lang="en"> 2. Only use Smirrow in a way and for a purpose that is legal.
                                            </font><br len="0">
                                            <font lang="en"> 3. Do not upload, post, display or post services or content on
                                                Smirrow that is unlawful, fraudulent, defamatory, hateful, discriminatory,
                                                threatening or harassing, or that encourages or promotes violence or any
                                                illegal activity. </font><br len="0">
                                            <font lang="en"> 4. Do not use Smirrow in any way that could exploit, harm or
                                                attempt to exploit or harm anyone under the age of 18, for example by
                                                exposing them to inappropriate services or content. </font><br len="0">
                                            <font lang="en"> 5. Do not upload, post, display or publish services and content
                                                on Smirrow that: </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> to. </font>
                                                <font lang="en">Show, include, or refer to: </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - Any individual under the age of 18 (or referring to
                                                individuals under the age of 18 in general). </font><br len="0">
                                            <font lang="en"> - Any other person, unless you have written documentation
                                                confirming that all persons displayed or included or mentioned in your
                                                services and content are at least 18 years of age, and you have written
                                                consent from each person to use their name or images (or both) in the
                                                services and content. </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> b. </font>
                                                <font lang="en">Display, promote, advertise or refer to: </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - Firearms, weapons or any property whose sale, possession or
                                                use is subject to prohibitions or restrictions. </font><br len="0">
                                            <font lang="en"> - Drugs or drug paraphernalia. </font><br len="0">
                                            <font lang="en"> - Self-harm or suicide. </font><br len="0">
                                            <font lang="en"> - Incest. </font><br len="0">
                                            <font lang="en"> - Bestiality. </font><br len="0">
                                            <font lang="en"> - Violence, rape, lack of consent, hypnosis, intoxication,
                                                sexual assault, torture, sadomasochistic abuse or extreme slavery, extreme
                                                fisting or genital mutilation. </font><br len="0">
                                            <font lang="en"> - Pedophilia and necrophilia. </font><br len="0">
                                            <font lang="en"> - Urine material, eschatological or related to excrement.
                                            </font><br len="0">
                                            <font lang="en"> - Pornography (any sexually explicit material that depicts any
                                                person who has not given their prior, express and fully informed consent for
                                                that material to (a) be taken, captured or otherwise commemorated, or (b)
                                                published and shared on Smirrow. </font><br len="0">
                                            <font lang="en"> - Escort services, escort services, sexual services without
                                                consent, against the will and that is being forced (or) that person. </font>
                                            <br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> c. </font>
                                                <font lang="en">Contains unsolicited sexual services and content or
                                                    unsolicited language that sexually objectifies another user or any other
                                                    person in a non-consensual manner, or contains false or manipulated
                                                    sexual services and content in relation to another user or any other
                                                    person (including "deepfakes"). </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> d. </font>
                                                <font lang="en">Contains, promotes, publicizes or refers to hate speech
                                                    (content intended to vilify, humiliate, dehumanize, exclude, attack,
                                                    threaten or incite hatred, fear or violence against a group or
                                                    individual on the basis of race, ethnicity, nationality, immigration
                                                    status, caste, religion, sex, gender identity or expression, sexual
                                                    orientation, age, disability, serious illness, </font>
                                                <font lang="en">veteran status or any other protected feature). </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> and. </font>
                                                <font lang="en">Contains or refers to personal data or private or
                                                    confidential information of another person (e.g. telephone numbers,
                                                    location information (including GPS addresses and coordinates), names,
                                                    identity documents, email addresses, login credentials for Smirrow,
                                                    including passwords and security questions, financial information,
                                                    including bank account and credit card details, </font>
                                                <font lang="en">biometric data and medical records) without the express
                                                    written consent of that person. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> f. </font>
                                                <font lang="en">Any: </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - In the case of services and content with public nudity, it
                                                was recorded or broadcast from a country, state or province where public
                                                nudity is illegal. </font><br len="0">
                                            <font lang="en"> - In the case of services and content that features sexual
                                                activities, it was recorded or is being broadcast from a public place where
                                                members of the public are reasonably likely to see the activities being
                                                performed (this does not include outdoor venues where members of the public
                                                are not present, for example, private property such as a private backyard or
                                                isolated areas in nature where members of the public are not present).
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> g. </font>
                                                <font lang="en">It gives the impression that it comes from or is approved,
                                                    authorized or endorsed by us or any other person or company. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> h. </font>
                                                <font lang="en">Causes or is calculated to cause inconvenience or anxiety to
                                                    any other person or that may upset, embarrass, or cause a serious
                                                    offense to any other person. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> i. </font>
                                                <font lang="en">It is used or is intended to be used to extract money or
                                                    other benefit from any other person in exchange for the removal of
                                                    services and content. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> j. </font>
                                                <font lang="en">Involves or promotes third-party business activities or
                                                    sales, such as contests, sweepstakes and other sales promotions, product
                                                    placement, advertising or job advertisements or job advertisements
                                                    without our prior express consent. </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> 6. Do not use Smirrow to stalk, intimidate, abuse, harass,
                                                threaten or intimidate anyone else. </font><br len="0"> <br len="0">
                                            <font lang="en"> 7. Do not use Smirrow to engage in deceptive conduct, or
                                                conduct that may mislead or deceive any other user. </font><br len="0"> <br
                                                len="0">
                                            <font lang="en"> 8. Respect the intellectual property rights of creators,
                                                including by not recording, reproducing, sharing, communicating to the
                                                public, or distributing their services and content without authorization.
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> 9. Do not do anything that violates our rights or those of
                                                another person, including intellectual property rights (e.g., copyrights,
                                                trademarks, confidential information, and goodwill), personality rights,
                                                unfair competition, privacy, and data protection rights. </font><br len="0">
                                            <br len="0">
                                            <font lang="en"> 10. Do not impersonate us, one of our employees, another user
                                                or any other person or company, or falsely state or suggest any affiliation,
                                                endorsement, sponsorship between you and us or any other person or company.
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> 11. Do not provide false account registration information or
                                                make unauthorized use of another person's information, services, or content.
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> 12. Do not post or cause to be posted any services or content
                                                that is spammy, that has the intent or effect of artificially increasing the
                                                opinions or interactions of any user, or that is otherwise false,
                                                repetitive, misleading, or of low quality. </font><br len="0"> <br len="0">
                                            <font lang="en"> 13. Do not transmit, or send any pre-recorded audio or video
                                                material during a live broadcast or attempt to transmit the recorded
                                                material as a live broadcast. </font><br len="0"> <br len="0">
                                            <font lang="en"> 14. Do not use other means or methods (e.g., the use of
                                                keywords or signals) to communicate anything that violates this Policy.
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> 15. Do not reproduce, print, distribute, attempt to download,
                                                modify, create derivative works from, publicly display, publicly perform,
                                                republish, download, store or transmit any services and content, except as
                                                permitted by the terms and conditions of use. </font><br len="0"> <br
                                                len="0">
                                            <font lang="en"> 16. Do not intentionally introduce viruses, Trojan horses,
                                                worms, logic bombs or other material into the Services and content that is
                                                or may be malicious or technologically harmful. </font><br len="0"> <br
                                                len="0">
                                            <font lang="en"> 17. Do not decompile, disassemble, reverse engineer, or attempt
                                                to discover or derive the Smirrow source code. </font><br len="0"> <br
                                                len="0">
                                            <font lang="en"> 18. Do not use Smirrow in a manner that may adversely affect
                                                our systems or security or interfere with any other user's use of Smirrow,
                                                including your ability to engage in real-time activities through Smirrow.
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> 19. Do not use any automated program, tool or process (such as
                                                web crawlers, robots, spider bots and automated scripts) to access Smirrow
                                                or any server, network or system associated with Smirrow, or to extract,
                                                scrape, collect, harvest or collect content or information from Smirrow.
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> 20. Do not use the name, the Smirrow logo or any related or
                                                similar name, logo, product and service name, design or slogan, except in
                                                the limited forms that are expressly permitted in the terms and conditions
                                                of use or with our prior written agreement. </font><br len="0"> <br len="0">
                                            <font lang="en"> Failure to comply with these acceptable use policies may result
                                                in the suspension or termination of your account and the revocation of
                                                access to your earnings, as set forth in the terms and conditions of use.
                                            </font>
                                        </p> <br len="0">
                                    </div>
                                </div>
                            </div> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0">
                        </div>
                        <div class=" acordion_three d-none" len="5485">
                            <div class="card " len="5205">
                                <div id="heading3_1" class="card-header" len="310">
                                    <h2 class="mb-0" len="288"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_1" aria-expanded="false" aria-controls="collapse3_1"
                                            class="btn btn-link collapsed text-left" len="116" lang="en"> Complaints and
                                            Claims Policies </button></h2>
                                </div>
                                <div id="collapse3_1" aria-labelledby="heading3_1" data-parent="#accordion_general"
                                    class="collapse" len="4740">
                                    <div class="card-body pl-4" len="4706">
                                        <p len="4699"><br len="0">
                                            <font lang="en"> 1. Introduction: </font><br len="0">
                                            <font>
                                                <font lang="en"> This document sets out our complaints and claims policies.
                                                </font>
                                                <font lang="en">If you are a Smirrow user, this complaints and claims policy
                                                    is part of your agreement with us. </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> 2. Who we are and how to contact us: </font><br len="0">
                                            <font>
                                                <font lang="en"> Smirrow is operated by a private company. </font>
                                                <font lang="en">We are a public limited company legally registered in
                                                    Colombia, with company registration number, commercial registration and
                                                    WhatsApp number 322 378 1478 and email legal@smirrow.com </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> 3. Interpretation: </font><br len="0">
                                            <font lang="en"> In these complaints and claims policies, the defined terms have
                                                the same meaning as given to them in the terms and conditions of use for all
                                                users. </font><br len="0"> <br len="0">
                                            <font lang="en"> 4. Who can use this Complaints Policy?: </font><br len="0">
                                            <font lang="en"> Whether or not you are a Smirrow user, you can use these
                                                complaints and claims policies to alert us to any complaints and claims you
                                                have related to Smirrow. </font><br len="0"> <br len="0">
                                            <font lang="en"> 5. How to file a complaint and grievance: </font><br len="0">
                                            <font>
                                                <font lang="en"> If you have a complaint and grievance about Smirrow
                                                    (including any complaints and claims about the services and content
                                                    appearing on Smirrow or the conduct of a user), please submit your
                                                    complaint to legal@smirrow.com including your name, address, contact
                                                    details, a description of your complaint and claim and, if your
                                                    complaint and claim relates to the services and content, </font>
                                                <font lang="en">the URL of the services and content to which your complaint
                                                    and claim refers. </font>
                                            </font><br len="0">
                                            <font lang="en"> If you are unable to reach us by email, please write to us at
                                                WhatsApp number 322 378 1478. </font><br len="0"> <br len="0">
                                            <font lang="en"> 6. How we will treat your complaint and claim: </font><br
                                                len="0">
                                            <font lang="en"> After receiving your complaint according to numeral five (5)
                                                above: </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> to. </font>
                                                <font lang="en">We will take steps we deem appropriate to investigate your
                                                    complaint within a time frame that is appropriate to the nature of your
                                                    complaint. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> b. </font>
                                                <font lang="en">If we need more information or documents from you, we will
                                                    contact you to inform you. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> c. </font>
                                                <font lang="en">In good faith we will take such actions as we deem
                                                    appropriate to address the issue that has raised your complaint and
                                                    grievance. </font>
                                                <font lang="en">If you have complained and complained about the services and
                                                    content appearing on Smirrow and we are satisfied that the services and
                                                    content is illegal or violates our acceptable use policies, we will act
                                                    promptly to remove such services and content. </font>
                                            </font><br len="0">
                                            <font lang="en"> We are not obliged to inform you about the outcome of your
                                                complaint and claim. </font><br len="0"> <br len="0"> <br len="0">
                                            <font lang="en"> 7. Unjustified or abusive complaints: </font><br len="0">
                                            <font>
                                                <font lang="en"> If you are a Smirrow user, you warrant (meaning you make a
                                                    legally enforceable promise) that you will not file any complaints and
                                                    claims under these complaint and claims policies that are wholy
                                                    unjustified, abusive or in bad faith. </font>
                                                <font lang="en">If we determine that you have breached this warranty, we may
                                                    suspend or terminate your user account. </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0">
                        </div> <br len="0">
                    </div>
                </div>
            </div>

        </div>
        <div class="footer">
            Smirrow
        </div>
    </section>


@endsection
