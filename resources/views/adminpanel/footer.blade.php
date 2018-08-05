</section>

<!-- Jquery Core Js -->
<script src="{{ asset('cpanel/plugins/jquery/jquery.min.js') }}"></script>
{{--Select 2 Library--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

{{--Selection Categories--}}
<script>

    $(document).ready(function () {
        $('.myName').html('Adel Abou Elezz');
    });
    $('.deleteme').submit(function () {
        return confirm('Are You Sure you want to delete this Element?');
    });

</script>
@stack('js')
<!-- Bootstrap Core Js -->
<script src="{{ asset('cpanel/plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Select Plugin Js -->
<script src="{{ asset('cpanel/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('cpanel/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{ asset('cpanel/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{ asset('cpanel/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('cpanel/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>

<script src="{{ asset('cpanel/js/pages/tables/jquery-datatable.js')}}"></script>
<!-- Slimscroll Plugin Js -->
<script src="{{ asset('cpanel/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('cpanel/plugins/node-waves/waves.js') }}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{ asset('cpanel/plugins/jquery-countto/jquery.countTo.js') }}"></script>

<!-- Morris Plugin Js -->
<script src="{{ asset('cpanel/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('cpanel/plugins/morrisjs/morris.js') }}"></script>

<!-- ChartJs -->
<script src="{{ asset('cpanel/plugins/chartjs/Chart.bundle.js') }}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{ asset('cpanel/plugins/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ asset('cpanel/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('cpanel/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('cpanel/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('cpanel/plugins/flot-charts/jquery.flot.time.js') }}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{ asset('cpanel/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('cpanel/js/admin.js') }}"></script>
<script src="{{ asset('cpanel/js/pages/index.js') }}"></script>
<script src="{{ asset('cpanel/js/pages/forms/advanced-form-elements.js')}}"></script>


<!-- Demo Js -->
<script src="{{ asset('cpanel/js/demo.js') }}"></script>

</body>

</html>