<?php
include "../class/config.php";
include "../class/barang.php";
//include "../class/produksi.php";
//include "../class/pemesanan.php";

$BE = new barang();
$BE->BE();
$DaftarBE = $BE->BE();
?>
<script src="../js/chartist.min.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">&nbsp;</div>
        <div class="col-md-1 col-merah text-center">Parameter</div>
        <div class="col-md-1 col-hijau text-center">BE</div>
        <div class="col-md-12">
            <div class="ct-chart ct-golden-section"></div>
        </div>
    </div>
</div>
<style>
    .col-hijau{
        background: green;
        color: #FFFFFF;
    }
    .col-merah{
        background: red;
        color: #FFFFFF;
    }
    .ct-series-a .ct-bar,
    .ct-series-a .ct-horizontal-bars {
        stroke: green;
    }
    .ct-series-b .ct-bar,
    .ct-series-b .ct-horizontal-bars {
        stroke: red;
    }
    .ct-chart .ct-label{
        font-size: 12px;
    }
</style>
<script>
    <?php
    //label
    $resultlabel = array();
    foreach ($DaftarBE as $key => $data) {
        $resultlabel[] = "'".trim($data["nama_barang"], " \t\n\r\0\x0B")."'";
    }
    $resultlbl = implode(",", $resultlabel);
    
    //BE
    $resultbe = array();
    foreach ($DaftarBE as $key => $data) {
        $resultbe[] = trim($data["BE"], " \t\n\r\0\x0B");
    }
    $resultBE = implode(",", $resultbe);
    
    //parameter
    $resultparam = array();
    foreach ($DaftarBE as $key => $data) {
        $resultparam[] = trim($data["parameter"], " \t\n\r\0\x0B");
    }
    $resultprm = implode(",", $resultparam);
    ?>
    
    new Chartist.Bar('.ct-chart', {
        labels: [<?= $resultlbl; ?>],
        series: [
            [<?= $resultBE; ?>],
            [<?= $resultprm; ?>]
        ]
    }, {
        seriesBarDistance: 5,
        reverseData: false,
        horizontalBars: true,
        //stackBars: true,
        axisY: {
            offset: 200,
        }
    }).on('draw', function (data) {
        if (data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 20px'
            });
        }
    });
</script>