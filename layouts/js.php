
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets/template/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assets/template/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets/template/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/template/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/template/plugins/jszip/jszip.min.js"></script>
<script src="assets/template/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/template/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- daterangepicker -->
<script src="assets/template/plugins/moment/moment.min.js"></script>
<script src="assets/template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/template/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/template/dist/js/adminlte.js"></script>
<script>
	$(function () {
		$('.datatables-1').DataTable({
			"paging": true,
			"lengthChange": true,
			"searching": true,
			"ordering": false,
			"info": true,
			"autoWidth": false,
			"responsive": false,
			"pageLength": 10
		});
	});
</script>