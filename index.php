<?php include 'partials/header.php'; ?>

<section class="hero text-center text-white d-flex align-items-center">

    <div class="container">

        <h1 class="display-3 fw-bold">
            Pesan Tiket Travel Bus Online
        </h1>

        <p class="lead">
            Travel nyaman, aman, murah dan terpercaya
        </p>

        <a href="detail.php"
        class="btn btn-warning btn-lg">
            Pesan Sekarang
        </a>

    </div>

</section>

<section class="container py-5">

    <h2 class="text-center mb-5">
        Tiket Bus Populer
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

                    <button class="btn btn-success"
                    data-bs-toggle="modal"
                    data-bs-target="#pesanModal">

                        Pesan Tiket

                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

<div class="modal fade"
id="pesanModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">
<h4>Berhasil</h4>
</div>

<div class="modal-body">
Tiket berhasil dipilih ✅
</div>

</div>
</div>
</div>

<?php include 'partials/footer.php'; ?>