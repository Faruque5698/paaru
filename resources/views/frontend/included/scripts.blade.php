<script src="{{ asset('assets/frontend/js/web/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/web/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/web/bootstrap.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@stack('after-scripts')

<script type="text/javascript" src="{{ asset('assets/frontend/lightgallery/js/lightgallery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/lightgallery/js/lg-thumbnail.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/lightgallery/js/lg-fullscreen.min.js') }}"></script>


<!-- Custom JS -->
<script src="{{ asset('assets/frontend/js/custom/custom.js') }}"></script>

<script type="text/javascript">
$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 500) {
    $(".bottom-header").addClass("bottom-header-fixed");
  } else {
    $(".bottom-header").removeClass("bottom-header-fixed");
  }
});
</script>

<script type="text/javascript">
$(document).ready(function(){
  $('#lightgallery').lightGallery();
});

$(document).ready(function() {
    $('.select2').select2();
});
</script>
