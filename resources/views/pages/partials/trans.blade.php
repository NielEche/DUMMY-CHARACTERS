
<video style="z-index: 100;" class="hidden" id="video1" width="100%" playsinline autoplay muted>
    <source src="{{ asset('files/media/vid/mars.mp4') }}" type="video/mp4" />
    Your browser does not support the video tag.
</video>

<video style="z-index: 100;" class="hidden" id="video2" width="100%" playsinline autoplay muted>
    <source src="{{ asset('files/media/vid/mars.mp4') }}" type="video/mp4" />
    Your browser does not support the video tag.
</video>

<video style="z-index: 100;" class="hidden" id="video3" width="100%" playsinline autoplay muted>
    <source src="{{ asset('files/media/vid/mars.mp4') }}" type="video/mp4" />
    Your browser does not support the video tag.
</video>

<video style="z-index: 100;" class="hidden" id="video4" width="100%" playsinline autoplay muted>
    <source src="{{ asset('files/media/vid/mars.mp4') }}" type="video/mp4" />
    Your browser does not support the video tag.
</video>

<video style="z-index: 100;" class="hidden" id="video5" width="100%" playsinline autoplay muted>
    <source src="{{ asset('files/media/vid/mars.mp4') }}" type="video/mp4" />
    Your browser does not support the video tag.
</video>

<video style="z-index: 100;" class="hidden" id="video6" width="100%" playsinline autoplay muted>
    <source src="{{ asset('files/media/vid/mars.mp4') }}" type="video/mp4" />
    Your browser does not support the video tag.
</video>

<video style="z-index: 100;" class="hidden" id="video7" width="100%" playsinline autoplay muted>
    <source src="{{ asset('files/media/vid/mars.mp4') }}" type="video/mp4" />
    Your browser does not support the video tag.
</video>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js">
</script>

<script type="text/javascript">
    $("#winner").click(function () {
        $("#video1").trigger('play');
        $("#video1").toggle();
    });

    $(document).ready(function () {
        $("#video1").bind('ended', function () {
            location.href = "{{ route('winner') }}";
        });
    });
</script>

<script type="text/javascript">
    $("#pvo").click(function () {
        $("#video2").trigger('play');
        $("#video2").toggle();
    });

    $(document).ready(function () {
        $("#video2").bind('ended', function () {
            location.href = "{{ route('outro') }}";
        });
    });
</script>

<script type="text/javascript">
    $("#mc").click(function () {
        $("#video3").trigger('play');
        $("#video3").toggle();
    });

    $(document).ready(function () {
        $("#video3").bind('ended', function () {
            location.href = "{{ route('mc') }}";
        });
    });
</script>

<script type="text/javascript">
    $("#vibe").click(function () {
        $("#video4").trigger('play');
        $("#video4").toggle();
    });

    $(document).ready(function () {
        $("#video4").bind('ended', function () {
            location.href = "{{ route('vibe') }}";
        });
    });
</script>

<script type="text/javascript">
    $("#smg").click(function () {
        $("#video5").trigger('play');
        $("#video5").toggle();
    });

    $(document).ready(function () {
        $("#video5").bind('ended', function () {
            location.href = "{{ route('smg') }}";
        });
    });
</script>

<script type="text/javascript">
    $("#sippin").click(function () {
        $("#video6").trigger('play');
        $("#video6").toggle();
    });

    $(document).ready(function () {
        $("#video6").bind('ended', function () {
            location.href = "{{ route('sippin') }}";
        });
    });
</script>

<script type="text/javascript">
    $("#december").click(function () {
        $("#video7").trigger('play');
        $("#video7").toggle();
    });

    $(document).ready(function () {
        $("#video7").bind('ended', function () {
            location.href = "{{ route('december') }}";
        });
    });
</script>