<footer class="tm-footer row tm-mt-small">
    <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy;<b><?= date('Y') ?></b> Himmi Polsub. All rights reserved.
        </p>
    </div>
</footer>

<script src="<?= base_url('templateAdmin') ?>/js/jquery-3.3.1.min.js"></script>
<!-- https://jquery.com/download/ -->
<script src="<?= base_url('templateAdmin') ?>/js/bootstrap.min.js"></script>
<!-- https://jquery.com/download/ -->
<script src="<?= base_url('templateAdmin') ?>/js/moment.min.js"></script>
<!-- https://momentjs.com/ -->
<script src="<?= base_url('templateAdmin') ?>/js/Chart.min.js"></script>
<!-- https://getbootstrap.com/ -->
<script src="<?= base_url('templateAdmin') ?>/js/tooplate-scripts.js"></script>
<script>
    Chart.defaults.global.defaultFontColor = 'white';
    let ctxPie,
        optionsPie,
        configPie,
        pieChart;
    // DOM is ready
    $(function() {
        drawPieChart();
    })
</script>
<!-- https://getbootstrap.com/ -->
<script>
    $(function() {
        $(".tm-product-name").on("click", function() {
            window.location.href = "edit-product.html";
        });
    });
</script>
</body>

</html>