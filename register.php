<?php include 'partials/header.php'; ?>

<div class="container py-5">

    <div class="card shadow p-4">

        <h2 class="text-center mb-4">
            Register Akun
        </h2>

        <form id="registerForm">

            <label>Nama Lengkap</label>

            <input type="text"
            id="nama"
            class="form-control mb-3"
            required>

            <label>Email</label>

            <input type="email"
            id="email"
            class="form-control mb-3"
            required>

            <label>No HP</label>

            <input type="text"
            id="nohp"
            class="form-control mb-3"
            required>

            <button type="submit"
            class="btn btn-success w-100">

                Register

            </button>

        </form>

    </div>

    <div class="card shadow p-4 mt-5">

        <h3 class="text-center mb-4">
            Data Register
        </h3>

        <table class="table table-bordered">

            <thead class="table-primary">

                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                </tr>

            </thead>

            <tbody id="dataUser">

            </tbody>

        </table>

    </div>

</div>

<?php include 'partials/footer.php'; ?>