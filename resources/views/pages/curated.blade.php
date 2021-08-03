@extends('layouts.app')

@section('title')
{{ config('app.name') }} Eche &trade;
@endsection

@section('content')
@php( $abouts = \App\Models\Abouts::all() )
@php( $sliders = \App\Models\Sliders::all() )
@php( $soundcloud = \App\Models\Soundcloud::all())
@php( $spotify = \App\Models\Spotify::all() )
@php( $apple = \App\Models\Apple::all() )

<section style=" background-image: url('https://i.pinimg.com/564x/e1/57/3a/e1573adaffb7fe16bec9ca9fee99d481.jpg') !important; background-repeat:no-repeat; background-size:cover; background-color:blue ;">
<section>
    <div class="container-fluid bg-black">
        <div class="">
            <div class="bio text-right">
                <button class="btn biobtn"> <span>X</span></button>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 biodetails">
                <div id="niel" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    @foreach($abouts as $key => $about)
                    <p style="font-size:11px;">
                        {{ $about->about_text }}
                    </p>
                    @endforeach
                    <p style="font-size:12px;"><a style="color:#333;" href="{{ route('bio') }}">Read More</a></p>
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
        <div class="text-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div style="margin-top:50px !important;" class="backhome">
                <a style="font-weight:bolder; font-size:14px; color: #000 !important; font-family:'Menlo'; text-decoration:underline !important;" href="{{ route('index') }}">Back to Dummy Characters homepage</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right outerlinks nopadding">
            <div style="padding-right:0px;" class="links ">
                <img style="width:140px; height:auto;" src="https://media.giphy.com/media/n5MuxRnPJiYko/giphy.gif"
                    alt="A Niel Eche image"> 
            </div>
            <div class="links ">
                <img src="{{ asset('files/images/37.ico') }}" alt="A Niel Eche image">
                <p>Loudhouse</p>
            </div>
            <div class="links">
                <img src="{{ asset('files/images/16.ico') }}" alt="A Niel Eche image">
                <p>Crusero</p>
            </div>
            <div style="padding-right:0px;" class="links">
                <img style="width:75px; height:auto;" src="https://media.giphy.com/media/12W5Sg2koWYnwA/giphy.gif"
                    alt="A Niel Eche image">

            </div>
        </div>
    </div>
</section>

<section class="visible-sm visible-xs ">
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders as $key => $slide)
                <div class="item bnw-filter {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('uploads/slider/') }}/{{ $slide->file_path }}" class="img-fluid">
                </div>
                @endforeach
            </div>
        </div><br>
    </div>
</section>


<section>
    <div class="container-fluid"><br>
        <div style="margin-bottom:50px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                @foreach($projects as $key => $project)
                <div id="{{ $project->title }} title" class="col-lg-6 col-md-6 col-sm-12 co-xs-12 nopadding">
                  
                    <div id="accordion">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 projectheader">
                            <h4>
                                <a name="midnight " data-toggle="collapse" aria-expanded="false"
                                    aria-controls="id{{ $project->id }}"
                                    href="#id{{ $project->id }}">{{ $project->title }}</a>
                            </h4>
                        </div>
                        <div class="text-right col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                                <a style="margin-left:0px !important;" class="dropdown-item"
                                    href={{ route('curated', [ $project->field]) }}>
                                    <button name="field_btn" class="btn biobtn">
                                        <span>{{ $project->field }}</span></button>
                                </a>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                                <a style="margin-left:0px !important;" class="dropdown-item"
                                    href={{ route('curatedd', [ $project->field2]) }}>
                                    <button name="field_btn" class="btn biobtn">
                                        <span>{{ $project->field2 }}</span></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 projectbody">
                                <p>{{ $project->location }}</p>
                            </div>
                            <div class="text-right col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <span style="font-size:20px;"
                                    class="flag-icon flag-icon-flag-{{ $project->flag }}"></span>
                            </div>
                            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12  projectbody ">
                                <p>{{ \Carbon\Carbon::parse($project->date)->format('d/m/Y')}}</p>
                            </div>
                        </div>

                        <div id="id{{ $project->id }}"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 projectbody collapse in">
                            <p>{{ $project->about }}
                            </p>
                            <img class="portimage" src="{{ $project->file_path }}"
                                alt="A Niel Eche image">
                            <div class="col-g-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 nopadding">
                                    <button name="project_btn" data-toggle="collapse" data-target="#1{{ $project->id }}"
                                        class=" btn biobtn"> <span class="box">More</span></button>

                                    <script>
                                        $(".box").click(function () {
                                            $(this).text() == "Less" ?
                                                $(this).text("More") : $(this).text("Less");
                                        });

                                    </script>
                                    <div id="1{{ $project->id }}" class="collapse">
                                        <br>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        @php($id = $project->id)
                                        @php( $projectImages = \App\Models\ProjectImages::where('project_id',
                                        $id)->get())
                                        @foreach($projectImages as $key => $pimage)
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <img style="width: 100% !important" class="portimage"
                                            src="{{ $pimage->file_path1 }}"
                                            alt="A Niel Eche image">
                                        </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion" class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right nopadding">
                                    <p> <a data-toggle="collapse" data-target="#2{{ $project->id }}"
                                            style="color:#000 !important; cursor: pointer !important;">Share</a></p>
                                    <div id="2{{ $project->id }}" class="collapse">
                                        <a style="color:#000; font-family:'Menlo';" target="_blank"
                                            href="http://twitter.com/share?text=check out {{ $project->title }}&url=https://dummy-characters.space/index#{{ $project->title }}">TW</a>
                                        <a style="color:#000; font-family:'Menlo';" target="_blank"
                                            href="https://www.facebook.com/sharer/sharer.php?u=https://dummy-characters.space/index#{{ $project->title }}">FB</a>
                                        <a style="color:#000; font-family:'Menlo';"
                                            href="whatsapp://send?text=https://dummy-characters.space/index#{{ $project->title }}">WH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hori col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <hr>
                    </div>
                    <div class="vl"></div>
                </div>
                @endforeach
            </div>
            <style>
                #active {
                    display: block !important;
                }

            </style>
    </div>
    </div>
</section>

<div class="container-fluid">
    <?php
        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
            echo '
            <div class="alert alert-success" role="alert">
                <button class="close" data-dismiss="alert"></button>
                <strong>Success: </strong>'.$_SESSION['success'].'
            </div>';
            unset($_SESSION['success']);
        }
        if (isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
            echo '<div class="alert alert-danger" role="alert">
            <button class="close" data-dismiss="alert"></button>
            <strong>Error: </strong>'.$_SESSION['status'].'
            </div>';
            
            unset($_SESSION['status']);
        }
    ?>
</div>
</section>


@endsection
