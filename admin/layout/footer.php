
<!-- footer content -->
<footer>
	<div class="pull-right">
		Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
	</div>
	<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../assets/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../assets/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../assets/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../assets/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../assets/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../assets/vendors/Flot/jquery.flot.js"></script>
<script src="../assets/vendors/Flot/jquery.flot.pie.js"></script>
<script src="../assets/vendors/Flot/jquery.flot.time.js"></script>
<script src="../assets/vendors/Flot/jquery.flot.stack.js"></script>
<script src="../assets/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../assets/vendors/flot.curvedlines/curvedLines.js"></script>
<script src="../assets/vendors/validator/validator.js"></script>
<!-- DateJS -->
<script src="../assets/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../assets/vendors/moment/min/moment.min.js"></script>
<script src="../assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- datatables -->
<script src="../assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../assets/vendors/moment/min/moment.min.js"></script>
    <script src="../assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="../assets/build/js/custom.min.js"></script>

<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</body>
</html>
