<script src="{{ URL::asset('../assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('../assets/js/core/popper.min.js') }}"></script>
  <script src="{{ URL::asset('../assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('../assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
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