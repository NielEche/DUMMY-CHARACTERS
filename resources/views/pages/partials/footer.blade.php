<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content"> 
            <div style="padding:5px !important;" class="modal-header contactbio">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                    <img style="width:20px !important; height:20px !important;" src="{{ asset('files/images/terminal.png') }}" alt="">
                    <span style="color:#d8d3cd !important; font-family:'Menlo';">Contact Us</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                    <button type="button" style="margin-top:0px !important;" class="close btn terminalbiobtn" data-dismiss="modal" aria-hidden="true"><span>X</span> 
                    </button>
                    <button type="button" class=" btn terminalbiobtn" aria-hidden="true"><span><img style="width:11px; height:15px;" src="{{asset('files/images/max.png') }}" alt="A Niel Eche image"></span> 
                    </button>
                    <button type="button" class=" btn terminalbiobtn"  aria-hidden="true"><span ><img style="width:9px; height:15px;" src="{{asset('files/images/min.png') }}" alt="A Niel Eche image"></span> 
                    </button>
                </div>
            </div>
            <div class="modal-body contactbiodetails">
                <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input style="outline: none" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input style="outline: none" type="email" name="email" id="email">
                    </div>

                     <label for="message">Message:</label>
                    <div class="form-group">
                       <textarea style="width:100% !important; outline: none" name="message" id="message" cols="50" rows="8"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" name="formsave">Submit !!!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content"> 
            <div style="padding:5px !important;" class="modal-header bio">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                    <span style="color:#d8d3cd !important; font-family:'Menlo';">Social Media</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                    <button type="button" style="margin-top:0px !important;" class="close btn terminalbiobtn" data-dismiss="modal" aria-hidden="true"><span>X</span> 
                    </button>
                    <button type="button" class=" btn terminalbiobtn" aria-hidden="true"><span><img style="width:11px; height:15px;" src="{{ asset('files/images/max.png') }}" alt="A Niel Eche image"></span> 
                    </button>
                    <button type="button" class=" btn terminalbiobtn"  aria-hidden="true"><span ><img style="width:9px; height:15px;" src="{{ asset('files/images/min.png') }}" alt="A Niel Eche image"></span> 
                    </button>
                </div>
            </div>
            <div class="modal-body biodetails">
                <div class="container-fluid text-center">
                    <div style="padding-bottom:20px !important;" class="col-sm-6 col-xs-6 nopadding">
                        <a href="https://www.instagram.com/niel_eche/" target="_blank"><img src="{{ asset('files/images/insta.png') }}" alt="A Niel Eche image"></a>
                    </div>
                    <div style="padding-bottom:20px !important;" class="col-sm-6 col-xs-6 nopadding">
                        <a href="https://twitter.com/niel_eche" target="_blank"><img src="{{ asset('files/images/twitter.png') }}" alt="A Niel Eche image"></a>
                    </div>
                    <div style="padding-bottom:20px !important;" class="col-sm-6 col-xs-6 nopadding">
                        <a href="https://www.behance.net/dahny" target="_blank"><img src="{{ asset('files/images/behance.png') }}" alt="A Niel Eche image"></a>
                    </div>
                    <div style="padding-bottom:20px !important;" class="col-sm-6 col-xs-6 nopadding ">
                        <a href="https://www.pinterest.com/NielEche/" target="_blank"><img src="{{ asset('files/images/pin.png') }}" alt="A Niel Eche image"></a>
                    </div>
                    <div style="padding-bottom:20px !important;" class="col-sm-6 col-xs-6 nopadding ">
                        <a href="https://www.saatchiart.com/nieleche" target="_blank"><img title="SaatchiArt" src="{{ asset('files/images/saatchi.png') }}" alt="A Niel Eche image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content"> 
            <div style="padding:5px !important;" class="modal-header bio">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                    <span style="color:#d8d3cd !important; font-family:'Menlo';">Policies</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                    <button type="button" style="margin-top:0px !important;" class="close btn terminalbiobtn" data-dismiss="modal" aria-hidden="true"><span>X</span> 
                    </button>
                    <button type="button" class=" btn terminalbiobtn" aria-hidden="true"><span><img style="width:11px; height:15px;" src="{{ asset('files/images/max.png') }}" alt="A Niel Eche image"></span> 
                    </button>
                    <button type="button" class=" btn terminalbiobtn"  aria-hidden="true"><span ><img style="width:9px; height:15px;" src="{{ asset('files/images/min.png') }}" alt="A Niel Eche image"></span> 
                    </button>
                </div>
            </div>
            <div class="modal-body biodetails">
                <div class="container-fluid text-center">
                    <button class="btn footerbtn"> <a  href="{{ route('privacy') }}"><span >Privacy Policy</span></a></button><br>
                    <button style="margin-top:10px;" class="btn footerbtn"> <a href="{{ route('tandc') }}"><span>Terms and Conditions</span></a></button>
                </div>
            </div>
        </div>
    </div>
</div>


@if(session()->has('message'))
    <div class="alert w-50" role="alert"> 
        <div style="padding:5px !important;" class="modal-header contactbio">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                <img style="width:20px !important; height:20px !important;" src="{{ asset('files/images/terminal.png') }}" alt="">
                <span style="color:#d8d3cd !important; font-family:'Menlo';">Contact Us</span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                <button type="button" style="margin-top:0px !important;" class="close btn terminalbiobtn" data-dismiss="alert"><span>X</span> 
                </button>
                <button type="button" class=" btn terminalbiobtn" aria-hidden="true"><span><img style="width:11px; height:15px;" src="{{asset('files/images/max.png') }}" alt="A Niel Eche image"></span> 
                </button>
                <button type="button" class=" btn terminalbiobtn"  aria-hidden="true"><span ><img style="width:9px; height:15px;" src="{{asset('files/images/min.png') }}" alt="A Niel Eche image"></span> 
                </button>
            </div>
        </div>
        <div class="modal-body contactbiodetails">
            <form method="POST" class="py-5" enctype="multipart/form-data">
                <div class="form-group py-5">
                    <label for="name"> {{ session()->get('message') }}</label>
                    <input style="outline: none" type="text" name="name" id="name">
                </div>
            </form>
        </div>
    </div>
@endif



<footer>
<div class="container-fluid nopadding">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3 footersec nopadding ">
            <button style="width:100%;" class="btn footerbtn"> <a href="{{ route('index') }}"><span style="font-weight:bold !important; text-left:5px !important;"><img src="{{ asset('files/images/smile.png') }}" alt="A Niel Eche image">Eche</span></a></button>
        </div>
        
        <div class="col-lg-7 col-md-7 visible-lg visible-md footersocials nopadding footersec">
            <button style="margin-right:12px;" class="btn footerbtn footerbtn1">  </button>
            <a href="https://www.instagram.com/niel_eche/" target="_blank"><img title="Instagram" src="{{ asset('files/images/insta.png') }}" alt="A Niel Eche image"></a>
            <a href="https://twitter.com/niel_eche" target="_blank"><img title="Twitter" src="{{ asset('files/images/twitter.png') }}" alt="A Niel Eche image"></a>
            <a href="https://www.behance.net/dahny" target="_blank"><img title="Behance" src="{{ asset('files/images/behance.png') }}" alt="A Niel Eche image"></a>
            <a href="https://www.pinterest.com/NielEche/" target="_blank"><img title="Pinterest" src="{{ asset('files/images/pin.png') }}" alt="A Niel Eche image"></a>
            <a href="https://www.saatchiart.com/nieleche" target="_blank"><img title="SaatchiArt" src="{{ asset('files/images/saatchi.png') }}" alt="A Niel Eche image"></a>
            <button style="margin-right:12px;" class="btn footerbtn footerbtn1"> </button>
            <button class="btn footerbtn"> <a  href="{{ route('privacy') }}"><span >Privacy Policy</span></a></button>
            <button class="btn footerbtn"> <a href="{{ route('tandc') }}"><span>Terms & Conditions</span></a></button>
        </div>

        <div style="left:30px !important;" class="col-sm-3 col-xs-3 visible-sm visible-xs nopadding">
            <a class="px-1" data-toggle="modal" data-target="#myModal1"><img title="Social Media" style="width:20px !important; height:20px !important;" src="{{ asset('files/images/43.ico') }}" alt="A Niel Eche image"></a>
            <a class="px-1" data-toggle="modal" data-target="#myModal2"><img title="Policies" style="width:28px !important; height:28px !important;" src="{{ asset('files/images/21.ico') }}" alt=""></a>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-right nopadding">
            <button style="margin-right:5px;" class="btn footerbtn footerbtn1">  </button>
            <a target="_blank" class="myDiv" href="https://music.apple.com/ng/artist/niel-eche/1466858634"><img title="Apple Music" src="{{ asset('files/images/apple.png') }}" alt=""></a>
            <a target="_blank" href="https://open.spotify.com/artist/5g0PVwViRJAMgEF2XBulgx"><img title="Spotify" src="{{ asset('files/images/spot.png') }}" alt=""></a>
            <a data-toggle="modal" data-target="#myModal"><img title="Contact Us" style="width:20px !important; height:20px !important;" src="{{ asset('files/images/terminal.png') }}" alt=""></a>
    
            <button class="btn footerbtn footertimeBtn">
                <span style="font-size:12px !important;" id="txt"></span>
            </button>
            <script>
                function startTime() {
                    var today = new Date() ;
                    var h = today.getHours();
                    var m = today.getMinutes();
                    var s = today.getSeconds();
                    m = checkTime(m);
                    s = checkTime(s);

                    document.getElementById('txt').innerHTML = 
                    h + ":" + m + ":" + s;
                    var t = setTimeout(startTime, 500);
                }

                function checkTime(i) {
                    if (i < 10) {i = "0" + i}; 
                    return i ;
                }
            </script>
        
        </div>
    </div>
</div>
</footer>
<script>
// Wait for window load
$(window).load(function() {
// Animate loader off screen
$(".se-pre-con").fadeOut("slow");;
});
</script>

<script>
$().alert();

setTimeout(function(){$('.alert').
alert('close')}, 3000);
</script>
