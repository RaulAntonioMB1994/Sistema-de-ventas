<script src="{{ URL::asset('../assets/js/core/jquery.min.js') }}"></script>
<script src="{{ URL::asset('../assets/js/core/popper.min.js') }}"></script>
<script src="{{ URL::asset('../assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('../assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Google Maps Plugin    -->
<!-- Chart JS -->
<script src="{{ URL::asset('../assets/js/plugins/chartjs.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ URL::asset('../assets/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ URL::asset('../assets/js/paper-dashboard.min.js?v=2.0.0') }}" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ URL::asset('../assets/demo/demo.js') }}"></script>
<script>
  $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
</script>

@if(session()->has('success'))
<script>
  toastr.success("{{ Session::get('success') }}")
</script>
@endif

@if(session()->has('error'))
<script>
  toastr.success("{{ Session::get('error') }}")
</script>
@endif

@if(session()->has('info'))
<script>
  toastr.success("{{ Session::get('info') }}")
</script>
@endif

@if(session()->has('warning'))
<script>
  toastr.success("{{ Session::get('warning') }}")
</script>
@endif

<link href="{{ URL::asset('../assets/js/toastr.min.js') }}" rel="stylesheet" />