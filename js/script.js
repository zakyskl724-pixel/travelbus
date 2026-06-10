let nomor = 1;

document
.getElementById("registerForm")
?.addEventListener("submit", function(e){

    e.preventDefault();

    let nama =
    document.getElementById("nama").value;

    let email =
    document.getElementById("email").value;

    let nohp =
    document.getElementById("nohp").value;

    let tabel =
    document.getElementById("dataUser");

    tabel.innerHTML += `
        <tr>
            <td>${nomor++}</td>
            <td>${nama}</td>
            <td>${email}</td>
            <td>${nohp}</td>
        </tr>
    `;

    alert("Register berhasil!");

    document
    .getElementById("registerForm")
    .reset();
});