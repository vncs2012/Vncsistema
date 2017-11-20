<!-- jQuery -->
<script src="app/assets/vendors/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
<script src="app/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="app/assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="app/assets/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="app/assets/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="app/assets/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="app/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="app/assets/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="app/assets/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="app/assets/vendors/Flot/jquery.flot.js"></script>
<script src="app/assets/vendors/Flot/jquery.flot.pie.js"></script>
<script src="app/assets/vendors/Flot/jquery.flot.time.js"></script>
<script src="app/assets/vendors/Flot/jquery.flot.stack.js"></script>
<script src="app/assets/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="app/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="app/assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="app/assets/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="app/assets/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="app/assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="app/assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="app/assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="app/assets/vendors/moment/min/moment.min.js"></script>
<script src="app/assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Select2 -->
<script src="app/assets/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Custom Theme Scripts -->

<!-- iCheck -->
<script src="app/assets/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="app/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="app/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="app/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="app/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="app/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="app/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="app/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="app/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="app/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="app/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="app/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="app/assets/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
<script src="app/assets/vendors/jszip/dist/jszip.min.js"></script>
<script src="app/assets/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="app/assets/vendors/pdfmake/build/vfs_fonts.js"></script>

<script src="app/assets/build/js/custom.min.js"></script>
<script src="app/assets/script/controller.js"></script>


<!-- bootstrap-daterangepicker -->
<script>
  $(document).ready(function() {

    var cb = function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    };

    var optionSet1 = {
      startDate: moment().subtract(29, 'days'),
      endDate: moment(),
      minDate: '01/01/1950',
      maxDate: '12/31/2030',
      dateLimit: {
        days: 60
      },
      showDropdowns: true,
      showWeekNumbers: true,
      timePicker: false,
      timePickerIncrement: 1,
      timePicker12Hour: true,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      opens: 'left',
      buttonClasses: ['btn btn-default'],
      applyClass: 'btn-small btn-primary',
      cancelClass: 'btn-small',
      format: 'MM/DD/YYYY',
      separator: ' to ',
      locale: {
        applyLabel: 'Submit',
        cancelLabel: 'Clear',
        fromLabel: 'From',
        toLabel: 'To',
        customRangeLabel: 'Custom',
        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        firstDay: 1
      }
    };
    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    $('#reportrange').daterangepicker(optionSet1, cb);
    $('#reportrange').on('show.daterangepicker', function() {
      console.log("show event fired");
    });
    $('#reportrange').on('hide.daterangepicker', function() {
      console.log("hide event fired");
    });
    $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
      console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
    });
    $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
      console.log("cancel event fired");
    });
    $('#options1').click(function() {
      $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
    });
    $('#options2').click(function() {
      $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
    });
    $('#destroy').click(function() {
      $('#reportrange').data('daterangepicker').remove();
    });
  });
  $(document).ready(function() {
    var handleDataTableButtons = function() {
      if ($("#datatable-buttons").length) {
        $("#datatable-buttons").DataTable({
          dom: "Bfrtip",
          buttons: [
            {
              extend: "copy",
              className: "btn-sm"
            },
            {
              extend: "csv",
              className: "btn-sm"
            },
            {
              extend: "excel",
              className: "btn-sm"
            },
            {
              extend: "pdfHtml5",
              className: "btn-sm"
            },
            {
              extend: "print",
              className: "btn-sm"
            },
          ],
          responsive: true
        });
      }
    };

    TableManageButtons = function() {
      "use strict";
      return {
        init: function() {
          handleDataTableButtons();
        }
      };
    }();

    $('#datatable').dataTable();

    $('#datatable-keytable').DataTable({
      keys: true
    });

    $('#datatable-responsive').DataTable();

    $('#datatable-scroller').DataTable({
      ajax: "js/datatables/json/scroller-demo.json",
      deferRender: true,
      scrollY: 380,
      scrollCollapse: true,
      scroller: true
    });

    $('#datatable-fixed-header').DataTable({
      fixedHeader: true
    });

    var $datatable = $('#datatable-checkbox');

    $datatable.dataTable({
      'order': [[ 1, 'asc' ]],
      'columnDefs': [
        { orderable: false, targets: [0] }
      ]
    });
    $datatable.on('draw.dt', function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_flat-green'
      });
    });

    TableManageButtons.init();
  });
  <!--Select2 -->
    $(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Selecione um opção...",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        // maximumSelectionLength: 4,
        placeholder: "Selecione as opções",
        allowClear: true
      });
    });
  </script>
  <!-- /Select2 -->
</script>
