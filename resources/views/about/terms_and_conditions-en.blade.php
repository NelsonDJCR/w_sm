@extends('layouts.simple')

@section('css_before')
    <style>
        body {
            justify-content: center;
        }

    </style>

@endsection
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

        var getBrowserInfo = function() {
            var ua = navigator.userAgent,
                tem,
                M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
            if (/trident/i.test(M[1])) {
                tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
                return 'IE ' + (tem[1] || '');
            }
            if (M[1] === 'Chrome') {
                tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
                if (tem != null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
            }
            M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
            if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);
            return M.join(' ');
        };

        console.log("Navegator is: " + getBrowserInfo());
    </script>
@endsection
@section('meta_description')@lang('messages.meta_description')@endsection
@section('title')Smirrow | Terms and Conditions @endsection
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
                            <h2 class="text-light mt-4 title-header">@lang('auth.terms_and_conditions')</h2>
                        </div>
                    </div>
                </div>
            </a>
        </nav>
        <div class="container">
            <div class="row mt-5">

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  position-static mb-5">

                    <ul class="list-group ">
                        <li class="list-group-item item-one smirrow-active c-pointer">@lang('auth.terms_and_conditions')
                        </li>
                        <li class="list-group-item item-two c-pointer">@lang('auth.terms_acquisitions')</li>
                        <li class="list-group-item  item-three c-pointer">@lang('auth.terms_bidders')</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8  res bg-light">
                    <div id="accordion_general" class="accordion  " len="147530">
                        <div class="acordion_one" len="99895">
                            <h3 len="22" lang="en" style="">Terms and Conditions</h3>
                            <div class="card" len="614">
                                <div id="heading1_" class="card-header" len="303">
                                    <h2 class="mb-0" len="281"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_" aria-expanded="false" aria-controls="collapse1_"
                                            class="btn btn-link collapsed text-left" len="111" lang="en"> Ownership of the
                                            website </button></h2>
                                </div>
                                <div id="collapse1_" aria-labelledby="heading1_" data-parent="#accordion_general"
                                    class="collapse" len="159">
                                    <div class="card-body pl-4" len="125">
                                        <p len="118" lang="en"> Smirrow – Whatsapp 322 378 1478. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="28144">
                                <div id="heading1_2" class="card-header" len="316">
                                    <h2 class="mb-0" len="294"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_2" aria-expanded="false" aria-controls="collapse1_2"
                                            class="btn btn-link collapsed text-left" len="122" lang="en"> Acceptance of the
                                            conditions of use </button></h2>
                                </div>
                                <div id="collapse1_2" aria-labelledby="heading1_2" data-parent="#accordion_general"
                                    class="collapse" len="27673">
                                    <div class="card-body pl-4" len="27639">
                                        <p len="27632"><br len="0">
                                            <font lang="en"> This WEBSITE is owned by the company described in point one of
                                                this document. </font><br len="0"><br len="0">
                                            <font lang="en"> These terms and conditions of use for all users govern your use
                                                on Smirrow and your agreement with us. </font><br len="0"><br len="0">
                                            <font>
                                                <font lang="en"> to. </font>
                                                <font lang="en">In the terms of service: </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> We refer to our website as Smirrow, even when you access it
                                                through the URL www.smirrow.com or through any web browser. </font><br
                                                len="0"> <br len="0">
                                            <font lang="en"> We clarify that by meaning content, it means any material
                                                uploaded to Smirrow by any user (whether a bidder or a acquirer) including
                                                photos, videos, audio, (music and sounds), transmission material, data,
                                                text, metadata, images, interactive features emojis, GIFs, memes and any
                                                other material. </font><br len="0"> <br len="0">
                                            <font lang="en"> The service provided by the Smirrow digital platform is that of
                                                hosting or web hosting on a server with a secure internet connection and
                                                software to be able to publish personal services, which develop an
                                                informative activity for free. </font><br len="0"> <br len="0">
                                            <font lang="en"> Smirrow, does not participate in the creation of any of the
                                                profiles on this site, they are profiles created by users, where Smirrow
                                                only hosts them. </font><br len="0"> <br len="0">
                                            <font lang="en"> The use of the portal attributes the condition of user and
                                                implies the acceptance of all the provisions included in these terms and
                                                conditions of use. </font><br len="0"> <br len="0">
                                            <font lang="en"> The insertion of profiles in the portal implies the acceptance
                                                of all the provisions of the terms and conditions of use. </font><br
                                                len="0"> <br len="0">
                                            <font lang="en"> Smirrow cannot assume any responsibility derived from the
                                                incorrect, inappropriate or illicit use of the information appearing in the
                                                Internet profiles of the digital platform. </font><br len="0"> <br len="0">
                                            <font lang="en"> Within the limits established by law, Smirrow does not assume
                                                any responsibility derived from the lack of veracity, integrity, updating
                                                and accuracy of the data or information contained in its digital platform by
                                                users, who are obliged to act in good faith and with truthful information.
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> The Smirrow digital platform may contain links to other
                                                    third-party pages that Smirrow cannot control. </font>
                                                <font lang="en">Therefore, Smirrow cannot assume responsibility for the
                                                    content that may appear on third-party pages. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> The texts, images, sounds, animations, software and other
                                                    content included in Smirrow are the exclusive property of its licensors.
                                                </font>
                                                <font lang="en">Any act of transmission, distribution, assignment,
                                                    reproduction, storage or total or partial public communication, must
                                                    have the express consent of Smirrow. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> Likewise, to access some of the services that Smirrow
                                                    offers through the digital platform, some personal data must be
                                                    provided. </font>
                                                <font lang="en">In compliance with the provisions of the Data Protection
                                                    Law, we inform you that, by completing these forms, your personal data
                                                    will be incorporated and will be treated in the files of Smirrow, in
                                                    order to be able to provide and offer our services, as well as to inform
                                                    you of the improvements of Smirrow. </font>
                                                <font lang="en">You can obtain more information in the policies of security,
                                                    handling and privacy of personal data. </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> In addition, we inform you of the possibility of exercising the
                                                rights of access, rectification, cancellation and opposition of your
                                                personal data, free of charge by email or by ordinary mail to Smirrow owner
                                                of the digital platform and establishes the following conditions of use.
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> b. </font>
                                                <font lang="en">Who we are and how to contact us: </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> We are a legally registered company in Colombia, to contact us
                                                with any questions about Smirrow, send an email to ayuda@smirrow.com, if you
                                                can not contact us by email, write to us at WhatsApp No 322 378 1478.
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> c. </font>
                                                <font lang="en">Change of terms and conditions of use: </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> Smirrow reserves the right to modify the conditions of use
                                                    of the digital platform. </font>
                                                <font lang="en">Therefore, it is the user's obligation to read them
                                                    periodically. </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> We may change any part of the terms and conditions of use
                                                without prior notice to you in the following circumstances: </font><br
                                                len="0"> <br len="0">
                                            <font lang="en"> - To reflect changes in laws and regulatory requirements that
                                                apply to Smirrow and Smirrow's services, features and programs where such
                                                changes are required where it does not allow us to give urgent notices.
                                            </font><br len="0">
                                            <font lang="en"> - To address an unforeseen and imminent danger related to the
                                                defense of Smirrow, by regulatory changes depending on the country where it
                                                operates, by users when committing fraud or crimes, by malware, spam, data
                                                breaches or other cybersecurity risks. </font><br len="0">
                                            <font lang="en"> - We may also make other changes to any part of the terms of
                                                service and will notify us through Smirrow. </font><br len="0">
                                            <font lang="en"> - You can unsubscribe at any time, if at the time of the
                                                changes taking effect, you continue to use Smirrow, you will be subject to
                                                the new terms and conditions of use. </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> d. </font>
                                                <font lang="en">Making changes, suspensions and withdrawals: </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - We may update and change Smirrow at any time and for any
                                                reason, including to reflect changes in our services, user needs, our
                                                business practices or to improve performance, functionality and security.
                                            </font><br len="0">
                                            <font lang="en"> - We will try to notify you in advance of any major changes.
                                            </font><br len="0">
                                            <font lang="en"> - We may suspend, withdraw, restrict the availability of all or
                                                part of Smirrow for commercial or operational reasons. </font><br len="0">
                                            <font lang="en"> - We do not warrant that Smirrow, or any content in it, will
                                                always be available or accessible without interruption. </font><br len="0">
                                            <font lang="en"> - We will try to give you reasonable notice of any suspension
                                                or withdrawal if it affects you. </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> and. </font>
                                                <font lang="en">Register with Smirrow: </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - You must first register by selecting one of the two options
                                                if you are a companion, a user offering adult entertainment services or if
                                                you are looking for a company, or a user who acquires services. </font><br
                                                len="0">
                                            <font lang="en"> - You must provide a valid email address, your name, username
                                                and password, accept terms and conditions of use or authenticate with a
                                                valid Facebook or Google account. </font><br len="0">
                                            <font lang="en"> - Your password must be unique and different for added
                                                security. </font><br len="0">
                                            <font lang="en"> - You must meet the password composition requirements in
                                                Smirrow. </font><br len="0">
                                            <font lang="en"> - To register you must be at least 18 years of age and you will
                                                be asked to confirm this by entering www.smirrow.com and accepting that you
                                                are of legal age. </font><br len="0">
                                            <font lang="en"> - You will only be allowed to be linked with Smirrow if you are
                                                of legal age. </font><br len="0">
                                            <font lang="en"> - You are not prohibited from accessing the platform according
                                                to the laws that apply to you according to the country where you reside.
                                            </font><br len="0">
                                            <font lang="en"> - If you do not meet the requirements of age of majority, you
                                                should not access, or use Smirrow. </font><br len="0"> <br len="0"> <br
                                                len="0"> <br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> f. </font>
                                                <font lang="en">Your commitment to us when you register and use Smirrow:
                                                </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - You assume and ensure that all information you send us is
                                                truthful, accurate and complete. </font><br len="0">
                                            <font lang="en"> - You will immediately update any information you have
                                                submitted to us as it changes. </font><br len="0">
                                            <font lang="en"> - You agree to receive communications from us electronically,
                                                including emails and messages posted on Smirrow and about the processing of
                                                your personal data as found in our personal data security, handling and
                                                privacy policies. </font><br len="0">
                                            <font lang="en"> - Will keep your account, login details confidential and
                                                secure, including your user details, passwords and any other information
                                                that is part of our security procedures and will not disclose them to anyone
                                                else. </font><br len="0">
                                            <font lang="en"> - You will contact ayuda@smirrow.com immediately if you believe
                                                someone has used or is using your account at the end of each session.
                                            </font><br len="0">
                                            <font lang="en"> - Assumes that you will take special care when accessing your
                                                account from a public or shared computer, ensuring that others will not be
                                                able to access your account, avoiding leaving your password or other
                                                personal information. </font><br len="0">
                                            <font lang="en"> - You are responsible for all activity on your account, even
                                                if, contrary to the terms and conditions of use, another person uses your
                                                account. </font><br len="0">
                                            <font lang="en"> - You accept and comply in full with these terms and conditions
                                                of use for all users. </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> g. </font>
                                                <font lang="en">Users' right to suspend, cancel and delete their account:
                                                </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - We may, but are not obligated to moderate or revise your
                                                content to verify compliance with the terms and conditions of use. </font>
                                            <br len="0">
                                            <font lang="en"> - It is our policy to suspend access to any content you post on
                                                Smirrow that we are knowledge of that may not comply with the terms and
                                                conditions of use. </font><br len="0">
                                            <font lang="en"> - If we suspend access to any of your content, you can request
                                                a review of our decision to suspend your content ayuda@smirros.com. </font>
                                            <br len="0">
                                            <font lang="en"> - Following our suspicion or illegality of relevant content, we
                                                may take any action we deem appropriate, including restoring access to the
                                                content, removing or permanently disabling access to the content without
                                                obtaining your consent and without prior notice to you. </font><br len="0">
                                            <font lang="en"> - You agree that you will provide us with all required
                                                information and reasonable assistance by providing us with copies of
                                                requests that we require for relevant investigations. </font><br len="0">
                                            <font lang="en"> - We will not be liable for any loss suffered by you, arising
                                                from the suspension of access to your content or to your account or profile,
                                                or for any other step we take in good faith to investigate any suspected
                                                breaches or illegality of your content under this section. </font><br
                                                len="0">
                                            <font lang="en"> - If we suspend access to your content or remove it, we will
                                                notify you by email or email to your Smirrrow account, but we are not
                                                required to notify you in advance of such removal. </font><br len="0">
                                            <font>
                                                <font lang="en"> - We reserve the right, in our sole discretion, to dispense
                                                    with your agreement with us and your access to Smirrow for any reason,
                                                    giving you 30 days' notice by email or email to your Smirrow account.
                                                </font>
                                                <font lang="en">We may also suspend access to your user account or terminate
                                                    your agreement with us and your access to Smirrow immediately and
                                                    without notice. </font>
                                            </font><br len="0">
                                            <font lang="en"> - If we believe that you have violated or may have seriously or
                                                repeatedly breached any part of the terms of service (including, in
                                                particular, our terms and conditions of use), or if you attempt or threaten
                                                to violate any part of the Terms in a way that has or could have serious
                                                consequences for us or another user. </font><br len="0">
                                            <font lang="en"> - If you take any action that, in our opinion, has caused or is
                                                reasonably likely to cause us to suffer a loss or otherwise damage Smirrow's
                                                reputation. </font><br len="0">
                                            <font lang="en"> - If we suspend access to your user account or wad your
                                                agreement with us and your access to Smirrow, we will let you know. </font>
                                            <br len="0">
                                            <font lang="en"> - During any period in which access to your user account is
                                                suspended, payments will be suspended until everything is clarified. </font>
                                            <br len="0">
                                            <font lang="en"> - We may retain all or part of the proceeds from your "my
                                                money" locker that are owed to you, but have not yet been paid, if you have
                                                breached, breached or committed any act or deed against the law and the
                                                terms and conditions of use. </font><br len="0">
                                            <font>
                                                <font lang="en"> - Upon termination of your account, we may treat your
                                                    content in the appropriate manner in accordance with our Personal Data
                                                    Security, Handling and Privacy Policies (including deleting it) and you
                                                    will no longer have the right to access your content. </font>
                                                <font lang="en">There is no technical feature in Smirrow for you to access
                                                    your account after your account is cancelled. </font>
                                            </font><br len="0">
                                            <font lang="en"> - We may investigate any alleged or alleged misuse, abuse or
                                                unlawful use of Smirrow and cooperate with competent law enforcement legal
                                                entities in such investigation. </font><br len="0">
                                            <font lang="en"> - We may disclose any information or records we hold or control
                                                about your use of Smirrow to competent law enforcement legal entities in
                                                connection with any police investigation of any suspected illegal activity,
                                                or in response to a court order. </font><br len="0">
                                            <font lang="en"> - We may change the third-party payment providers we use and,
                                                if we do, we will notify you and store the corresponding details in your
                                                Smirrow account. </font><br len="0">
                                            <font>
                                                <font lang="en"> - Apart from the content, all rights in and to Smirrow and
                                                    all its content, features, databases, source code and functionality are
                                                    owned by us and/or our licensors. </font>
                                                <font lang="en">Such material is protected by copyright and may be protected
                                                    by trademarks, trade secrets, and other intellectual property laws.
                                                </font>
                                            </font><br len="0">
                                            <font lang="en"> - Smirrow will have permission from all users to use its
                                                content, if we deem it convenient for advertising. </font><br len="0">
                                            <font lang="en"> - We are the sole and exclusive owners of any and all
                                                anonymised data relating to your use of Smirrow and such anonymous data may
                                                be used by us for any purpose, including for commercial, development and
                                                research purposes. </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> h. </font>
                                                <font lang="en">What we are not responsible for: </font>
                                            </font><br len="0">
                                            <font lang="en"> - We will use reasonable care and skill to deliver the best use
                                                of the Smirrow platform, but there are certain things for which we are not
                                                responsible, as indicated below: </font><br len="0">
                                            <font lang="en"> - We do not authorize, nor do we endorse the content on
                                                Smirrow, nor the opinions expressed by all Smirrow users because they do not
                                                necessarily represent our opinions. </font><br len="0">
                                            <font>
                                                <font lang="en"> - We do not grant any rights in relation to the content to
                                                    any user. </font>
                                                <font lang="en">These rights can only be granted to you by one of the
                                                    service providers. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> - Your content can be viewed by people who recognize your
                                                    identity. </font>
                                                <font lang="en">We will not be liable in any way to you if you are
                                                    identified from your content. </font>
                                                <font lang="en">While we may, from time to time and in our sole discretion,
                                                    offer certain geolocation or geolocation technology on Smirrow, you
                                                    understand and agree that we do not warrant the accuracy or
                                                    effectiveness of such technology, and you will have no claim against us
                                                    arising out of your use of or reliance on any geolocation technology,
                                                    geofencing, watermarking on Smirrow. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> - All content is created, selected and provided by users
                                                    and not by us. </font>
                                                <font lang="en">We are not responsible for reviewing or moderating content,
                                                    and we do not select or modify content that is stored or transmitted
                                                    through Smirrow. </font>
                                                <font lang="en">We have no obligation to monitor the Content or detect
                                                    breaches of the terms and conditions of use. </font>
                                            </font><br len="0">
                                            <font lang="en"> - You agree that you have no obligation to follow any
                                                suggestions, comments, reviews or instructions received from another Smirrow
                                                user and that, if you choose to do so, you do so at your own risk. </font>
                                            <br len="0">
                                            <font lang="en"> - We are not responsible for the type of user who comes to
                                                Smirrow by references from another user. </font><br len="0">
                                            <font>
                                                <font lang="en"> - We do not promise that Smirrow will be compatible with
                                                    all devices and operating systems. </font>
                                                <font lang="en">You are responsible for configuring the information
                                                    technology, device and software to access Smirrow. </font>
                                            </font><br len="0">
                                            <font lang="en"> - You must use your own virus protection software. </font><br
                                                len="0">
                                            <font lang="en"> - We are not responsible for the availability of the Internet
                                                or for any errors in your connections, device or other equipment or software
                                                that may occur in connection with your use of Smirrow. </font><br len="0">
                                            <font lang="en"> - While we try to make sure that Smirrow is safe and free of
                                                bugs and viruses, we cannot promise that it will be and have no control over
                                                the content provided by users. </font><br len="0">
                                            <font lang="en"> - We are not responsible for any user accounts, passwords,
                                                lost, stolen or compromised email accounts, or any resulting unauthorized
                                                activity or unauthorized payments or withdrawals of funds resulting. </font>
                                            <br len="0">
                                            <font lang="en"> - You acknowledge that once your content and services are
                                                posted on Smirrow, we cannot and will not be liable to you for the use that
                                                other users or third parties make of such content. </font><br len="0">
                                            <font lang="en"> - You may delete your account at any time, but acknowledge that
                                                deleting your account will not in itself prevent the circulation of your
                                                content that may have been registered by other users in violation of the
                                                terms and conditions of use or by third parties prior to the deletion of
                                                your account. </font><br len="0">
                                            <font lang="en"> - Smirrow is not responsible if you as a user use a number and
                                                bank account of a third party. </font><br len="0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="2722">
                                <div id="heading1_3" class="card-header" len="296">
                                    <h2 class="mb-0" len="274"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_3" aria-expanded="false" aria-controls="collapse1_3"
                                            class="btn btn-link collapsed text-left" len="102" lang="en"> Age of majority.
                                        </button></h2>
                                </div>
                                <div id="collapse1_3" aria-labelledby="heading1_3" data-parent="#accordion_general"
                                    class="collapse" len="2271">
                                    <div class="card-body pl-4" len="2237">
                                        <p len="2230"><br len="0">
                                            <font>
                                                <font lang="en"> This digital platform is intended exclusively for people of
                                                    legal age. </font>
                                                <font lang="en">Therefore, the use of Smirrow and navigation through it by
                                                    minors is expressly prohibited. </font>
                                                <font lang="en">Likewise, we do not admit minors with parental permission,
                                                    nor legally emancipated minors. </font>
                                                <font lang="en">If you are a minor, leave Smirrow immediately. </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> Smirrow reserves the right to delete, block and not allow new
                                                publications to any user about whom there are suspicions or indications that
                                                he is a minor. </font><br len="0"> <br len="0">
                                            <font lang="en"> Smirrow reserves the right to ask any user for a legal document
                                                accrediting (C.C., C.E., NIT, PASSPORT) showing their age and an identifying
                                                photograph to resume the service. </font><br len="0"> <br len="0">
                                            <font lang="en"> Smirrow does not accept minors who want to provide services
                                                within the platform, for this it also requests a selfie photo,
                                                identification number and bank account number. </font><br len="0"> <br
                                                len="0">
                                            <font lang="en"> The profiles created have the security provided by Smirrow
                                                through its web platform. </font><br len="0"> <br len="0">
                                            <font lang="en"> We take the control of the age of majority of users very
                                                seriously, so if we detect false reports by one user to another user, we can
                                                permanently restrict the service and the service to the one who misuses the
                                                Smirrow reporting system. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="2942">
                                <div id="heading1_4" class="card-header" len="313">
                                    <h2 class="mb-0" len="291"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_4" aria-expanded="false" aria-controls="collapse1_4"
                                            class="btn btn-link collapsed text-left" len="119" lang="en"> Linking to and
                                            from Smirrow </button></h2>
                                </div>
                                <div id="collapse1_4" aria-labelledby="heading1_4" data-parent="#accordion_general"
                                    class="collapse" len="2474">
                                    <div class="card-body pl-4" len="2440">
                                        <p len="0"></p>
                                        <h4 len="18" lang="en">Links to Smirrow:</h4> <br len="0">
                                        <font lang="en"> You can link your social networks in Smirrow's profile settings, in
                                            the description box, as long as you do so in a way that is fair and legal and
                                            does not damage our reputation or take advantage of it, but you must not
                                            establish a link in such a way as to suggest any form of association, approval
                                            or endorsement on our part. </font><br len="0">
                                        <font>
                                            <font lang="en"> If you are a offering user, when promoting your account, you
                                                must comply with our terms and conditions of use and the terms of service of
                                                any other website where you place a link or promote your account and
                                                services. </font>
                                            <font lang="en">When promoting your account and services, you should not
                                                impersonate Smirrow, or give the impression that we promote your account and
                                                services, if this is not the case. </font>
                                        </font><br len="0">
                                        <font lang="en"> You must not promote your Smirrow account through the use of Google
                                            Ads or any similar advertising platform or search engine advertising service.
                                        </font><br len="0">
                                        <font>
                                            <font lang="en"> If Smirrow contains links to other sites and resources provided
                                                by third parties, these links are provided for your convenience only.
                                            </font>
                                            <font lang="en">Such links should not be construed as an endorsement by us of
                                                those linked websites or information you may obtain from them. </font>
                                            <font lang="en">We have no control over the content of those sites or resources
                                                and accept no responsibility for them or for any loss or damage that may
                                                arise from your use of them. </font>
                                            <font lang="en">If you decide to access any of the third party websites linked
                                                to Smirrow, you do so at your own risk and subject to the terms and
                                                conditions of use of such websites. </font>
                                        </font>
                                        <p len="0"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="2246">
                                <div id="heading1_5" class="card-header" len="302">
                                    <h2 class="mb-0" len="280"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_5" aria-expanded="false" aria-controls="collapse1_5"
                                            class="btn btn-link collapsed text-left" len="108" lang="en"> How do I delete my
                                            account? </button></h2>
                                </div>
                                <div id="collapse1_5" aria-labelledby="heading1_5" data-parent="#accordion_general"
                                    class="collapse" len="1789">
                                    <div class="card-body pl-4" len="1755">
                                        <p len="1748"><br len="0">
                                            <font lang="en"> If you wish to delete your Smirrow account, you can do so in
                                                the "Delete Account" option of your Smirrow account. </font><br len="0">
                                            <font lang="en"> If you are an acquiring user or a bidding user, the deletion of
                                                your account will take place within a reasonable time after your request.
                                            </font><br len="0">
                                            <font lang="en"> If you are both the acquiring user and the bidding user, your
                                                account will be deleted in two stages (first the acquiring user and then the
                                                bidding user). </font><br len="0">
                                            <font lang="en"> Once your account has been deleted, you will not be charged any
                                                additional amounts or have access to your previous Smirrow account, and the
                                                registration will be deleted and cannot be renewed later. </font><br
                                                len="0">
                                            <font>
                                                <font lang="en"> You will receive an email confirmation after the successful
                                                    deletion of your account. </font>
                                                <font lang="en">Once your account has been deleted, we may treat your
                                                    Content in the appropriate manner in accordance with our personal data
                                                    security, handling and privacy policy (including deleting it) and you
                                                    will no longer have the right to access your account. </font>
                                                <font lang="en">There is no technical function in Smirrow for you to access
                                                    your account after cancellation. </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="6388">
                                <div id="heading1_6" class="card-header" len="348">
                                    <h2 class="mb-0" len="326"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_6" aria-expanded="false" aria-controls="collapse1_6"
                                            class="btn btn-link collapsed text-left" len="154" lang="en"> Who is responsible
                                            for any loss or damage suffered by you? </button></h2>
                                </div>
                                <div id="collapse1_6" aria-labelledby="heading1_6" data-parent="#accordion_general"
                                    class="collapse" len="5885">
                                    <div class="card-body pl-4" len="5851">
                                        <p len="5844"><br len="0">
                                            <font>
                                                <font lang="en"> to. </font>
                                                <font lang="en">If you are an Acquiring User: If you are an Acquiring User,
                                                    you agree that: </font>
                                            </font><br len="0">
                                            <font lang="en"> We and our subsidiary companies, employees, owners,
                                                representatives and agents will not be liable to you for any loss of
                                                profits, loss of business or income, business interruption, loss of business
                                                opportunities or loss of anticipated savings that you suffer due to or in
                                                connection with your use of Smirrow. </font><br len="0">
                                            <font>
                                                <font lang="en"> b. </font>
                                                <font lang="en">If you are a bidding user: If you are a bidding user, you
                                                    agree that: </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> We and our subsidiaries, employees, owners, representatives
                                                    and agents are excluded (to the extent permitted by law) from all
                                                    implied terms, warranties, representations or other terms that may apply
                                                    to Smirrow or any content thereof. </font>
                                                <font lang="en">This means that, if the terms and conditions of use do not
                                                    expressly include a promise or undertaking on our part, then we are not
                                                    implied by law. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> We are not liable to you for any loss or damage suffered by
                                                    you that is not a foreseeable result of our breach of the terms and
                                                    conditions of use or our lack of reasonable care and skill. </font>
                                                <font lang="en">Loss or damage is foreseeable if it is obvious that it will
                                                    happen or if, at the time you accepted the terms and conditions of use,
                                                    both we and you knew it could happen. </font>
                                            </font><br len="0">
                                            <font lang="en"> We are not liable to you for any loss or damage, whether in
                                                contract, tort (including negligence), breach of statutory obligation or
                                                otherwise, even if foreseeable, arising out of or in connection with:
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - Your inability to use Smirrow or any of its services,
                                                functions or programs. </font><br len="0">
                                            <font lang="en"> - Your use of or reliance on any content (including Content)
                                                stored on Smirrow. </font><br len="0">
                                            <font lang="en"> - We are not liable to you for, lost profits, loss of sales,
                                                business or revenue, business interruption, loss of anticipated savings,
                                                loss of business opportunities, goodwill or reputation, loss of data or
                                                information, including any content, indirect or consequential loss or
                                                damage. </font><br len="0">
                                            <font>
                                                <font lang="en"> We are not liable to you for any loss or damage caused by a
                                                    distributed denial-of-service attack, virus, ransomware or other
                                                    technologically harmful material that may infect your computer
                                                    equipment, computer programs, data or other proprietary material due to
                                                    your use of Smirrow or any of its services, functions or programs, or
                                                    due to the download of any material posted on Smirrow, </font>
                                                <font lang="en">or on any website linked to Smirrow. </font>
                                            </font><br len="0">
                                            <font lang="en"> We are not liable to you if your content is copied,
                                                distributed, republished elsewhere or if another user or third party
                                                infringes your copyright. </font><br len="0">
                                            <font lang="en"> We are not liable to you for any disclosure of your identity,
                                                or any disclosure or publication of your personal information by other users
                                                or third parties without your consent (also known as "doxing"). </font><br
                                                len="0">
                                            <font>
                                                <font lang="en"> We are not liable to you for any failure or delay on our
                                                    part in complying with any part of the terms and conditions of use
                                                    arising from events beyond our reasonable control. </font>
                                                <font lang="en">If there is any failure or delay on our part in complying
                                                    with any part of the terms and conditions of use arising from an event
                                                    beyond our reasonable control, we will contact you as soon as possible
                                                    to inform you and take steps to minimize the effect of the delay.
                                                </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="997">
                                <div id="heading1_7" class="card-header" len="314">
                                    <h2 class="mb-0" len="292"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_7" aria-expanded="false" aria-controls="collapse1_7"
                                            class="btn btn-link collapsed text-left" len="120" lang="en" style=""> Smirrow
                                            Service Definition </button></h2>
                                </div>
                                <div id="collapse1_7" aria-labelledby="heading1_7" data-parent="#accordion_general"
                                    class="collapse" len="528">
                                    <div class="card-body pl-4" len="494">
                                        <p len="487" lang="en"> The service of the digital platform consists of the
                                            provision of free software for the creation of profiles of service providers
                                            that can be acquired by users who have a digital electronic device and a secure
                                            internet connection. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="15224">
                                <div id="heading1_8" class="card-header" len="316">
                                    <h2 class="mb-0" len="294"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_8" aria-expanded="false" aria-controls="collapse1_8"
                                            class="btn btn-link collapsed text-left" len="122" lang="en"> General conditions
                                            on users </button></h2>
                                </div>
                                <div id="collapse1_8" aria-labelledby="heading1_8" data-parent="#accordion_general"
                                    class="collapse" len="14753">
                                    <div class="card-body pl-4" len="14719">
                                        <p len="14704"><br len="0">
                                            <font lang="en"> To publish on the digital platform the user has to complete the
                                                profile, which will be subject to verification and validation by Smirrow,
                                                once accepted will receive an email for the activation of the account to
                                                start using it. </font><br len="0">
                                            <font lang="en"> Once the profile is created, the user will be able to manage
                                                his account from his panel, if he loses his access he can recover it in the
                                                option recover password. </font><br len="0"> <br len="0">
                                            <font lang="en"> Smirrow, under the request of modification, deletion or others
                                                on a profile, will only accept them when they come from the user management
                                                email that owns the profile, never from another. </font><br len="0"> <br
                                                len="0">
                                            <font lang="en"> A profile will remain published until the user decides to
                                                delete it, if the user does not update his profile in two (2) years, Smirrow
                                                reserves the right to delete it. </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> Smirrow is defined as a digital portal that provides
                                                    software so that users can offer services and acquire services with
                                                    acceptable bases of security and guarantees. </font>
                                                <font lang="en">Smirrow reserves the right to delete any profile with
                                                    erroneous data. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> The user is responsible for everything he publishes, his
                                                    actions and any damage he may cause. </font>
                                                <font lang="en">Smirrow will make any information required immediately
                                                    available to the police, courts or governmental and judicial entities.
                                                </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> Smirrow is not responsible for what a user may publish,
                                                likewise, Smirrow is not responsible for the contents they transmit or host
                                                or to which they facilitate access, if they do not participate in their
                                                elaboration or do not have knowledge of the illegality of these. </font><br
                                                len="0"> <br len="0">
                                            <font lang="en"> Smirrow will be responsible if it knows the illegality of a
                                                content published by a user and does not act quickly to remove it or make it
                                                impossible to access it, so that, if a user provides information and
                                                documents the illegality of any content, Smirrow will enable all the
                                                computer means it has so that it is not repeated. </font><br len="0"> <br
                                                len="0">
                                            <font lang="en"> In the event that Smirrow receives a complaint for an alleged
                                                copyright infringement or has proof through a report of the publication of a
                                                false or untruthful phone in a user, Smirrow may request documentation that
                                                proves such complaint. </font><br len="0"> <br len="0">
                                            <font lang="en"> The user undertakes to use the portal, its contents and
                                                services in accordance with: </font><br len="0"> <br len="0">
                                            <font lang="en"> - The Law or any other rules of the applicable legal system.
                                            </font><br len="0">
                                            <font lang="en"> - These terms and conditions of use. </font><br len="0">
                                            <font lang="en"> - The Publication Rules. </font><br len="0">
                                            <font lang="en"> - Good customs. </font><br len="0">
                                            <font lang="en"> - Public order. </font><br len="0">
                                            <font lang="en"> - Good faith. </font><br len="0"> <br len="0">
                                            <font lang="en"> The user must create his profile in the appropriate category
                                                and the locality in which he is located and commit to: </font><br len="0">
                                            <font>
                                                <font lang="en"> Not to commit through the Smirrow digital platform any
                                                    crime included in the criminal code or in any other applicable national
                                                    regulations. </font>
                                                <font lang="en">Specifically, and without limitation, but exemplifying, it
                                                    is strictly prohibited on the Smirrow digital platform: </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - Trafficking in human beings. </font><br len="0">
                                            <font lang="en"> - Modern slavery. </font><br len="0">
                                            <font lang="en"> - Organ trafficking. </font><br len="0">
                                            <font lang="en"> - Drug trafficking. </font><br len="0">
                                            <font lang="en"> - The commission of crimes against sexual freedom and
                                                indemnity. </font><br len="0">
                                            <font lang="en"> - Do not incite to act illegally. </font><br len="0">
                                            <font lang="en"> - Not to disseminate defamation, slander, slander and /or
                                                content or propaganda of a racist, xenophobic nature, advocating terrorism
                                                or that violate human rights. </font><br len="0">
                                            <font lang="en"> - Do not manifest falsehoods or mislead. </font><br len="0">
                                            <font lang="en"> - Not to impersonate other users using their access codes to
                                                the different services and / or contents of the Portal. </font><br len="0">
                                            <font lang="en"> - Do not abuse the "report" system. </font><br len="0">
                                            <font lang="en"> - Do not disseminate unsolicited or authorized communications.
                                            </font><br len="0">
                                            <font lang="en"> - Do not disseminate messages that violate the dignity of third
                                                parties or that are rude or disrespectful. </font><br len="0">
                                            <font lang="en"> - Not to use robots, spiders, scrapers or any other automatic
                                                means to access the Portal to copy, remove, renew or publish content without
                                                the prior written consent of Smirrow. </font><br len="0">
                                            <font lang="en"> - Not to store or in any way collect information or personal
                                                data of third parties without their consent, including email addresses.
                                            </font><br len="0">
                                            <font lang="en"> - Do not dodge, avoid or "skip" the measures used to prevent or
                                                restrict access to the Portal. </font><br len="0">
                                            <font lang="en"> - It is necessary to complete all the mandatory fields of the
                                                profile to activate an account. </font><br len="0">
                                            <font lang="en"> - You have to respect the categories and sections (demand vs
                                                supply). </font><br len="0">
                                            <font lang="en"> - It is not allowed to create a profile identical or similar to
                                                another already published. </font><br len="0">
                                            <font lang="en"> - It is not allowed to use fictitious emails to create a
                                                profile. </font><br len="0">
                                            <font lang="en"> - It is not allowed to write false information on the created
                                                profile. </font><br len="0">
                                            <font lang="en"> - It is not allowed to use keywords ("Keyword Spamming").
                                            </font><br len="0">
                                            <font lang="en"> - It is not allowed to use systems or tools for mass and/or
                                                automatic publication or renewal, without the prior written consent of
                                                Smirrow. </font><br len="0">
                                            <font lang="en"> - It is not allowed to copy, process or distribute the text and
                                                / or photos or images of third parties without their prior authorization.
                                            </font><br len="0">
                                            <font lang="en"> - It is not allowed to include the phone number or email
                                                outside the fields explicitly provided to include this information in the
                                                created profile. </font><br len="0"> <br len="0">
                                            <font lang="en"> Smirrow will immediately inform the competent authorities of
                                                any suspicion or indication it has of the commission of a crime through the
                                                Smirrow platform, reserving the right to totally and permanently restrict
                                                access to it by those allegedly involved. </font><br len="0"> <br len="0">
                                            <font lang="en"> The information provided by the user must at all times be
                                                truthful, the user responding for all those statements, data, contents,
                                                information and details that are false, vague or inaccurate. </font><br
                                                len="0"> <br len="0">
                                            <font lang="en"> In the case of the communication of personal data in the
                                                fulfillment of the questionnaires of registration as a user and the
                                                publication of an offer, this information must be true, accurate and
                                                coincidental. </font><br len="0"> <br len="0">
                                            <font lang="en"> The user undertakes and undertakes to communicate any future
                                                change or modification of their personal data, adapting them, accordingly,
                                                to their real situation. </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> The inaccuracy of the information exempts Smirrow from any
                                                    responsibility for the lack of user information in relation to the
                                                    offers and services, provided that Smirrow, had acted with due diligence
                                                    in its communications. </font>
                                                <font lang="en">In any case, the user will be solely responsible for the
                                                    false or inaccurate statements made and the damages caused to Smirrow,
                                                    other users or third parties for the information provided. </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> For the purposes of this agreement of terms and conditions of
                                                use, the use of nicknames or pseudonyms to identify users on the portal will
                                                not be considered un veracity, as long as this does not pose an obstacle to
                                                knowing the real identity of the same or carry out the charges corresponding
                                                to the services acquired by users. </font><br len="0"> <br len="0">
                                            <font lang="en"> a. General: You agree that </font><br len="0">
                                            <font lang="en"> - If any aspect of your agreement with us cannot be enforced,
                                                the remainder will remain in effect. </font><br len="0">
                                            <font lang="en"> - If we do not enforce any aspect of your agreement with us, it
                                                will not be a waiver. </font><br len="0">
                                            <font lang="en"> - We reserve all rights not expressly granted to you. </font>
                                            <br len="0">
                                            <font lang="en"> - No implied licenses or other rights are granted to you in
                                                relation to any part of Smirrow, except as expressly set forth in the terms
                                                and conditions of use. </font><br len="0">
                                            <font>
                                                <font lang="en"> - Your agreement with us does not grant rights to third
                                                    parties, except for the exclusions and limitations of liability in the
                                                    section entitled Who is responsible for any loss or damage suffered by
                                                    you? </font>
                                                <font lang="en">may be executed by our subsidiaries, employees, owners,
                                                    representatives and agents. </font>
                                            </font><br len="0">
                                            <font lang="en"> - You may not transfer your rights or obligations under your
                                                agreement with us without our prior written consent. </font><br len="0">
                                            <font>
                                                <font lang="en"> - Our rights and obligations under your agreement with us
                                                    may be assigned or transferred by us to others. </font>
                                                <font lang="en">For example, this could occur if our ownership changes (such
                                                    as in a merger, acquisition, or sale of assets) or by law. </font>
                                                <font lang="en">In addition, we may choose to delegate the performance of
                                                    any of our obligations under your agreement with us to any third party,
                                                    but we will remain liable to you for the performance of such
                                                    obligations. </font>
                                            </font><br len="0">
                                            <font lang="en"> - The Terms of Service form the entire agreement between us and
                                                you with respect to your access to and use of Smirrow, and supersede any and
                                                all prior oral or written agreements or agreements between us and you.
                                            </font>
                                        </p>
                                        <p len="0"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="3418">
                                <div id="heading1_9" class="card-header" len="438">
                                    <h2 class="mb-0" len="416"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_9" aria-expanded="false" aria-controls="collapse1_9"
                                            class="btn btn-link collapsed text-left" len="244">
                                            <font lang="en"> Procedure in case of carrying out activities of a nature
                                            </font><br len="0">
                                            <font lang="en"> improper, incorrect or fraudulent data </font>
                                        </button></h2>
                                </div>
                                <div id="collapse1_9" aria-labelledby="heading1_9" data-parent="#accordion_general"
                                    class="collapse" len="2825">
                                    <div class="card-body pl-4" len="2791">
                                        <p len="2784"><br len="0">
                                            <font>
                                                <font lang="en"> In the event that any user or third party considers that
                                                    there are facts or circumstances that reveal the improper nature of any
                                                    content and / or the performance of any activity on the digital platform
                                                    and, in particular, the publication of uncontained images, violation of
                                                    intellectual property rights, breach of the duties and obligations
                                                    provided for in these terms and conditions of use or the violation of
                                                    any other rights, </font>
                                                <font lang="en">you must send a notification to Smirrow to the
                                                    legal@smirrow.com mail containing the following points: </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - Personal data of the claimant: name, address, telephone
                                                number and email address. </font><br len="0">
                                            <font lang="en"> - Specification of the alleged illegal activity carried out on
                                                the web platform and, in particular, when it comes to an alleged violation
                                                of rights, precise and concrete indication of the protected contents, as
                                                well as their location on the Website. </font><br len="0">
                                            <font lang="en"> - Facts or circumstances that reveal the illicit nature of said
                                                activity. </font><br len="0">
                                            <font lang="en"> - In the event of violation of rights, handwritten signature or
                                                equivalent, with the personal data of the owner of the rights allegedly
                                                infringed or of the person authorized to act in the name and on behalf of
                                                this. </font><br len="0">
                                            <font lang="en"> - Express, clear and under the responsibility of the claimant
                                                statement that the information provided in the notification is accurate and
                                                of the improper nature of the use of the contents or the performance of the
                                                activities described. </font><br len="0"> <br len="0">
                                            <font lang="en"> Smirrow will proceed immediately to adopt the measures for the
                                                correction or elimination, where appropriate, of the aforementioned
                                                contents. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="7600">
                                <div id="heading1_10" class="card-header" len="316">
                                    <h2 class="mb-0" len="294"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_10" aria-expanded="false" aria-controls="collapse1_10"
                                            class="btn btn-link collapsed text-left" len="120" lang="en"> Intellectual and
                                            industrial property </button></h2>
                                </div>
                                <div id="collapse1_10" aria-labelledby="heading1_10" data-parent="#accordion_general"
                                    class="collapse" len="7126">
                                    <div class="card-body pl-4" len="7092">
                                        <p len="7085"><br len="0">
                                            <font>
                                                <font lang="en"> Smirrow hosts both its own content and user-created
                                                    content. </font>
                                                <font lang="en">Smirrow does not agree to give license or permission on all
                                                    content created by users or themselves subject to intellectual or
                                                    industrial property rights, including, but not limited to, source code,
                                                    texts, images, logos, trademarks and designs. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> Unless authorized by Smirrow or unless legally permitted,
                                                    the user may not copy, modify, distribute, sell, rent or otherwise
                                                    exploit Smirrow content (except for the user's own content). </font>
                                                <font lang="en">Likewise, the user may not carry out disassembly or
                                                    decompilation operations, reverse engineering or any other operation
                                                    aimed at obtaining any source code content belonging to the Smirrow
                                                    digital platform. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> By publishing a profile, the user grants Smirrow a
                                                    non-exclusive, worldwide, perpetual, irrevocable, free, sublicensable
                                                    and transferable right to exploit the profile created (including,
                                                    without limitation, its reproduction, distribution, public
                                                    communication, transformation and making available to the public) so
                                                    that Smirrow may use it in all means and modalities of exploitation.
                                                </font>
                                                <font lang="en">Smirrow reserves the right to remove content in case it
                                                    violates the law, these terms and conditions of use or the rights of
                                                    third parties. </font>
                                            </font><br len="0">
                                            <font lang="en"> You confirm that you own all intellectual property rights
                                                (examples of which are copyrights and trademarks) in your content or that
                                                you have obtained all necessary rights in your content that are required for
                                                the use and licensing with respect to your content to us. </font><br
                                                len="0">
                                            <font lang="en"> This includes any rights required and thus not to infringe
                                                national and international standards and in any territory in which Smirrow
                                                is accessible and, in particular, in those of the Organization of American
                                                States, the United States of America, the United Kingdom and the European
                                                Union. </font><br len="0">
                                            <font>
                                                <font lang="en"> The permission you grant us is perpetual, non-exclusive,
                                                    worldwide, royalty-free, sublicensable, assignable and transferable by
                                                    us. </font>
                                                <font lang="en">This means that the permission will continue even after your
                                                    agreement with us ends and you stop using Smirrow, that we do not have
                                                    to pay you for permission and that we may use your content to conduct
                                                    advertising and digital marketing for Smirrow on and off the Smirrow
                                                    platform. </font>
                                                <font lang="en">This permission will allow us, for example, to add stickers,
                                                    text and watermarks to your content, to make your content available to
                                                    Smirrow, as well as to use your content for other normal Smirrow
                                                    operations. </font>
                                                <font lang="en">We will never sell your content to other platforms, although
                                                    we may sell or transfer any permission you give us in the Terms and
                                                    Conditions of Use in the event of a sale of our company or its assets to
                                                    a third party. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> While we do not own your content, you grant us the limited
                                                    right to send notices of infringement (including copyright or trademark)
                                                    on your behalf to any third-party website or service that hosts or deals
                                                    with the infringement of copies of your content without your permission.
                                                </font>
                                                <font lang="en">Although we have no obligation to do so, we may at any time
                                                    send or withdraw such notice to any third party website or service where
                                                    we deem it appropriate. </font>
                                                <font lang="en">However, we do not have and have no obligation to monitor
                                                    violations of your content. </font>
                                                <font lang="en">You agree that, upon request, you will provide us with all
                                                    consents and other information that we reasonably need to send notices
                                                    of infringement on your behalf. </font>
                                            </font><br len="0">
                                            <font lang="en"> Please refer to our complaints and claims policies to learn how
                                                to file a complaint about infringement of intellectual property rights.
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> You waive any moral rights you may have under any
                                                    applicable law to object to the derogatory treatment of any content
                                                    posted by you on Smirrow. </font>
                                                <font lang="en">This waiver does not in any way affect your ownership of the
                                                    intellectual property rights in your content or the rights you have to
                                                    prevent your content from being copied without your permission. </font>
                                                <font lang="en">The disclaimer is intended to allow us, when dealing with
                                                    your content to add watermarks, stickers or text to your content.
                                                </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="2399">
                                <div id="heading1_11" class="card-header" len="322">
                                    <h2 class="mb-0" len="300"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_11" aria-expanded="false" aria-controls="collapse1_11"
                                            class="btn btn-link collapsed text-left" len="126" lang="en"> Exclusion of
                                            guarantees and liability </button></h2>
                                </div>
                                <div id="collapse1_11" aria-labelledby="heading1_11" data-parent="#accordion_general"
                                    class="collapse" len="1919">
                                    <div class="card-body pl-4" len="1885">
                                        <p len="0"></p>
                                        <h4 len="1869"><br len="0">
                                            <font>
                                                <font lang="en"> to. </font>
                                                <font lang="en">Availability and Continuity of the Portal and Services
                                                </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> Smirrow does not guarantee the availability, access and/or
                                                    continuity of operation of the digital platform and its services.
                                                </font>
                                                <font lang="en">Likewise, Smirrow will not be responsible, with the limits
                                                    established by law, for the damages caused to the user as a result of
                                                    the unavailability, access failures and lack of continuity of the
                                                    digital platform and its services. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> b. </font>
                                                <font lang="en">Contents and Services of a profile. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> Smirrow will be solely and exclusively responsible for the
                                                    services it provides by itself and for the contents directly originated
                                                    by Smirrow and identified with its copyright. </font>
                                                <font lang="en">This responsibility will be excluded in cases where there
                                                    are causes of force majeure or in cases where the configuration of the
                                                    User's equipment is not adequate to allow the correct use of the
                                                    services provided by the Smirrow digital platform. </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> The Portal is not responsible for the possible appearance of
                                                digital portals indexed in search engines outside the portal, once they have
                                                been unsubscribed from our databases. </font>
                                            <p len="0"></p>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="3906">
                                <div id="heading1_12" class="card-header" len="316">
                                    <h2 class="mb-0" len="294"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_12" aria-expanded="false" aria-controls="collapse1_12"
                                            class="btn btn-link collapsed text-left" len="120" lang="en"> Third Party
                                            Content and Services </button></h2>
                                </div>
                                <div id="collapse1_12" aria-labelledby="heading1_12" data-parent="#accordion_general"
                                    class="collapse" len="3432">
                                    <div class="card-body pl-4" len="3398">
                                        <p len="3391"><br len="0">
                                            <font>
                                                <font lang="en"> Smirrow does not previously review or control, approve or
                                                    own the contents, products, services, opinions, communications, data,
                                                    files and any kind of information of third parties collected in Smirrow.
                                                </font>
                                                <font lang="en">Likewise, it does not guarantee the legality, reliability,
                                                    usefulness, veracity, accuracy, completeness and timeliness of the
                                                    contents, information and services of third parties in Smirrow. </font>
                                                <font lang="en">Nor does it guarantee in any way that the users of the
                                                    platform use the contents and / or services of this in accordance with
                                                    the law, the applicable regulations, public order or these terms and
                                                    conditions of use. </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> Smirrow does not control in advance and does not guarantee the
                                                absence of viruses and other elements in the contents and services provided
                                                by third parties through the Portal that may introduce alterations in the
                                                access equipment, documents or files stored in them. </font><br len="0"> <br
                                                len="0">
                                            <font>
                                                <font lang="en"> Smirrow is not responsible for the dumped contents or the
                                                    acts committed by other users. </font>
                                                <font lang="en">Nor is it responsible for any loss or damage as a result of
                                                    the presence of viruses or other elements in the contents and services
                                                    provided by third parties. </font>
                                                <font lang="en">In addition, Smirrow will not be liable for damages of any
                                                    kind arising from the negligent or malicious use of email accounts used
                                                    to create a profile or respond. </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> In any case, Smirrow will not be responsible, either indirectly
                                                or subsidiarily, for the economic loss or reputation, nor for any kind of
                                                special, indirect or consequential damages, resulting from the use of the
                                                digital platform by the user. </font><br len="0"> <br len="0">
                                            <font lang="en"> The exemption from liability indicated in the previous
                                                paragraph will apply in the event that Smirrow does not have effective
                                                knowledge that the activity or information stored is illegal or that it
                                                damages the property or rights of a third party susceptible to compensation,
                                                or if they have it acts diligently to remove the data and contents or make
                                                access to them impossible. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1875">
                                <div id="heading1_13" class="card-header" len="311">
                                    <h2 class="mb-0" len="289"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_13" aria-expanded="false" aria-controls="collapse1_13"
                                            class="btn btn-link collapsed text-left" len="115" lang="en"> Payment and
                                            security services </button></h2>
                                </div>
                                <div id="collapse1_13" aria-labelledby="heading1_13" data-parent="#accordion_general"
                                    class="collapse" len="1406">
                                    <div class="card-body pl-4" len="1372">
                                        <p len="1365">
                                            <font lang="en"> Smirrow has the Wompi payment platform, payments outside the
                                                platform named above are not accepted. </font>
                                            <font lang="en">Smirrow charges a fee of 15% to the bidders, of which it is
                                                divided into 11% as a commission for the use of the platform and the other
                                                4% is on the withholding that the platform must make to the offering users
                                                for the payment of said tax that is the obligation of each offering user and
                                                a rate of 19% as a service fee, </font>
                                            <font lang="en">which works to improve security, cover operational costs for the
                                                development and maintenance of the technology necessary for the proper
                                                functioning of the digital platform. </font>
                                            <font lang="en">The acquiring user charges a fee of 15%, divided into an 11%
                                                commission for the use of the platform and 4% as a gift to exclusively
                                                improve the security part of the users. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="6017">
                                <div id="heading1_14" class="card-header" len="330">
                                    <h2 class="mb-0" len="308"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_14" aria-expanded="false" aria-controls="collapse1_14"
                                            class="btn btn-link collapsed text-left" len="134" lang="en"> Fraud, Returns
                                            and Compliance Policies </button></h2>
                                </div>
                                <div id="collapse1_14" aria-labelledby="heading1_14" data-parent="#accordion_general"
                                    class="collapse" len="5529">
                                    <div class="card-body pl-4" len="5495">
                                        <p len="5488"><br len="0">
                                            <font>
                                                <font lang="en"> Smirrow takes very seriously any fraudulent use with credit
                                                    cards or banking operations made by our users. </font>
                                                <font lang="en">Therefore, users responsible for this type of action will be
                                                    permanently blocked from our site and their data may be communicated to
                                                    the relevant authorities. </font>
                                            </font><br len="0">
                                            <font lang="en"> We remind you that, according to our terms of service, we may
                                                limit or terminate our service, remove the content hosted on it and adopt
                                                technical and legal measures to keep users away from Smirrow if we believe
                                                they are creating problems or acting in bad faith or against our policies,
                                                all regardless of any payment made for the use of Smirrow or complementary
                                                services. </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> The offering user will receive the money only when the
                                                    acquiring user has fully received the requested service and marks within
                                                    the platform the rating of the service on stars (for more information
                                                    read the frequently asked questions), likewise the acquiring user must
                                                    pay the fee found within the platform before the service is delivered,
                                                </font>
                                                <font lang="en">the money remains in Smirrow's Wompi account, either to make
                                                    a refund to the acquiring user if he did not receive the service or to
                                                    deposit it to the offering user after completing the service. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> If a fortuitous event or force majeure is presented to the
                                                    offering user and he cannot fulfill the service, a new date will be
                                                    rescheduled to the acquiring user, who selects another similar offering
                                                    user for that same date, or later date, if he does not accept the
                                                    previous option, the full refund of his money will be made. </font>
                                                <font lang="en">If the offering user does not present a legal, medical,
                                                    valid excuse that truthfully supports his breach, the email
                                                    legal@smirrow.com, may lead to sanctions of suspension of his account
                                                    for up to one (1) month or definitively if he breaches more than three
                                                    (3) times a service without presenting an excuse or proof. </font>
                                                <font lang="en">The offering user will have a term of eight (8) to present
                                                    evidence, counted from the day following the date of the unfulfilled
                                                    service. </font>
                                                <font lang="en">The excuse or evidence presented by the offering user will
                                                    be studied within a term of eight (8) to fifteen (15) days from the day
                                                    of its filing. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> If a fortuitous case or force majeure is presented to the
                                                    acquiring user and he cannot comply to receive the service, he must
                                                    present a legal, medical excuse or conclusive evidence of his case.
                                                </font>
                                                <font lang="en">The acquiring user may submit an excuse or proof to the mail
                                                    legal@smirrow.com within a term of eight (8) calendar days counted from
                                                    the day following the date of the service not received. </font>
                                                <font lang="en">The excuse or evidence presented by the acquiring user will
                                                    be studied within a term of eight (8) days to fifteen (15) days from the
                                                    day of its filing. </font>
                                                <font lang="en">If the acquiring user does not present an excuse or
                                                    evidence, no refund of his money will be made, if he presents excuses
                                                    and evidence that justify his non-compliance for not receiving the
                                                    requested service, he will be deducted in his refund 30% for the service
                                                    that, if fulfilled by the offering user and only 70% of the payment made
                                                    will be returned, </font>
                                                <font lang="en">10% that will be paid to the user acquiring the service and
                                                    the other 20% that will be paid to Smirrow for legal and research
                                                    services expenses caused and generated. </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="2364">
                                <div id="heading1_15" class="card-header" len="320">
                                    <h2 class="mb-0" len="298"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_15" aria-expanded="false" aria-controls="collapse1_15"
                                            class="btn btn-link collapsed text-left" len="124" lang="en"> Smirrow
                                            modifications and suspension </button></h2>
                                </div>
                                <div id="collapse1_15" aria-labelledby="heading1_15" data-parent="#accordion_general"
                                    class="collapse" len="1886">
                                    <div class="card-body pl-4" len="1852">
                                        <p len="1845"><br len="0">
                                            <font>
                                                <font lang="en"> Smirrow, reserves the right to make the modifications it
                                                    deems appropriate in Smirrow at any time, organizing, deleting or adding
                                                    content, data or services. </font>
                                                <font lang="en">The aforementioned modifications will be carried out
                                                    unilaterally and without prior notice. </font>
                                                <font lang="en">In relation to the general and particular conditions,
                                                    Smirrow reserves the right to modify, alter and / or draft new clauses
                                                    depending on the new activities or services to which it is extended or
                                                    to adapt to new regulations and legislations that arise. </font>
                                                <font lang="en">These modifications will only be mandatory from their entry
                                                    into force and will be applicable to the user at the same moment in
                                                    which the platform is accessed. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> to. </font>
                                                <font lang="en">Suspension of service. </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> Smirrow reserves the right to suspend unilaterally and without
                                                prior notice the service, or deny access to the platform, temporarily or
                                                indefinitely, to any user who fails to comply with these terms and
                                                conditions of use, or carries out illegal, illicit acts contrary to the law,
                                                public order and good customs. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="2013">
                                <div id="heading1_16" class="card-header" len="317">
                                    <h2 class="mb-0" len="295"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_16" aria-expanded="false" aria-controls="collapse1_16"
                                            class="btn btn-link collapsed text-left" len="121" lang="en"> Duration,
                                            termination and resolution. </button></h2>
                                </div>
                                <div id="collapse1_16" aria-labelledby="heading1_16" data-parent="#accordion_general"
                                    class="collapse" len="1538">
                                    <div class="card-body pl-4" len="1504">
                                        <p len="1497"><br len="0">
                                            <font>
                                                <font lang="en"> The provision of the services of the portal and its
                                                    operation has, in principle, an indefinite character. </font>
                                                <font lang="en">However, Smirrow may temporarily suspend the service or
                                                    terminate it definitively, at any time or at any time, with good cause.
                                                </font>
                                                <font lang="en">In these cases, Smirrow undertakes by means of notices to
                                                    inform users of the temporary or definitive suspension or interruption.
                                                </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> In the event of unilateral termination of the service or
                                                    forced withdrawal from the portal, Smirrow will inform you in advance of
                                                    the causes of its resolution. </font>
                                                <font lang="en">In these cases, Smirrow undertakes to save the information
                                                    stored on its server for the period of ten calendar days, after which it
                                                    will proceed to block them in the manner provided for in the current
                                                    regulations on the protection of personal data, without being able to
                                                    demand any responsibility for this fact. </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="2127">
                                <div id="heading1_17" class="card-header" len="320">
                                    <h2 class="mb-0" len="298"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_17" aria-expanded="false" aria-controls="collapse1_17"
                                            class="btn btn-link collapsed text-left" len="124" lang="en"> Colombian Data
                                            Protection Law. </button></h2>
                                </div>
                                <div id="collapse1_17" aria-labelledby="heading1_17" data-parent="#accordion_general"
                                    class="collapse" len="1649">
                                    <div class="card-body pl-4" len="1615">
                                        <p len="1608"><br len="0">
                                            <font>
                                                <font lang="en"> Likewise, to access some of the services that the digital
                                                    platform offers through the web site, you must provide some personal
                                                    data. </font>
                                                <font lang="en">In compliance with the provisions of the Law, relating to
                                                    the protection of natural persons with regard to the processing of
                                                    personal data and the free movement of these data, we inform you that,
                                                    by completing the information in the profiles created, your personal
                                                    data will be incorporated and will be treated in the files of Smirrow.
                                                </font>
                                                <font lang="en">In order to be able to provide and offer our services, as
                                                    well as to inform you of the improvements of the digital platform.
                                                </font>
                                                <font lang="en">Likewise, we inform you of the possibility of exercising the
                                                    rights of access, rectification, cancellation and opposition of your
                                                    personal data, free of charge by email to or postal mail, in the data of
                                                    the point exposed. </font>
                                            </font><br len="0">
                                            <font lang="en"> Enter the option security policy, management and prevention of
                                                the use of personal data. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="4122">
                                <div id="heading1_18" class="card-header" len="316">
                                    <h2 class="mb-0" len="294"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_18" aria-expanded="false" aria-controls="collapse1_18"
                                            class="btn btn-link collapsed text-left" len="120" lang="en"> Dispute Related
                                            Terms </button></h2>
                                </div>
                                <div id="collapse1_18" aria-labelledby="heading1_18" data-parent="#accordion_general"
                                    class="collapse" len="3648">
                                    <div class="card-body pl-4" len="3614">
                                        <p len="3607"><br len="0">
                                            <font lang="en"> Where complaints should be filed: </font><br len="0"> <br
                                                len="0">
                                            <font>
                                                <font lang="en"> to. </font>
                                                <font lang="en">For acquiring users: </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> If you are a service user resident in Colombia, any claim
                                                    arising out of or in connection with your agreement with us (either by
                                                    you against us or us against you, including non-contractual disputes or
                                                    claims) may be brought before the courts, tribunals or tribunals of
                                                    Colombia or the courts of the country where you live, </font>
                                                <font lang="en">only if it is an exceptional case. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> If you are a user purchaser of services residing outside of
                                                    Colombia, any claim arising out of or in connection with your agreement
                                                    with us (either by you against us or us against you, and including
                                                    non-contractual disputes or claims) must be brought before the courts,
                                                    tribunals or Courts of Colombia, only in exceptional cases that the law
                                                    endorses, </font>
                                                <font lang="en">you may do so in the country where you reside. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> b. </font>
                                                <font lang="en">Offering users - Right: </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> If you are a offering user, your agreement with us and any
                                                disputes or claims (including non-contractual disputes or claims) arising
                                                out of or in connection with it or its object or formation shall be governed
                                                by Colombian law, without regard to conflict of law provisions. </font><br
                                                len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> c. </font>
                                                <font lang="en">Offering users: where should complaints be submitted?:
                                                </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> If you are a offering user, you and we agree that the courts,
                                                tribunals and courts of Colombia shall have exclusive jurisdiction to
                                                resolve any dispute or claim (including non-contractual disputes or claims)
                                                that you have against us or that we have against you arising out of or in
                                                connection with your agreement with us or its object or formation. </font>
                                            <br len="0">
                                            <font>
                                                <font lang="en"> Limitation Period for Filing Claims: Except where
                                                    prohibited by applicable law, any claim or cause of action you have with
                                                    respect to Smirrow (including those arising out of or relating to your
                                                    agreement with us) must be filed within six (6) months after the date on
                                                    which such claim or cause of action arose or the date on which you
                                                    learned of the facts that gave rise to </font>
                                                <font lang="en">to the cause of action (whichever comes first), or it will
                                                    be excluded forever. </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="3000">
                                <div id="heading1_19" class="card-header" len="340">
                                    <h2 class="mb-0" len="318"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_19" aria-expanded="false" aria-controls="collapse1_19"
                                            class="btn btn-link collapsed text-left" len="144" lang="en" style=""> Other
                                            terms that are part of your agreement with us </button></h2>
                                </div>
                                <div id="collapse1_19" aria-labelledby="heading1_19" data-parent="#accordion_general"
                                    class="collapse" len="2502">
                                    <div class="card-body pl-4" len="2468">
                                        <p len="2461"><br len="0">
                                            <font lang="en"> These terms of use for all users govern your agreement with us.
                                            </font><br len="0">
                                            <font lang="en"> Other terms or policies that are part of the terms and
                                                conditions of use of service will also apply to you and form part of your
                                                agreement with us, as follows: </font><br len="0">
                                            <font lang="en"> - Terms of use for acquiring users, which contain additional
                                                terms that apply if you use Smirrow as an acquiring user. </font><br
                                                len="0">
                                            <font lang="en"> - Terms of use for offering users, which contain additional
                                                terms that apply if you use Smirrow as a offering user. </font><br len="0">
                                            <font lang="en"> - Personal data handling, security and privacy policies, which
                                                apply to all users and inform you how we use your personal data and other
                                                information we collect about you. </font><br len="0">
                                            <font lang="en"> - Good faith policies that apply to all users and tell you what
                                                you can and cannot do on Smirrow. </font><br len="0">
                                            <font lang="en"> - Grievance and Grievance Policies: Sets out the procedure for
                                                filing a complaint about any aspect of Smirrow and how we will treat that
                                                complaint and grievance. </font><br len="0">
                                            <font lang="en"> If there is any conflict between these terms and conditions of
                                                use for all users and any of the terms or policies named above, the terms
                                                and conditions of use shall prevail for all users and shall apply to the
                                                extent of the conflict. </font><br len="0">
                                            <font lang="en"> All users without exception by accepting these terms and
                                                conditions of use, are subject to them. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" len="1246">
                                <div id="heading1_20" class="card-header" len="310">
                                    <h2 class="mb-0" len="288"><button type="button" data-toggle="collapse"
                                            data-target="#collapse1_20" aria-expanded="false" aria-controls="collapse1_20"
                                            class="btn btn-link text-left collapsed" len="114" lang="en" style="">
                                            Legislation and jurisdiction: </button></h2>
                                </div>
                                <div id="collapse1_20" aria-labelledby="heading1_20" data-parent="#accordion_general"
                                    class="collapse" len="778" style="">
                                    <div class="card-body pl-4" len="744">
                                        <p len="737"><br len="0">
                                            <font lang="en"> All matters relating to Smirrow are governed in each and every
                                                one of their extremes by Colombian Laws and are subject to the jurisdiction
                                                of the competent Courts and Tribunals of Colombian territory. </font><br
                                                len="0">
                                            <font lang="en"> The parties, expressly waiving their own jurisdiction, accept
                                                as governing legislation these terms and conditions of use in case of
                                                controversy about the interpretation or execution of these clauses,
                                                Colombian legislation, and submit for the resolution of any disputes that
                                                may arise from it to the Courts and Tribunals of Colombia. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acordion_two d-none" len="14086">
                            <h3 len="47" lang="en">Terms and conditions of use for acquirers</h3>
                            <h5 len="129" lang="en">By using our platform you agree to these terms and conditions of use for
                                acquirers</h5>
                            <div class="card " len="883">
                                <div id="heading2_2" class="card-header" len="292">
                                    <h2 class="mb-0" len="270"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_2" aria-expanded="false" aria-controls="collapse2_2"
                                            class="btn btn-link collapsed text-left" len="98" lang="en"> Introduction
                                        </button></h2>
                                </div>
                                <div id="collapse2_2" aria-labelledby="heading2_2" data-parent="#accordion_general"
                                    class="collapse" len="436">
                                    <div class="card-body pl-4" len="402">
                                        <p len="390">
                                            <font lang="en"> These Terms and Conditions of Use for Acquirers are additional
                                                terms that apply if you use Smirrow as an acquirer (also referred to as
                                                "you" and "your" in these Terms of Use for Acquirers). </font>
                                            <font lang="en">These terms and conditions of use for acquirers form part of
                                                your agreement with us. </font>
                                        </p> <br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1708">
                                <div id="heading2_3" class="card-header" len="294">
                                    <h2 class="mb-0" len="272"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_3" aria-expanded="false" aria-controls="collapse2_3"
                                            class="btn btn-link collapsed text-left" len="100" lang="en"> Interpretation
                                        </button></h2>
                                </div>
                                <div id="collapse2_3" aria-labelledby="heading2_3" data-parent="#accordion_general"
                                    class="collapse" len="1259">
                                    <div class="card-body pl-4" len="1225">
                                        <p len="1213"><br len="0">
                                            <font>
                                                <font lang="en"> In these terms and conditions of use for acquirers, the
                                                    defined terms have the same meaning as given to them in the terms and
                                                    conditions of use for all users. </font>
                                                <font lang="en">In addition: </font>
                                            </font><br len="0">
                                            <font lang="en"> - "Register" means registering on the platform in this case in
                                                the option of looking for companion, which makes you an acquiring user
                                                within the Smirrow platform. </font><br len="0">
                                            <font lang="en"> - "VAT" means Colombia's value added tax and any other tax
                                                added to or substituted for at the rate imposed from time to time and any
                                                equivalent or similar government, state, federal, provincial or municipal
                                                taxes, charges or indirect taxes, duties or excisions, duties or levies in
                                                any other jurisdiction. </font><br len="0">
                                            <font lang="en"> - "Tax" shall include all forms of taxes and charges, duties,
                                                contributions, levies, withholdings or statutory, governmental, state,
                                                provincial, local or municipal liabilities, wherever they are imputable and
                                                whether from Colombia or any other jurisdiction. </font>
                                        </p> <br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1484">
                                <div id="heading2_4" class="card-header" len="330">
                                    <h2 class="mb-0" len="308"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_4" aria-expanded="false" aria-controls="collapse2_4"
                                            class="btn btn-link collapsed text-left" len="136" lang="en"> Other terms that
                                            will apply to the use of Smirrow: </button></h2>
                                </div>
                                <div id="collapse2_4" aria-labelledby="heading2_4" data-parent="#accordion_general"
                                    class="collapse" len="999">
                                    <div class="card-body pl-4" len="965">
                                        <h4 len="128" lang="en">The following terms will also apply to your use of Smirrow
                                            and you agree to them:</h4>
                                        <p len="815"><br len="0">
                                            <font lang="en"> The following terms will also apply to your use of Smirrow and
                                                you agree to them: </font><br len="0">
                                            <font lang="en"> - Our terms and conditions of use for all users. </font><br
                                                len="0">
                                            <font lang="en"> - Our policies of security, handling and privacy of personal
                                                data. </font><br len="0">
                                            <font lang="en"> - Our acceptable use policies, which tell you what you can and
                                                cannot do at Smirrow. </font><br len="0">
                                            <font lang="en"> - Our complaints and claims policies, which sets out the
                                                procedure for filing a complaint and grievance about any aspect of Smirrow
                                                and how we will deal with that complaint. </font><br len="0">
                                            <font lang="en"> - Guide to frequently asked questions. </font>
                                        </p> <br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="791">
                                <div id="heading2_9" class="card-header" len="336">
                                    <h2 class="mb-0" len="314"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_9" aria-expanded="false" aria-controls="collapse2_9"
                                            class="btn btn-link collapsed text-left" len="142" lang="en"> Other terms that
                                            may apply to your use of Smirrow: </button></h2>
                                </div>
                                <div id="collapse2_9" aria-labelledby="heading2_9" data-parent="#accordion_general"
                                    class="collapse" len="300">
                                    <div class="card-body pl-4" len="266">
                                        <font lang="en"> The following additional terms may apply to your use of Smirrow:
                                        </font><br len="0"> <br len="0">
                                        <font lang="en"> - If you are also a bidding user, the terms of use for bidders will
                                            apply to your use of Smirrow as a bidding user. </font><br len="0"> <br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1182">
                                <div id="heading2_5" class="card-header" len="309">
                                    <h2 class="mb-0" len="287"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_5" aria-expanded="false" aria-controls="collapse2_5"
                                            class="btn btn-link collapsed text-left" len="115" lang="en"> Your commitments
                                            to us: </button></h2>
                                </div>
                                <div id="collapse2_5" aria-labelledby="heading2_5" data-parent="#accordion_general"
                                    class="collapse" len="718">
                                    <div class="card-body pl-4" len="684"><br len="0">
                                        <font lang="en"> You warrant (meaning you make a legally enforceable promise) that:
                                        </font><br len="0"> <br len="0">
                                        <font lang="en"> - You are at least 18 years old. </font><br len="0">
                                        <font lang="en"> - If the laws of the country or state/province where you live
                                            stipulate that you can only be legally registered to a platform like Smirrow at
                                            an age that is over 18 years old, then you are old enough to be legally
                                            registered under the laws of the country or state/province where you live.
                                        </font><br len="0">
                                        <font lang="en"> - You are not prohibited from accessing Smirrow under the laws that
                                            apply to you. </font><br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="2527">
                                <div id="heading2_6" class="card-header" len="310">
                                    <h2 class="mb-0" len="288"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_6" aria-expanded="false" aria-controls="collapse2_6"
                                            class="btn btn-link collapsed text-left" len="116" lang="en"> Content, general
                                            terms: </button></h2>
                                </div>
                                <div id="collapse2_6" aria-labelledby="heading2_6" data-parent="#accordion_general"
                                    class="collapse" len="2062">
                                    <div class="card-body pl-4" len="2028">
                                        <p len="2016"><br len="0">
                                            <font lang="en"> In addition to the terms set forth elsewhere in the terms and
                                                conditions of use (in particular in our acceptable use policy), the
                                                following terms apply to content posted, displayed, uploaded or posted by
                                                you as an acquiring user on Smirrow: </font><br len="0">
                                            <font>
                                                <font lang="en"> to. </font>
                                                <font lang="en">You warrant (meaning that you make a legally enforceable
                                                    promise to us) that for each item of content you post, display, upload
                                                    or post on Smirrow: </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - The Content fully complies with the terms and conditions of
                                                use (and in particular our acceptable use policy). </font><br len="0">
                                            <font lang="en"> - You own your content (and all intellectual property rights)
                                                or have a valid license to your content. </font><br len="0">
                                            <font lang="en"> - If your content includes or uses any third party material,
                                                you have obtained all rights, licenses, written consents and releases that
                                                are necessary for the use of such third party property in your content and
                                                for the subsequent use and exploitation of that content on Smirrow. </font>
                                            <br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> b. </font>
                                                <font lang="en">You agree that you will be liable to us and indemnify us if
                                                    you miss any of the points set out in these terms and conditions of use
                                                    for acquirers. </font>
                                                <font lang="en">This means that you will be liable for any loss or damage we
                                                    suffer as a result of you breaching these terms and conditions of use
                                                    for acquirers. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> c. </font>
                                                <font lang="en">We are not responsible for, nor do we endorse any aspect of
                                                    any content and data posted by you or any other Smirrow user. </font>
                                                <font lang="en">We have no obligation to monitor any content and have no
                                                    direct control over what your content and personal data may comprise.
                                                </font>
                                            </font>
                                        </p> <br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1089">
                                <div id="heading2_7" class="card-header" len="301">
                                    <h2 class="mb-0" len="279"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_7" aria-expanded="false" aria-controls="collapse2_7"
                                            class="btn btn-link collapsed text-left" len="107" lang="en"> Adult material
                                        </button></h2>
                                </div>
                                <div id="collapse2_7" aria-labelledby="heading2_7" data-parent="#accordion_general"
                                    class="collapse" len="633">
                                    <div class="card-body pl-4" len="599">
                                        <p len="587">
                                            <font lang="en"> You acknowledge that you know that some of Smirrow's content
                                                contains adult material and agree to take this into account when deciding
                                                where to access and view the content. </font>
                                            <font lang="en">We will not be liable to you if you suffer any loss or damage as
                                                a result of your access to or viewing of content containing adult material
                                                in a manner that places you in breach of any contract you have with a third
                                                party (e.g., your employment contract) or in contravention of any applicable
                                                law. </font>
                                        </p> <br len="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="3944">
                                <div id="heading2_8" class="card-header" len="312">
                                    <h2 class="mb-0" len="290"><button type="button" data-toggle="collapse"
                                            data-target="#collapse2_8" aria-expanded="false" aria-controls="collapse2_8"
                                            class="btn btn-link collapsed text-left" len="118" lang="en"> Fan Subscriptions
                                            and Purchases: </button></h2>
                                </div>
                                <div id="collapse2_8" aria-labelledby="heading2_8" data-parent="#accordion_general"
                                    class="collapse" len="3477">
                                    <div class="card-body pl-4" len="3443"><br len="0">
                                        <font lang="en"> This section describes the terms that apply to transactions and
                                            interactions between acquirer and bidder:</font><br len="0"> <br len="0">
                                        <font>
                                            <font lang="en"> to. </font>
                                            <font lang="en">All transactions and interactions facilitated by Smirrow are
                                                conventions between acquirers and bidders. </font>
                                            <font lang="en">Although we facilitate transactions and interactions between
                                                acquirers and bidders by providing the Smirrow platform, storing data,
                                                content and acting as a payment intermediary, we are not a party to the
                                                convention between the acquirer and the bidder or any other agreement that
                                                may exist between an acquirer and bidder, and we are not responsible for any
                                                transaction or personal interaction between acquirers and bidders.</font>
                                        </font><br len="0"> <br len="0">
                                        <font>
                                            <font lang="en"> b. </font>
                                            <font lang="en">Bidders are solely responsible for determining (within Smirrow's
                                                pricing parameters) the prices applicable to transactions and interactions
                                                and the content to which the acquirer may be given access. </font>
                                            <font lang="en">All prices appear in Colombian pesos only, for now. </font>
                                        </font><br len="0"> <br len="0">
                                        <font>
                                            <font lang="en"> c. </font>
                                            <font lang="en">Payments from acquirers will not include VAT, which will be
                                                added to the current rate as applicable to the acquirer's payments and
                                                depending on the country where you reside.</font>
                                        </font><br len="0"> <br len="0">
                                        <font>
                                            <font lang="en"> d. </font>
                                            <font lang="en">To see the content of a bidder you can enter their albums and
                                                profile being registered as an acquirer and to use the interaction function
                                                with the bidders in Smirrow, you must first request a service, make the
                                                payment through Wompi, after this the chat and messaging will be activated
                                                within the platform so that there is interactivity between the acquirer and
                                                the bidder. </font>
                                        </font><br len="0"> <br len="0">
                                        <font>
                                            <font lang="en"> and. </font>
                                            <font lang="en">You authorize us to provide your payment card details to a
                                                third-party payment provider for the purpose of processing your purchaser
                                                payment. </font>
                                            <font lang="en">All payments from acquirers will be charged in Colombian pesos
                                                and dollars. </font>
                                            <font lang="en">Your payment card provider may charge you currency conversion
                                                fees. </font>
                                            <font lang="en">We have no control over the currency exchange rates or charges
                                                imposed by your payment card provider or bank and are not responsible for
                                                paying any charges or fees imposed by your payment card provider or bank.
                                            </font>
                                        </font><br len="0"> <br len="0">
                                        <font>
                                            <font lang="en"> f. </font>
                                            <font lang="en">If you choose to provide details of two or more payment cards,
                                                if you attempt to make an acquirer payment from the first card and the card
                                                is declined for any reason, the other payment card will be used to collect
                                                the full acquirer payment.</font>
                                        </font><br len="0"> <br len="0">
                                        <font>
                                            <font lang="en"> g. </font>
                                            <font lang="en">The payment provider will not take monthly payments from your
                                                payment card for service purchase payments, each time you purchase a
                                                service, you will need to make the payment again. </font>
                                        </font><br len="0"> <br len="0">
                                        <font>
                                            <font lang="en"> h. </font>
                                            <font lang="en">Smirrow only authorizes payments through its supplier Wompi, any
                                                transaction you make outside is solely the responsibility of the acquirer.
                                            </font>
                                        </font><br len="0"> <br len="0">
                                        <font>
                                            <font lang="en"> i. </font>
                                            <font lang="en">You agree that you will not make unjustified refund requests of
                                                any kind to a bidder, or unjustified chargeback requests from your payment
                                                card provider in connection with any transaction between you and a bidder.
                                            </font>
                                            <font lang="en">If we believe that you made a refund or chargeback request in
                                                bad faith, we have the right to suspend or delete your acquisitor account.
                                            </font>
                                        </font><br len="0"> <br len="0">
                                        <font>
                                            <font lang="en"> j. </font>
                                            <font lang="en">You agree to reasonably make refund requests in good faith,
                                                otherwise we have the right to suspend or delete your acquirer account.
                                            </font>
                                        </font><br len="0">
                                    </div>
                                </div>
                            </div> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br len="0"> <br
                                len="0"> <br len="0">
                        </div>
                        <div class="acordion_three d-none" len="33435">
                            <h3 len="45" lang="en">Terms and conditions of use for bidders</h3>
                            <h5 len="190" lang="en"> By using our platform as a bidder, you agree to these terms and
                                conditions of use. </h5>
                            <div class="card " len="866">
                                <div id="heading3_1" class="card-header" len="288">
                                    <h2 class="mb-0" len="266"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_1" aria-expanded="false" aria-controls="collapse3_1"
                                            class="btn btn-link collapsed text-left" len="94" lang="en"> Introduction
                                        </button></h2>
                                </div>
                                <div id="collapse3_1" aria-labelledby="heading3_1" data-parent="#accordion_general"
                                    class="collapse" len="423">
                                    <div class="card-body pl-4" len="389">
                                        <p len="382">
                                            <font lang="en"> These terms and conditions of use for bidders are additional
                                                terms that apply if you use Smirrow as a bidder (also referred to as "you"
                                                and "your" in these terms of use for bidders). </font>
                                            <font lang="en">These terms and conditions of use for bidders form part of your
                                                agreement with us </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1535">
                                <div id="heading3_2" class="card-header" len="290">
                                    <h2 class="mb-0" len="268"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_2" aria-expanded="false" aria-controls="collapse3_2"
                                            class="btn btn-link collapsed text-left" len="96" lang="en"> Interpretation
                                        </button></h2>
                                </div>
                                <div id="collapse3_2" aria-labelledby="heading3_2" data-parent="#accordion_general"
                                    class="collapse" len="1090">
                                    <div class="card-body pl-4" len="1056">
                                        <p len="1049"><br len="0">
                                            <font>
                                                <font lang="en"> In these terms and conditions of use for bidders, the
                                                    defined terms have the same meaning as given to them in the terms and
                                                    conditions of use for all users. </font>
                                                <font lang="en">In addition: </font>
                                            </font><br len="0">
                                            <font lang="en"> - "VAT" means Colombia's value added tax and any other tax
                                                added to or substituted for at the rate imposed from time to time and any
                                                government, state, federal, provincial or municipal taxes, charges or
                                                indirect taxes equivalent or similar, duty, imposition or levy in any other
                                                jurisdiction. </font><br len="0">
                                            <font lang="en"> - "Tax" shall include all forms of taxes and charges, duties,
                                                taxes, contributions, levies, withholdings or statutory, governmental,
                                                state, federal, provincial, local or municipal liabilities, wherever they
                                                are imputable and whether from Colombia or any other jurisdiction. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1310">
                                <div id="heading3_3" class="card-header" len="328">
                                    <h2 class="mb-0" len="306"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_3" aria-expanded="false" aria-controls="collapse3_3"
                                            class="btn btn-link collapsed text-left" len="134" lang="en"> Other terms that
                                            will apply to your use of Smirrow: </button></h2>
                                </div>
                                <div id="collapse3_3" aria-labelledby="heading3_3" data-parent="#accordion_general"
                                    class="collapse" len="827">
                                    <div class="card-body pl-4" len="793">
                                        <p len="786"><br len="0">
                                            <font lang="en"> The following terms will also apply to your use of Smirrow and
                                                you agree to them: </font><br len="0"> <br len="0">
                                            <font lang="en"> - Our conditions of use for all users. </font><br len="0">
                                            <font lang="en"> - Our personal data security, handling and privacy policies,
                                                which tells you how we use your personal data and other information we
                                                collect about you. </font><br len="0">
                                            <font lang="en"> - Our acceptable use policies, which tell you what you can and
                                                cannot do at Smirrow. </font><br len="0">
                                            <font lang="en"> - Our complaints and grievances policies, which sets out the
                                                procedure for filing a complaint about any aspect of Smirrow and how we will
                                                deal with that complaint and grievance. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="890">
                                <div id="heading3_4" class="card-header" len="331">
                                    <h2 class="mb-0" len="309"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_4" aria-expanded="false" aria-controls="collapse3_4"
                                            class="btn btn-link collapsed text-left" len="137" lang="en"> Other terms that
                                            may apply to your use of Smirrow </button></h2>
                                </div>
                                <div id="collapse3_4" aria-labelledby="heading3_4" data-parent="#accordion_general"
                                    class="collapse" len="404">
                                    <div class="card-body pl-4" len="370">
                                        <p len="363"><br len="0">
                                            <font lang="en"> The following additional terms may apply to your use of
                                                Smirrow: </font><br len="0"> <br len="0">
                                            <font lang="en"> If you are also an acquirer, the terms and conditions of use
                                                for acquirers will also apply to your use of Smirrow as an acquirer. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1471">
                                <div id="heading3_5" class="card-header" len="352">
                                    <h2 class="mb-0" len="330"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_5" aria-expanded="false" aria-controls="collapse3_5"
                                            class="btn btn-link collapsed text-left" len="158" lang="en"> What are the fees
                                            we charge bidders for the use of Smirrow? </button></h2>
                                </div>
                                <div id="collapse3_5" aria-labelledby="heading3_5" data-parent="#accordion_general"
                                    class="collapse" len="964">
                                    <div class="card-body pl-4" len="930">
                                        <p len="923">
                                            <font lang="en"> Smirrow has the Wompi payment platform, payments outside the
                                                platform named above are not accepted. </font>
                                            <font lang="en">Smirrow charges a fee of 15% to the bidders, of which it is
                                                divided into 11% as a commission for the use of the platform and the other
                                                4% is on the withholding that the platform must make to the people offering
                                                services for the payment of said tax and a rate of 19% as a service fee,
                                            </font>
                                            <font lang="en">which works to improve security, cover operational costs for
                                                development, cover storage of content and maintenance of the technology
                                                necessary for the proper functioning of the digital platform. </font>
                                            <font lang="en">The purchaser of the services pays a fee of 15%, divided into an
                                                11% commission for the use of the platform and 4% as a gift to exclusively
                                                improve the security part. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="3581">
                                <div id="heading3_6" class="card-header" len="330">
                                    <h2 class="mb-0" len="308"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_6" aria-expanded="false" aria-controls="collapse3_6"
                                            class="btn btn-link collapsed text-left" len="136" lang="en"> How to set up
                                            your account as a bidder account </button></h2>
                                </div>
                                <div id="collapse3_6" aria-labelledby="heading3_6" data-parent="#accordion_general"
                                    class="collapse" len="3096">
                                    <div class="card-body pl-4" len="3062">
                                        <p len="3055"><br len="0">
                                            <font lang="en"> To set up your account as a bidder account: </font><br len="0">
                                            <br len="0">
                                            <font lang="en"> - You will need to verify your bidder account you must upload
                                                an updated selfie photo in the "verification" option according to the
                                                requirements established on the platform. </font><br len="0">
                                            <font lang="en"> - You will need in your acquirer account, in the "Bank
                                                Accounts" option, to add the data of your own bank account, such as name of
                                                the bank account holder, bank account number, name of the bank or corporate
                                                entity where the account number belongs, identification of the bank account
                                                holder. </font><br len="0">
                                            <font lang="en"> - Smirrow is not responsible for the registration of
                                                third-party bank accounts. </font><br len="0">
                                            <font lang="en"> - You can only request two (2) transactions per month, if you
                                                request a third transaction within the same month, you will be given
                                                discounts and deductions for handling your account. </font><br len="0">
                                            <font lang="en"> - You may also need to submit additional information depending
                                                on the country you live in. </font><br len="0">
                                            <font lang="en"> - We may ask you for additional age or identity verification
                                                information at any time. </font><br len="0">
                                            <font lang="en"> - We may refuse your request to set up a bidder account for any
                                                reason, including the reasons stated herein. </font><br len="0">
                                            <font lang="en"> - You can add all the special services and services you want
                                                and add the value you see fit, if you do not know how much to charge, go to
                                                "frequently asked questions", the subtitle "earnings and payments", the
                                                option How much can I charge for special services and services?, there you
                                                will have an example of the average you can charge. </font><br len="0">
                                            <font lang="en"> - Smirrow will have no responsibility for agreements and
                                                payments outside the platform. </font><br len="0">
                                            <font lang="en"> - You can add all the content you want, create all the albums
                                                and videos you want to create. </font><br len="0">
                                            <font lang="en"> - Smirrow being an exclusive, elegant, categorical and classy
                                                site, does not accept content with explicit nudity within the platform,
                                                therefore, Smirrow expects the best version of its content with sensuality,
                                                eroticism, lustful and nothing vulgar. </font><br len="0">
                                            <font lang="en"> - If you lose access to your account, you can reset your
                                                password, but you will need to know the email address with which I created
                                                the account. </font><br len="0">
                                            <font lang="en"> - If you do not remember the email address used to set up the
                                                account, we may ask you to provide identification documents and photos, and
                                                any additional proof we may reasonably require to prove your identity.
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1292">
                                <div id="heading3_7" class="card-header" len="303">
                                    <h2 class="mb-0" len="281"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_7" aria-expanded="false" aria-controls="collapse3_7"
                                            class="btn btn-link collapsed text-left" len="109" lang="en"> The bidding
                                            agencies: </button></h2>
                                </div>
                                <div id="collapse3_7" aria-labelledby="heading3_7" data-parent="#accordion_general"
                                    class="collapse" len="834">
                                    <div class="card-body pl-4" len="800">
                                        <p len="793">
                                            <font lang="en"> Smirrow does not accept agencies where bidders are using the
                                                Smirrow platform against their will, so you can go to "Declaration" on
                                                Modern Slavery and Human Trafficking. </font>
                                            <font lang="en">If you are a bidder and do not own your own account and must
                                                have access to your account at all times, if you have an agent or agency
                                                assisting you with the operation of your bidder account (or opera on your
                                                behalf), this does not affect your personal legal liability. </font>
                                            <font lang="en">Our relationship is with you, and not with your agent or agency,
                                                and you will be legally responsible for ensuring that all content posted and
                                                all use of your account complies with the terms and conditions of use.
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="4534">
                                <div id="heading3_8" class="card-header" len="299">
                                    <h2 class="mb-0" len="277"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_8" aria-expanded="false" aria-controls="collapse3_8"
                                            class="btn btn-link collapsed text-left" len="105" lang="en"> Payments to
                                            bidders: </button></h2>
                                </div>
                                <div id="collapse3_8" aria-labelledby="heading3_8" data-parent="#accordion_general"
                                    class="collapse" len="4080">
                                    <div class="card-body pl-4" len="4046">
                                        <p len="4039"><br len="0">
                                            <font lang="en"> - Usually, funds take between 3 days and 5 business days to
                                                appear in your bank account, in exceptional cases it takes up to 10 business
                                                days. </font><br len="0">
                                            <font lang="en"> - If it has been more than 10 days since your payment was
                                                registered as processed, please email us at pagos@smirrow.com – include a
                                                screenshot of the payment request option, your ID number, and the details of
                                                the bank account holder, account number and bank. </font><br len="0"> <br
                                                len="0">
                                            <font lang="en"> - You must also attach bank certification where you prove that
                                                you have not received your payment. </font><br len="0"> <br len="0">
                                            <font lang="en"> - All payments from acquirers will be received by a third-party
                                                payment provider approved by us. </font><br len="0"> <br len="0">
                                            <font lang="en"> - We currently have a payment platform provider which is Wompi.
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - Smirrow will make payments exclusively to your bank account
                                                registered within the platform, Smirrow will not make payments to bank
                                                accounts that are not registered within the platform. </font><br len="0">
                                            <br len="0">
                                            <font lang="en"> - Smirrow does not make cash payments to bidders, nor does it
                                                accept cash payments from acquirers to bidders, any cash payments made
                                                outside of Smirrow's authorized payment providers, therefore Smirrow is not
                                                responsible for payments made outside the platforms of authorized providers.
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - As a bidder you will have a virtual locker where your profits
                                                and accumulated money will be reflected. </font><br len="0"> <br len="0">
                                            <font lang="en"> - We will deduct our fees, fees and taxes from the payment made
                                                by the acquirer and the bidder. </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> - Your Smirrow account will be constantly updated within a
                                                    reasonable time with your bidder earnings. </font>
                                                <font lang="en">Your bidder winnings will be available for you to withdraw
                                                    from your Smirrow virtual account and locker once such bidder winnings
                                                    appear in your Smirrow account and locker. </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - To make a withdrawal of the creator's winnings from your
                                                Smirrow account, you must have at least the minimum payment amount in your
                                                Smirrow account which is a value of "thirty thousand Colombian pesos"
                                                ($30,000) or Ten US dollars (US 10). </font><br len="0"> <br len="0">
                                            <font lang="en"> - Click on the "My Money" page of your account on Smirrow to
                                                see what amount you have saved or accumulated in your virtual locker and
                                                payment option. </font><br len="0"> <br len="0">
                                            <font lang="en"> - The amount you see in your "current balance" in your Smirrow
                                                account is your bidder earnings at the relevant time. </font><br len="0">
                                            <br len="0">
                                            <font lang="en"> - All payments from acquirers are made $ Colombian pesos and
                                                USD and the profits of the bidders are made only in $ Colombian pesos or the
                                                local currency or currency, depending on the country where you reside.
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> - Your bank may charge you conversion or currency transfer
                                                    fees to receive the money. </font>
                                                <font lang="en">Also, your e-wallet company may charge you a fee for
                                                    accessing the money. </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - We have no control over the currency exchange rates or fees
                                                imposed by your bank or your e-wallet company, and we are not responsible
                                                for paying any fees imposed by your bank or your e-wallet company. </font>
                                            <br len="0"> <br len="0">
                                            <font lang="en"> - Except for payment options that involve payment by direct
                                                bank transfer from us, we do not store any data disclosed by you when you
                                                register your payment options with a third-party payment provider. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="1919">
                                <div id="heading3_9" class="card-header" len="317">
                                    <h2 class="mb-0" len="295"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_9" aria-expanded="false" aria-controls="collapse3_9"
                                            class="btn btn-link collapsed text-left" len="123" lang="en"> Requests for
                                            services from acquirers: </button></h2>
                                </div>
                                <div id="collapse3_9" aria-labelledby="heading3_9" data-parent="#accordion_general"
                                    class="collapse" len="1447">
                                    <div class="card-body pl-4" len="1413">
                                        <p len="1406"><br len="0">
                                            <font lang="en"> This section describes the terms that apply to transactions and
                                                interactions between acquirers and bidders: </font><br len="0">
                                            <font>
                                                <font lang="en"> - All transactions and interactions facilitated by Smirrow
                                                    are agreements between acquirers and bidders. </font>
                                                <font lang="en">Although we facilitate transactions and interactions between
                                                    acquirers and bidders by providing the Smirrow platform, storing
                                                    content, providing basic security and acting as a payment intermediary,
                                                    we are not a party to the acquirer-bidder agreement or any other
                                                    agreement that may exist between an acquirer and a bidder, and we are
                                                    not responsible for any transaction or interaction between acquirer and
                                                    bidder. </font>
                                            </font><br len="0">
                                            <font lang="en"> - Payments from acquirers do not include VAT, which will be
                                                added to the current rate depending on the country where the acquirer
                                                resides. </font><br len="0">
                                            <font>
                                                <font lang="en"> - When an acquirer has made the payment required to access
                                                    a service, for the use of the interaction function with the acquirer a
                                                    chat and messaging will be activated in your account. </font>
                                                <font lang="en">You agree that Smirrow has no responsibility for
                                                    interactions outside of chat and messaging. </font>
                                                <font lang="en">Which means that only you will be responsible for any
                                                    interaction outside the platform. </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="3464">
                                <div id="heading3_10" class="card-header" len="307">
                                    <h2 class="mb-0" len="285"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_10" aria-expanded="false" aria-controls="collapse3_10"
                                            class="btn btn-link collapsed text-left" len="111" lang="en"> Content, general
                                            terms </button></h2>
                                </div>
                                <div id="collapse3_10" aria-labelledby="heading3_10" data-parent="#accordion_general"
                                    class="collapse" len="2999">
                                    <div class="card-body pl-4" len="2965">
                                        <p len="2958"><br len="0">
                                            <font lang="en"> In addition to the terms set forth elsewhere in the terms and
                                                conditions of use (in particular in our acceptable use policies), the
                                                following terms apply to content posted, displayed, uploaded or posted by
                                                you as a bidder on Smirrow: </font><br len="0">
                                            <font>
                                                <font lang="en"> to. </font>
                                                <font lang="en">Your content is not confidential and you authorize your
                                                    acquirers to access and view your content on Smirrow in order to
                                                    purchase services, therefore Smirrow is not responsible for the use in
                                                    bad faith, download, copies the content of the bidder. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> b. </font>
                                                <font lang="en">You warrant (meaning that you make a legally enforceable
                                                    promise to us) that for each item of content you post, display, upload
                                                    or post on Smirrow: </font>
                                            </font><br len="0">
                                            <font lang="en"> - The content fully complies with the terms and conditions of
                                                services for all users (and in particular our acceptable use policies).
                                            </font><br len="0">
                                            <font lang="en"> - You own your content (and all intellectual property rights)
                                                or have a valid license to offer and supply your content to your purchasers
                                                for the purpose of your purchasers requesting your services. </font><br
                                                len="0">
                                            <font lang="en"> - If your content includes or uses any third party material,
                                                you agree that you have obtained all rights, licenses, written consents and
                                                releases that are necessary for the use of such third party property in your
                                                content and for the subsequent use and exploitation of that content on
                                                Smirrow. </font><br len="0">
                                            <font>
                                                <font lang="en"> - The content is: (i) Of satisfactory quality, taking into
                                                    account any description of the content and all other relevant
                                                    circumstances, including any statements or representations you make
                                                    about the nature of the content in your account or in any advertising;
                                                </font>
                                                <font lang="en">(ii) reasonably suitable for any purpose whatsoever to offer
                                                    its services to the acquirer; </font>
                                                <font lang="en">(iii) as described by you. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> c. </font>
                                                <font lang="en">You agree that you will be liable to us and indemnify us if
                                                    any of the points of numeral ten (10) does not comply with it. </font>
                                                <font lang="en">This means that you will be liable for any loss or damage
                                                    (including loss of profits) that we suffer as a result of any of the
                                                    warranties not complying with it. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> d. </font>
                                                <font lang="en">We are not responsible for and do not endorse any aspect of
                                                    any content posted by you or any other Smirrow user. </font>
                                                <font lang="en">We have no obligation to monitor any content and have no
                                                    direct control over what your content may comprise. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> and. </font>
                                                <font lang="en">You also agree to act as custodian of the records of the
                                                    content you upload to Smirrow. </font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="3891">
                                <div id="heading3_11" class="card-header" len="300">
                                    <h2 class="mb-0" len="278"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_11" aria-expanded="false" aria-controls="collapse3_11"
                                            class="btn btn-link collapsed text-left" len="104" lang="en"> Co-authored
                                            content </button></h2>
                                </div>
                                <div id="collapse3_11" aria-labelledby="heading3_11" data-parent="#accordion_general"
                                    class="collapse" len="3433">
                                    <div class="card-body pl-4" len="3399">
                                        <p len="3392"><br len="0">
                                            <font>
                                                <font lang="en"> to. </font>
                                                <font lang="en">If you upload content to your bidder account that displays
                                                    someone other than you or in addition to you (even if that person cannot
                                                    be identified in the content) ("co-authored content"), you warrant
                                                    (meaning you make a promise) that each individual displayed in any
                                                    co-authored content uploaded to your account: </font>
                                            </font><br len="0"> <br len="0">
                                            <font lang="en"> - It is a bidder of Smirrow. </font><br len="0">
                                            <font lang="en"> - You have given your express, prior and fully informed consent
                                                for its appearance in the co-authored content. </font><br len="0">
                                            <font lang="en"> - You have given your consent for the co-authored content in
                                                which it appears to be published on Smirrow. </font><br len="0"> <br
                                                len="0">
                                            <font>
                                                <font lang="en"> b. </font>
                                                <font lang="en">In addition to the confirmations in number eleven (11) (a)
                                                    above, you agree that if you upload co-authored content where the other
                                                    person or persons appearing in the content can be identified from the
                                                    content, you will tag the Smirrow accounts of any person or persons
                                                    appearing in the co-authored content who can be identified from it.
                                                </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> c. </font>
                                                <font lang="en">You must not upload any content that contains any image,
                                                    photo, video or audio of another person other than or that is added to
                                                    you, unless such person is also a bidder on Smirrow. </font>
                                            </font><br len="0">
                                            <font>
                                                <font lang="en"> d. </font>
                                                <font lang="en">If any co-authored content is a jointly authored work, you
                                                    are solely responsible for obtaining the necessary licenses or consents
                                                    from any other joint author of the content that is sufficient to allow
                                                    such content to be uploaded and made available on Smirrow. </font>
                                            </font><br len="0"> <br len="0">
                                            <font>
                                                <font lang="en"> and. </font>
                                                <font lang="en">You agree that we will only pay the bidder's winnings to the
                                                    bidder's account on which the service was co-authored. </font>
                                                <font lang="en">The bidder who uploaded the content in co-authorship is
                                                    solely responsible for dividing and distributing the revenue generated
                                                    by the co-authored services among the bidders shown in such co-authored
                                                    content. </font>
                                                <font lang="en">Any such revenue sharing agreement will be a private and
                                                    independent agreement between the bidders, and we are not responsible
                                                    for providing or enforcing such agreements. </font>
                                                <font lang="en">You understand and agree that you are not entitled to the
                                                    bidder's winnings earned by the co-authored services in which it
                                                    appears, but that it is posted to another bidder's account. </font>
                                                <font lang="en">If you post co-authored content to your account, we may ask
                                                    you to provide valid and complete legal information for all individuals
                                                    listed in the co-authored content. </font>
                                                <font lang="en">If you do not provide the information requested by us at our
                                                    request, we may remove the co-authored content, restrict your rights and
                                                    permissions to post as a bidder, cancel your account, and/or retain all
                                                    or a portion of the bidder's profits earned that have not yet been
                                                    deposited into the bidder's bank account. </font>
                                            </font><br len="0"> <br len="0">
                                            <font> f. Usted acepta liberarnos y no hacer ningún reclamo contra nosotros que
                                                surja del contenido y servicios en coautoría. Usted acepta que todas las
                                                reclamaciones que surjan del contenido y servicios en coautoría se harán
                                                contra el ofertante (es) que publicó el contenido y servicios en coautoría o
                                                aparecieron en el servicio y contenido en coautoría (según corresponda).
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="3852">
                                <div id="heading3_12" class="card-header" len="348">
                                    <h2 class="mb-0" len="326"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_12" aria-expanded="false" aria-controls="collapse3_12"
                                            class="btn btn-link collapsed text-left" len="152"> Circunstancias en las que
                                            podemos retener las ganancias del Creador: </button></h2>
                                </div>
                                <div id="collapse3_12" aria-labelledby="heading3_12" data-parent="#accordion_general"
                                    class="collapse" len="3346">
                                    <div class="card-body pl-4" len="3312">
                                        <p len="3305"><br len="0">
                                            <font> a. Es posible que retengamos la totalidad o parte de las ganancias del
                                                ofertante que se le adeuden, pero que aún no se hayan pagado: </font><br
                                                len="0">
                                            <font> - Si creemos que ha infringido o puede haber infringido grave o
                                                repetidamente alguna parte de los términos y condiciones de uso para todos
                                                los usuarios. </font><br len="0">
                                            <font> - Si intenta o amenaza con violar cualquier parte de los términos y
                                                condiciones de uso de una manera que creemos que tiene o podría tener
                                                consecuencias graves para nosotros o para otro usuario (incluida la pérdida
                                                real o posible que nos haya causado a nosotros o a otro usuario). </font><br
                                                len="0">
                                            <font> - Si sospechamos que la totalidad o parte de las ganancias del ofertante
                                                resultan de una actividad ilegal, ya sea por parte de usted o del adquisidor
                                                que realizó el pago sobre un servicio que resultó en las ganancias del
                                                adquisidor. </font><br len="0"> <br len="0">
                                            <font> b. Durante el tiempo que sea necesario para investigar la infracción
                                                real, amenazada o sospechada por usted o la presunta actividad ilegal (según
                                                corresponda). Si después de nuestra investigación, llegamos a la conclusión
                                                de que (i) ha incumplido grave o repetidamente cualquier parte de los
                                                términos y condiciones de uso; (ii) ha intentado o amenazado con violar
                                                cualquier parte de los términos y condiciones de uso de una manera que tiene
                                                o podría tener consecuencias graves para nosotros u otro usuario (incluida
                                                la pérdida real o posible causada a nosotros o a otro usuario), y / o (iii)
                                                Las ganancias de ofertantes son el resultado de una actividad ilegal,
                                                podemos notificarle que ha perdido sus ganancias de ofertante. </font><br
                                                len="0"> <br len="0">
                                            <font> c. No tendremos ninguna responsabilidad ante usted si retenemos o
                                                perdemos cualquiera de sus ganancias de ofertantes cuando tengamos derecho a
                                                hacerlo en virtud de estos términos y condiciones de uso para ofertantes.
                                            </font><br len="0"> <br len="0">
                                            <font> d. Si retenemos la totalidad o parte de las ganancias del ofertante que
                                                se le adeudan y determinamos que parte de las ganancias del ofertante
                                                retenida por nosotros no está relacionada con el incumplimiento por su parte
                                                de los términos y condiciones de uso o la sospecha de actividad ilegal,
                                                entonces podemos pagarle el parte de las ganancias del ofertante que
                                                determinamos que no están relacionadas con incumplimientos por su parte de
                                                los términos y condiciones de uso o sospecha de actividad ilegal. Sin
                                                embargo, acepta que si consideramos que su (s) incumplimiento (s) de los
                                                términos y condiciones de uso nos ha causado o puede causarnos una pérdida,
                                                podemos retener todas las ganancias del ofertante que se le adeuden, pero
                                                que aún no se hayan pagado y podemos compensar dichos montos con las
                                                pérdidas sufridas por nosotros. </font><br len="0"> <br len="0">
                                            <font> e. Si una vez que hayamos terminado nuestra investigación, determinamos
                                                que se perderán las ganancias del ofertante, haremos todo lo posible para
                                                devolver los pagos de los adquisidores de buena fe, que resultaron en las
                                                ganancias del ofertante perdido a los adquisidores de buena fe relevantes
                                                que realizaron dichos pagos de los fanáticos. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " len="4238">
                                <div id="heading3_13" class="card-header" len="326">
                                    <h2 class="mb-0" len="304"><button type="button" data-toggle="collapse"
                                            data-target="#collapse3_13" aria-expanded="false" aria-controls="collapse3_13"
                                            class="btn btn-link collapsed text-left" len="130"> Promoción del cumplimiento
                                            tributario y del IVA: </button></h2>
                                </div>
                                <div id="collapse3_13" aria-labelledby="heading3_13" data-parent="#accordion_general"
                                    class="collapse" len="3754">
                                    <div class="card-body pl-4" len="3720">
                                        <p len="3713"><br len="0">
                                            <font> a. General: </font><br len="0">
                                            <font> - Recomendamos que todos los creadores busquen asesoramiento profesional
                                                para asegurarse de que cumple con las normas fiscales y del IVA locales,
                                                según sus circunstancias individuales y país donde reside. </font><br
                                                len="0">
                                            <font> - Al usar Smirrow como ofertante, usted garantiza (lo que significa que
                                                hace una promesa legalmente ejecutable) que ha informado y en el futuro
                                                informará sobre la recepción de todos los pagos realizados en relación con
                                                su uso de Smirrow a la autoridad fiscal correspondiente en su jurisdicción,
                                                según lo requiera la ley, según el país donde resida. </font><br len="0">
                                            <font> - Al usar Smirrow como ofertante, usted garantiza (lo que significa que
                                                hace una promesa legalmente ejecutable) que cumplirá en todo momento con
                                                todas las leyes y regulaciones relacionadas con los impuestos que se
                                                apliquen a usted. Si, en algún momento mientras tiene una cuenta Smirrow, se
                                                produce algún incumplimiento de impuestos en relación con usted (incluido el
                                                incumplimiento por su parte de informar las ganancias o la imposición de
                                                cualquier multa o interés relacionado con los impuestos) o si se produce
                                                algún litigio, Si se inicia una consulta o investigación en su contra que
                                                esté relacionada con, o que pueda conducir a, cualquier caso de
                                                incumplimiento tributario, usted acepta que: </font><br len="0"> <br
                                                len="0">
                                            <font> • Notificarnos por correo electrónico a legal@smirrow.com por escrito
                                                dentro de los 7 días posteriores a la ocurrencia del incumplimiento
                                                tributario o al comienzo del litigio, consulta o investigación (según
                                                corresponda). </font><br len="0">
                                            <font> • Envíenos de inmediato por correo electrónico a legal@smirrow.com con:
                                                (i) Detalles de los pasos que está tomando para abordar la ocurrencia del
                                                incumplimiento tributario y para evitar que vuelva a ocurrir, junto con los
                                                factores atenuantes que considere relevantes; y (ii) Cualquier otra
                                                información en relación con la ocurrencia del incumplimiento tributario que
                                                podamos requerir razonablemente. </font><br len="0"> <br len="0">
                                            <font> - Para evitar dudas, usted es responsable de sus propios asuntos fiscales
                                                y Smirrow no es responsable de ningún impago de impuestos por parte de los
                                                ofertantes. </font><br len="0">
                                            <font> - Nos reservamos el derecho de cerrar su cuenta Smirrow si nos notifica o
                                                nos damos cuenta de cualquier incumplimiento fiscal por su parte. </font><br
                                                len="0"> <br len="0">
                                            <font> b. IVA e impuestos de Colombia y ofertantes establecidos en Colombia:
                                            </font><br len="0"> <br len="0">
                                            <font> A los efectos del IVA de Colombia únicamente, se considera que los
                                                ofertantes prestan directamente sus servicios a los adquisidores y no a
                                                Smirrow. El IVA solo se aplica si su actividad y servicios están grabados
                                                por la ley tributaria, por lo anterior debe asesorarse. </font><br len="0">
                                            <br len="0">
                                            <font> Si eres un ofertante registrado para el IVA e impuestos en Colombia:
                                            </font><br len="0"> <br len="0">
                                            <font> A efectos del IVA e impuesto, usted acepta que Smirrow tiene la total
                                                libertad de hacer modificaciones en la aplicabilidad del IVA e impuestos, si
                                                así lo amerita por cambios y modificaciones en la ley tributaria colombiana,
                                                o cualquier otra norma legal vigente que así lo amerite. </font><br len="0">
                                            <br len="0">
                                            <font> No supervisamos las ganancias que los ofertantes reciben de otras fuentes
                                                de ingresos. Sin embargo, supervisaremos las ganancias anuales de los
                                                ofertantes de Colombia. </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
        </div>

        <div class="footer">
            Smirrow
        </div>
    </section>


@endsection
