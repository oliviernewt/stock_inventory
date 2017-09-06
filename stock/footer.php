<!-- footer content -->
<footer>
  <div class="pull-right">
  <i class="fa fa-cube"></i>  Stock Inventory - LITE VERSION. by <a href="https://www.facebook.com/nk1995p/" target="_blank">NATTAPONG KANTAKOON</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->


<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- <script src="jquery-3.1.1.min.js"></script> -->


<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- PNotify -->
<script src="../vendors/pnotify/dist/pnotify.js"></script>
<script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
<script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>

<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- jQuery custom content scroller -->
<script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
<!-- jQuery Smart Wizard -->
<script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<!-- Datatables -->
<script>
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
</script>
<!-- /Datatables -->
<!-- jQuery Smart Wizard -->
<script>
  $(document).ready(function() {
    $('#wizard').smartWizard();

    $('#wizard_verticle').smartWizard({
      transitionEffect: 'slide'
    });

    $('.buttonNext').addClass('btn btn-success');
    $('.buttonPrevious').addClass('btn btn-primary');
    $('.buttonFinish').addClass('btn btn-default');
  });
</script>
<!-- /jQuery Smart Wizard -->


<div id="custom_notifications" class="custom-notifications dsp_none">
  <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
  </ul>
  <div class="clearfix"></div>
  <div id="notif-group" class="tabbed_notifications"></div>
</div>
<!-- PNotify -->
<script>
  $(document).ready(function() {
    new PNotify({
      title: "PNotify",
      type: "info",
      text: "Welcome. Try hovering over me. You can click things behind me, because I'm non-blocking.",
      nonblock: {
          nonblock: true
      },
      addclass: 'dark',
      styling: 'bootstrap3',
      hide: false,
      before_close: function(PNotify) {
        PNotify.update({
          title: PNotify.options.title + " - Enjoy your Stay",
          before_close: null
        });

        PNotify.queueRemove();

        return false;
      }
    });

  });
</script>
<!-- /PNotify -->

<!-- Custom Notification -->
<script>
  $(document).ready(function() {
    var cnt = 10;

    TabbedNotification = function(options) {
      var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
        "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

      if (!document.getElementById('custom_notifications')) {
        alert('doesnt exists');
      } else {
        $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
        $('#custom_notifications #notif-group').append(message);
        cnt++;
        CustomTabs(options);
      }
    };

    CustomTabs = function(options) {
      $('.tabbed_notifications > div').hide();
      $('.tabbed_notifications > div:first-of-type').show();
      $('#custom_notifications').removeClass('dsp_none');
      $('.notifications a').click(function(e) {
        e.preventDefault();
        var $this = $(this),
          tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
          others = $this.closest('li').siblings().children('a'),
          target = $this.attr('href');
        others.removeClass('active');
        $this.addClass('active');
        $(tabbed_notifications).children('div').hide();
        $(target).show();
      });
    };

    CustomTabs();

    var tabid = idname = '';

    $(document).on('click', '.notification_close', function(e) {
      idname = $(this).parent().parent().attr("id");
      tabid = idname.substr(-2);
      $('#ntf' + tabid).remove();
      $('#ntlink' + tabid).parent().remove();
      $('.notifications a').first().addClass('active');
      $('#notif-group div').first().css('display', 'block');
    });
  });
</script>
<!-- /Custom Notification -->
