@if(Session::has('message'))
    <script>
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
        toastr.success("{{ session('message') }}");
    </script>
@endif

@if(Session::has('error'))
    <script>
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
        toastr.error("{{ session('error') }}");
    </script>
@endif

@if(Session::has('warning'))
    <script>
        toastr.options = 
        {
            "closeButton" : true,
            "progressBar" : true
        }
        toastr.warning("{{ session('warning') }}");
    </script>
@endif