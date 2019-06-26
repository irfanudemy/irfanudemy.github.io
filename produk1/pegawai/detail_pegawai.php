<?php
session_start();

// apabila variable session masih kosong(user belum login)
if (empty($_SESSION["nip"]) && empty($_SESSION["password"])) {
    header("location:dosen.html");
}
?>
<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Data Pegawai</title>
    <script>
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    </script>
</head>
<body>
    <div class="container">
        <div class="mt-md-5">
            <h1 class="text-center">Profile Pegawai</h1>
        </div>
    </div>
    
    <section>
        <div class="accordion container" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Data Pribadi
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-right" style="width: 300px; margin-right: 30px;">Nama<span style="margin-left: 30px;">:</span></div>
                        <div>John Doe</div>
                    </div>
                    <div class="d-flex">
                        <div class="text-right" style="width: 300px; margin-right: 30px;">Jenis Kelamin<span style="margin-left: 30px;">:</span></div>
                        <div>Laki-laki</div>
                    </div>
                    <div class="d-flex">
                        <div class="text-right" style="width: 300px; margin-right: 30px;">Program Studi<span style="margin-left: 30px;">:</span></div>
                        <div>Teknik Informatika</div>
                    </div>
                    <div class="d-flex">
                        <div class="text-right" style="width: 300px; margin-right: 30px;">Nomor Induk Mahasiswa<span style="margin-left: 30px;">:</span></div>
                        <div><?php echo $_SESSION["nip"]; ?></div>
                    </div>
                    <div class="d-flex">
                        <div class="text-right" style="width: 300px; margin-right: 30px;">Tahun Masuk<span style="margin-left: 30px;">:</span></div>
                        <div>2019</div>
                    </div>
                    <!-- Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. -->
                </div>
                </div>
            </div>
            <!-- <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Riwayat Status Kuliah
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                        </table>
                </div>
                </div>
            </div> -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Riwayat Penghasilan
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
                    <!-- Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. -->
                </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="margin-top: 20px;">
        <a class="btn btn-outline-primary" href="./pegawai_logout.php" role="button">Logout</a>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>