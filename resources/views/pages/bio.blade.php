@extends('layouts.app')

@section('title')
{{ config('app.name') }} Eche &trade;
@endsection



@section('content')
@php( $abouts = \App\Models\Abouts::all() )

<section style="background-color: #000 !important;">
    <section>
        <div class="container-fluid bg-black">
            <div class="">
                <div class="bio text-right">
                    <button class="btn biobtn"> <span>X</span></button>
                </div>
                <div style="background-color:#000 !important; color:#4AF626 !important;"
                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 biodetails">
                    <div id="niel" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        @foreach($abouts as $key => $about)
                        <p style="font-size:11px;">
                            {{ $about->about_text }}
                        </p>
                        @endforeach
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                        <h3 class="marquee"> <span> Niel Eche&trade;</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="text-right outerlinks nopadding">

                <div style="padding-right:0px;" class="links">
                    <img style="width:75px; height:auto;" src="https://media.giphy.com/media/12W5Sg2koWYnwA/giphy.gif"
                        alt="A Niel Eche image">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid pp">
            <h3>NIEL ECHE
                < BIO />
            </h3>
            <ul class="legal-index nopadding">
                <li><a href="#1"><strong>EARLY LIFE AND CHILDHOOD</strong></a></li>
                <li><a href="#2"><strong>PERSONAL DESIGN LANGUAGE</strong></a></li>
                <li><a href="#3"><strong>EDUCATION</strong></a></li>
                <li><a href="#4"><strong>WORK HISTORY</strong></a></li>

            </ul>

            <div id="primary-content" class="clearafter">
                <p>Get detailed insight on the life and work info of Niel Eche, made available by DUMMY CHARACTERS</p>

                <p><a name="1"></a><br>
                    <strong>I. EARLY LIFE AND CHILDHOOD</strong></p>
                <p>Born and raised in the city called Port Harcourt in Nigeria. Greatly influenced by Religion with a
                    constant need to write new narratives.
                </p>
                <p><a name="2"></a><br>
                    <strong>II. PERSONAL DESIGN LANGUAGE</strong></p>
                <ol>
                    <li class="row-spaced"><u>
                            < OPEN AND CLOSE TAGS /></u><br>
                    </li>
                    <li><u>CNTRL P - COPY , TRANSFORM AND PASTE</li>
                    <li><u>VERSION 2.0 - SIGN OF WORK IN PROGRESS</li>
                    <li><u>SOCIETAL COMMENTARY</li>
                    <li><u>100% TO 3% APPROACH - SIMPLIFYING A COMPLEX IDEA TO THE SIMPLIEST FORM</li>
                </ol>

                </li>

                </ul>
                </li>
                </ul>

                <p><a name="3"></a><br>
                    <strong>III. EDUCATION</strong></p>
                <ol>
                    <li><u>Rivers State University, Port Harcourt <u>
                                <ul class="spaced">
                                    <li>Mechanical Engineering <br>
                                        2015 - 2021</li>
                                </ul>
                    </li>
                </ol>

                <p><a name="4"></a><br>
                    <strong>IV. WORK HISTORY</strong></p>
                <ol>
                    <li><u>Mesh Design Studios<u>
                                <ul class="spaced">
                                    <li>Graphic Designer and Web Developer <br>
                                        2019 - Present</li>
                                </ul>
                    </li>
                    <li><u>Crusero<u>
                                <ul class="spaced">
                                    <li>Creative Director <br>
                                        2018 - Present</li>
                                </ul>
                    </li>
                    <li><u>Loudhouse<u>
                                <ul class="spaced">
                                    <li>Art Director <br>
                                        2018 - Present</li>
                                </ul>
                    </li>
                </ol>

                <p><a name="12"></a><br>
                    <strong>XII. QUESTIONS</strong></p>
                <p>If you have any questions for Niel Eche or ideas for collaboration , please send us an email at <a
                        href="mailto:info@dummy-characters.com">info@dummmy-characters.com</a>
                    or write us at Dummy Characters, c/o Loudhouse
                    Port Harcourt</p>
                <p>Last Updated on: May 5, 2020</p>
                <div class="backhome">
                    <a style="font-weight:bolder; font-size:14px;" href="{{route('index')}}">Back to Dummy Characters
                        homepage</a>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
</section>
@endsection
