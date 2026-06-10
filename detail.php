<?php include 'partials/header.php'; ?>

<div class="container py-5">

    <h2 class="text-center mb-4">
        Detail Tiket Bus
    </h2>

    <div class="row">

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=800"
                class="card-img-top">

                <div class="card-body text-center">

                    <h4>Jakarta - Bandung</h4>

                    <p>Bus Executive</p>

                    <h5 class="text-primary">
                        Rp120.000
                    </h5>

                    <a href="detail.php?rute=Jakarta-Bandung&harga=120000"
                    class="btn btn-primary">
                        Lihat Detail
                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card shadow">

                <img src="https://images.unsplash.com/photo-1570125909232-eb263c188f7e?w=800"
                class="card-img-top">

                <div class="card-body text-center">

                    <h4>Surabaya - Malang</h4>

                    <p>Bus VIP</p>

                    <h5 class="text-primary">
                        Rp90.000
                    </h5>

                    <a href="detail.php?rute=Surabaya-Malang&harga=90000"
                    class="btn btn-primary">
                        Lihat Detail
                    </a>

                </div>

            </div>

        </div>

    </div>

    <?php
    if(isset($_GET['rute'])){
    ?>

    <div class="alert alert-success mt-4">

        <h4>Detail Tiket</h4>

        <p>
            <b>Rute:</b>
            <?php echo $_GET['rute']; ?>
        </p>

        <p>
            <b>Harga:</b>
            Rp <?php echo $_GET['harga']; ?>
        </p>

    </div>

    <?php } ?>

</div>

<?php include 'partials/footer.php'; ?>