</body>



<!--   Core JS Files   -->
<script src="{{URL::asset('cms/assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('cms/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{URL::asset('cms/assets/js/bootstrap-checkbox-radio.js')}}"></script>
<!--  Charts Plugin -->
<script src="{{URL::asset('cms/assets/js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{URL::asset('cms/assets/js/bootstrap-notify.js')}}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{URL::asset('cms/assets/js/paper-dashboard.js')}}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{URL::asset('cms/assets/js/demo.js')}}"></script>



<!--Delete Alert-->

<script src="{{URL::asset('cms/assets/js/sweetalert.js')}}" ></script>


<!-- <script type="text/javascript">


    $('.remove').click(function(){

        swal({

                    title: "Are you sure want to remove this item?",

                    text: "You will not be able to recover this item",

                    type: "warning",

                    showCancelButton: true,

                    confirmButtonClass: "btn-danger",

                    confirmButtonText: "Confirm",

                    cancelButtonText: "Cancel",

                    closeOnConfirm: false,

                    closeOnCancel: false

                },

                function(isConfirm) {

                    if (isConfirm) {

                        swal("Deleted!", "Your item deleted.", "success");

                    } else {

                        swal("Cancelled", "You Cancelled", "error");

                    }

                });

    });


</script> -->

</html>