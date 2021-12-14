<!-- Vue.js & Axios-->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!-- Modernizr-->
<script src="{{ asset('vendor/modernizr/modernizr.custom.js') }}"></script>
<!-- jQuery-->
<script src="{{ asset('vendor/jquery/dist/jquery.js') }}"></script>
<!-- Bootstrap-->
<script src="{{ asset('vendor/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
<!-- PaceJS-->
{{-- <script src="{{ asset('vendor/pace-progress/pace.min.js') }}"></script> --}}
<!-- Flot charts -->
<script src="{{ asset('vendor/flot/jquery.flot.js')}}"></script>
<script src ="{{ asset('vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.js') }}"></script>
<!-- Material Colors-->
<script src="{{ asset('vendor/material-colors/dist/colors.js') }}"></script>
<!-- Screenfull-->
<script src="{{ asset('vendor/screenfull/dist/screenfull.js') }}"></script>
<!-- jQuery Localize-->
<script src="{{ asset('vendor/jquery-localize/dist/jquery.localize.js') }}"></script>
<!-- jQuery Form Validation-->
<script src="{{ asset('vendor/jquery-validation/dist/jquery.validate.js') }}"></script>
<script src="{{ asset('vendor/jquery-validation/dist/additional-methods.js') }}"></script>
<!-- Datables -->
<script src="{{ asset('vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{ asset('vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('vendor/datatables.net-buttons/js/buttons.colVis.js') }}"></script>
<script src="{{ asset('vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('vendor/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<!-- Toastr -->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
<script src="{{ asset('vendor/toastr/build/toastr.min.js') }}"></script>
<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- App script-->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/dasha-app.js') }}"></script>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script>
$(document).ready(function() {

    $('#datatable1_length').hide();
});
</script>
@include('layouts.error')
