

<script src="a/jquery.min.js"></script>

<script src="a//popper.min.js"></script> 
<script src="a//bootstrap.min.js"></script>

<script src="a/perfect-scrollbar.jquery.min.js"></script>

<script src="a/waves.js"></script>

<script src="a/sidebarmenu.js"></script>

<script src="a/sticky-kit.min.js"></script>
<script src="a/jquery.sparkline.min.js"></script>

<script src="a/custom.min.js"></script>



<script src="a/jQuery.style.switcher.js"></script>

<script src="a/raphael-min.js"></script>
<script src="a/morris.min.js"></script>

<script src="a/d3.min.js"></script>
<script src="a/c3.min.js"></script>

<script src="a/jquery.sparkline.min.js"></script>

<script src="a/dashboard1.js"></script>
<script src="a/sweetalert2.all.min.js"></script>
<script src="a/toastr.min.js"></script>
<script src="a/jquery.PrintArea.js" type="text/JavaScript"></script>
<script>
    $(function() {
        $("#print").on('click', function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>
<script>
        $('.counter-count').each(function () {
            $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 5000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
            });
        });

    </script>
  <script src="a/jquery.dataTables.min.js"></script>

<script src="a/dataTables.buttons.min.js"></script>
<script src="a/buttons.flash.min.js"></script>
<script src="a/jszip.min.js"></script>
<script src="a/pdfmake.min.js"></script>
<script src="a/vfs_fonts.js"></script>
<script src="a/buttons.html5.min.js"></script>
<script src="a/buttons.print.min.js"></script>

<script>
    $(function() {
        $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
<script src="a/clipboard.min.js"></script>
<script>
        $(function() {
            var clipboard = new ClipboardJS('[data-clipboard]')
                .on("success", function(e) {
                    $(function(){
                      toastr["success"]("Copied");
                      toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                      }
                  });
                });
        });
    </script>
<script type="text/javascript">
    $(document).ready(function() {
      $('select[name="withdraw_from"]').on('change', function() {
        var with_from=$(this).val();
        if (with_from==1) {
          $('#investment').show();
        } 
        else {
          $('#investment').hide();
          $('#investment_from').hide();
        }
      });
      //when an investment is selected
      $('select[name="investment"]').on('change', function() {
         $('#investment_from').show();
      });
    });
  </script>
  