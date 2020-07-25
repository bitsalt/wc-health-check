</div>
<!-- End Main wrapper -->

<!-- All Jquery -->
    <script src="<?php echo $dir; ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo $dir; ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo $dir; ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo $dir; ?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo $dir; ?>js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo $dir; ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo $dir; ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo $dir; ?>js/custom.min.js"></script>
    <!-- Fontawesome support -->
    <script src="<?php echo $dir; ?>js/all.min.js"></script>
    <!-- This page plugins -->
    <script src="<?php echo $dir; ?>js/jasny-bootstrap.js"></script>
    <!-- Validation -->
    <script src="<?php echo $dir; ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo $dir; ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="<?php echo $dir; ?>js/local.js"></script>
<?php
if ($subdir) {
    echo '
    <script src="'.$dir.'assets/plugins/jquery-validation/localization/methods_es_CL.min.js"></script>
    <script src="'.$dir.'assets/plugins/jquery-validation/localization/messages_es.min.js"></script>';
}
?>

</body>

</html>
