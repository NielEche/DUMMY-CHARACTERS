@extends('layouts.admin')

@section('title')
Admin Dashboard | Project Images
@endsection

@section('content')
<div class="page-container ">
    <div class="page-content-wrapper ">
        <div class="content ">


            <div class="container">
                <div class="card shadow mb-2">
                    <div class="card-body">
                        <div class="card-header p-0">
                            <h4 class=" font-weight-bold text-black">Project Images</h4>
                        </div>
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
                                <button data-toggle="modal" data-target="#addprojectimages" id="btnStickUpSizeToggler"
                                    class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add Image
                                </button>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class=" container-fluid  container-fixed-lg">

                <div class="row">
                    @if ($projectImages->count() > 0)
                    @foreach($projectImages as $index => $projectImages)
                    <div class="col-md-3">
                        <div class="card-title ">
                            <div class="active">
                                <img src="{{ $projectImages->file_path1 }}"
                                    class="eventsimg w-100" alt="">
                            </div>
                        </div>

                        <h5 style="font-size:16px;">{{ $projectImages->name }}</h5>
                        <div class="btn-group">
                            <a class="dropdown-item" href={{"editI/".$projectImages->id}}>
                                <button type="submit" name="edit_speaker_btn" class="btn btn-success"><i
                                        class="fa fa-pencil"></i>
                                </button>
                            </a>
                            <a class="dropdown-item" href={{"deleteImages/".$projectImages['id']}}>
                                <button type="submit" name="speaker_delete_btn" class="btn btn-danger"><i
                                        class="fa fa-trash-o"></i>
                                </button>
                            </a>
                        </div>
                        <hr>
                    </div>
                    @endforeach
                    @else
                   
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('liquidbox.partials.modals.addprojectimages') 
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
