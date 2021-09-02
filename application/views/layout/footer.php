</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2018 Yourdomian. All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url('assets') ?>/js/jquery.min.js"></script>


<script src="<?= base_url('assets') ?>/plugins/popper/popper.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="<?= base_url('assets') ?>/bootstrap/js/bootstrap.min.js"></script>

<!-- template -->
<script src="<?= base_url('assets') ?>/js/adminkit.js"></script>

<!-- Morris JavaScript -->
<script src="<?= base_url('assets') ?>/plugins/raphael/raphael-min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/morris/morris.js"></script>
<script src="<?= base_url('assets') ?>/plugins/functions/dashboard1.js"></script>

<!-- Chart Peity JavaScript -->
<script src="<?= base_url('assets') ?>/plugins/peity/jquery.peity.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/functions/jquery.peity.init.js"></script>

<!-- DataTable -->
<script src="<?= base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
    $(function() {
        $('#datatablestab').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
<script src="<?= base_url('assets') ?>/plugins/table-expo/filesaver.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/table-expo/xls.core.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/table-expo/tableexport.js"></script>
</body>

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:31:31 GMT -->

</html>