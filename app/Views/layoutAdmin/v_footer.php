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
    $(function drawPieChart() {
        if ($("#pieChart").length) {
            var chartHeight = 300;

            $("#pieChartContainer").css("height", chartHeight + "px");

            ctxPie = document.getElementById("pieChart").getContext("2d");

            optionsPie = {
                responsive: true,
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 10,
                        top: 10,
                        bottom: 10
                    }
                },
                legend: {
                    position: "top"
                }
            };

            configPie = {
                type: "pie",
                data: {
                    datasets: [{
                        data: [18, 5, 10, 10, 5],
                        backgroundColor: ["#F7604D", "#4ED6B8", "#A8D582", "#d024bc", "#207cfc"],
                        label: "Storage"
                    }],
                    labels: [
                        "Desain Maskot",
                        "Desain Web",
                        "Desain Poster",
                        "Photography",
                        "Short Movie",
                    ]
                },
                options: optionsPie
            };

            pieChart = new Chart(ctxPie, configPie);
        }
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