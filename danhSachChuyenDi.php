<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- <?php include './header.php'; ?> -->
    <div class="container" style="margin-top: 100px;">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Vietnam_Airlines_Boeing_787-9_VN-A869_SGN_10022017.jpg/1200px-Vietnam_Airlines_Boeing_787-9_VN-A869_SGN_10022017.jpg" alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Vietnam_Airlines_Boeing_787-9_VN-A869_SGN_10022017.jpg/1200px-Vietnam_Airlines_Boeing_787-9_VN-A869_SGN_10022017.jpg" alt="Chicago" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Vietnam_Airlines_Boeing_787-9_VN-A869_SGN_10022017.jpg/1200px-Vietnam_Airlines_Boeing_787-9_VN-A869_SGN_10022017.jpg" alt="New York" class="d-block w-100">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>



    <div class="container" style="padding-top:  50px;">
        <div class="row text-uppercase text-center fs-1">
            <p>Danh sách chuyến đi</p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <?php include './itemChuyenDi.php'; ?>
        </div>
        <div class="col">
            <?php include './itemChuyenDi.php'; ?>
        </div>
        <div class="col">
            <?php include './itemChuyenDi.php'; ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php include './itemChuyenDi.php'; ?>
        </div>
        <div class="col">
            <?php include './itemChuyenDi.php'; ?>
        </div>
        <div class="col">
            <?php include './itemChuyenDi.php'; ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php include './itemChuyenDi.php'; ?>
        </div>
        <div class="col">
            <?php include './itemChuyenDi.php'; ?>
        </div>
        <div class="col">
            <?php include './itemChuyenDi.php'; ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php include './itemChuyenDi.php'; ?>
        </div>
        <div class="col">
            <?php include './itemChuyenDi.php'; ?>
        </div>
        <div class="col">
            <?php include './itemChuyenDi.php'; ?>
        </div>
    </div>

    <?php include './footer.php'; ?>
</body>

</html>