@extends('layouts.admin')

@section('title')
Admin Dashboard | Home
@endsection

@section('content')
<div class="page-container ">
    <div class="page-content-wrapper ">
        <div class="content ">
          

            <div class="jumbotron" data-pages="parallax">
                <div class=" container-fluid   container-fixed-lg">
                    <div class="inner">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Web Pages</a></li>
                            <li class="breadcrumb-item active">Home Page</li>
                        </ol>
                    </div>
                </div>
            </div>

            @if(session()->has('message'))
            <div class="alert alert-success w-50" role="alert">
                <button class="close" data-dismiss="alert"></button>
                <strong> {{ session()->get('message') }}</strong>
            </div>
            @endif


            <div class=" container-fluid   container-fixed-lg">
                <div class="card card-transparent">
                    <section style="padding-bottom:0px;">
                        <header class="page-header">
                            <h1 class="page-title" style="font-weight: bold !important;">HomePage Slider</h1>
                            <!--<h5 class="page-subtitle"><span>Meet the dreamweavers.</span></h5>-->
                        </header>
                        <div class="paragraph in-view in-view--in">
                            <div class="row in-view__child in-view__child--fadein in-view__child--in">
                                <div class="col-12 col-lg-6">
                                    <!--<div class="dashed in-view__child in-view__child--in">
	                          <p>We curate our speakers bearing in mind the African narrative. Our speakers are thinkers, builders and innovators that are Africans by origin, working on African problems or Africans in the diaspora making a difference in the societies they find themselves notwithstanding the fact that peoples of other descent can as well be invited to speak to our audience as far as they meet our rigorous screening process during curation.</p>
	                        </div>-->
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="card-header ">
                        <div class="pull-right">
                            <div class="col-xs-12">
                                <button data-toggle="modal" data-target="#addslider" id="btnStickUpSizeToggler"
                                    class="btn btn-success btn-cons"><i class="fa fa-plus"></i> Add Images 
                                </button>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
  
                </div>
            </div>


            <div class=" container-fluid  container-fixed-lg">
                <div class="row">
                    @if ($sliders->count() > 0)
                    @foreach($sliders as $index => $slider)
                    <div class="col-md-3 p-0">
                        <div class="card card-transparent m-0">
                            <div class="card-header ">
                                <div class="card-title events">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('uploads/slider/') }}/{{ $slider->file_path }}"
                                                    class="eventsimg w-100" alt="">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            
                            <div class="card-body ">
                                <div style="display: flex;">
                                    <div class="dropdown dropdown-default">
                                        <button class="btn dropdown-toggle text-center" style="width:150px!important;"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href={{"editHS/".$slider['id']}}>
                                                <button name="edit_event_btn"
                                                    class="btn btn-success"> EDIT <i class="fa fa-pencil"></i></button>
                                            </a>
                                           <a class="dropdown-item" href={{"deleteslider/".$slider['id']}}>
                                               <button type="submit" name="event_delete_btn"
                                                        class="btn btn-danger">DELETE <i
                                                            class="fa fa-trash-o"></i></button> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="text-center">
                        <a href="" class="text-white" id="add_activity">
                            ADD Images
                        </a>
                    </div>
                    @endif


                </div>
            </div>


            <div class=" container-fluid  container-fixed-lg">
                <div class="card card-transparent">
                    <section style="padding-bottom:0px;">
                        <header class="page-header">
                            <h1 class="page-title" style="font-weight: bold !important;">About Niel</h1>
                            <!--<h5 class="page-subtitle"><span>Meet the dreamweavers.</span></h5>-->
                        </header>
                        <div class="paragraph in-view in-view--in">
                            <div class="row in-view__child in-view__child--fadein in-view__child--in">
                                <div class="col-12 col-lg-6">
                                    <!--<div class="dashed in-view__child in-view__child--in">
	                          <p>We curate our speakers bearing in mind the African narrative. Our speakers are thinkers, builders and innovators that are Africans by origin, working on African problems or Africans in the diaspora making a difference in the societies they find themselves notwithstanding the fact that peoples of other descent can as well be invited to speak to our audience as far as they meet our rigorous screening process during curation.</p>
	                        </div>-->
                                </div>
                            </div>
                        </div>
                    </section>
  
                </div>
            </div>

            <div class=" container-fluid  container-fixed-lg">
                <div class="row">
                    @if ($abouts->count() > 0)
                    @foreach($abouts as $index => $about)
                    <div class="col-md-12 p-0">
                        <div class="card card-transparent m-0">
                            <div class="card-header pt-0">
                                <div class=" events">
                                    <p>{{ $about->about_text }}</p>
                              </div>
                            </div>
                            
                            <div class="card-body ">
                                <div style="display: flex;">
                                    <div class="dropdown dropdown-default">
                                        <button class="btn dropdown-toggle text-center" style="width:150px!important;"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href={{"editHA/".$about['id']}}>
                                                <button name="edit_event_btn"
                                                    class="btn btn-success"> EDIT <i class="fa fa-pencil"></i></button>
                                            </a>
                                           <!-- <a class="dropdown-item" href={{"deleteheader/".$about['id']}}>
                                               <button type="submit" name="event_delete_btn"
                                                        class="btn btn-danger">DELETE <i
                                                            class="fa fa-trash-o"></i></button> 
                                            </a>-->
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="text-center">
                        <a href="" class="btn blue-btn text-white" id="add_activity">
                            ADD Partners
                        </a>
                    </div>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>

@include('liquidbox.partials.modals.addslider')
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $(function () {

            $('form[name=events]').validate({

                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    event_name: "required",
                    event_theme: "required",
                    date: "required",
                    about: "required"
                },
                // Specify validation error messages
                messages: {
                    event_name: "Please enter your event name",
                    event_theme: "Please enter your event theme",
                    date: "Please select a date",
                    about: "Please write a description"
                },


                submitHandler: function (form) {
                    $('#submit').val('Submiting')
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function (response) {
                            if (response.success != true) {
                                swal({
                                    title: "OOPS!",
                                    text: resoponse.message,
                                    icon: "error",
                                    button: "Ok",
                                });
                                document.forms['events'].reset()
                                $('#submit').val('submit')
                            } else {
                                swal({
                                    title: "GOOD JOB!",
                                    text: response.message,
                                    icon: "success",
                                    button: "Ok",
                                });
                                document.forms['events'].reset()
                                $('#submit').val('submit')
                            }
                        },
                        error: function (xhr) {
                            $('#submit').val('submit')
                            swal({
                                title: "OOPS!",
                                text: "Something went wrong",
                                icon: "error",
                                button: "Ok",
                            });
                            document.forms['events'].reset()
                            $('#submit').val('submit')
                        }
                    });
                }
            });
        });

    });

</script>
@endsection
