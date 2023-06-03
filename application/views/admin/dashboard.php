<?php $total = 0; ?>
<?php foreach($pendapatan as $i => $item) { ?>
<?php $total += $item['ongkir']+$item['subtotal']; ?>
 <?php } ?>
<div style="background-color: #2C3639;  padding-top: 30px; height: 100%" class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <a style="text-decoration: none" href="<?= base_url('admin/dashboard_admin/pendapatan') ?>">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Pendapatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($total) ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
    <!--    <div class="col-xl-3 col-md-6 mb-4">-->
    <!--        <div class="card border-left-info shadow h-100 py-2">-->
    <!--            <div class="card-body">-->
    <!--                <div class="row no-gutters align-items-center">-->
    <!--                    <div class="col mr-2">-->
    <!--                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pesanan Belum dilayani-->
    <!--                        </div>-->
    <!--                        <div class="row no-gutters align-items-center">-->
    <!--                            <div class="col-auto">-->
    <!--                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $belumproses->count ?></div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-auto">-->
    <!--                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!-- Content Row -->

</div>