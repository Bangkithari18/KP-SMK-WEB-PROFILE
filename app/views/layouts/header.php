<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK AL-Husna</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: #bfe6f338 !important; ">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid top-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="top-header d-flex align-items-center">
                                <img src="assets/img/logo.jpg" width="70" height="70" class="me-3">
                                <div>
                                    <h5 class="font-weight-bold brand mb-0">SMK AL-HUSNA</h5>
                                    <small>Akreditasi B | Sekolah Berbasis Pesantren | Pencetak Wirausaha</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12" style="text-align: right;">
                            <ul class="list-inline float-right top-right">
                                <li class="list-inline-item pl-3 pr-0"><i class="fa fa-envelope"></i> <?php echo htmlspecialchars($contact['email']); ?></li>
                                <li class="list-inline-item pl-3 pr-0"><i class="fa fa-phone"></i> <?php echo htmlspecialchars($contact['phone_number']); ?></li>
                            </ul>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary mx-2" href="#about">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary mx-2" href="#services">Galery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary mx-2" href="#visi">Visi dan Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary mx-2" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>