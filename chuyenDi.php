<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container marginTop">

        <form action="">
            <div class="container marginTop" style="border-style: solid; border-width: 1px; border-radius: 10px;">
                <div class="row text-uppercase text-center fs-1">
                    <p>Chuyến đi</p>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-center">Loại phương tiện</p>
                        <div class="dropdown d-flex justify-content-center">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" id="selectedItem1">Loại phương tiện
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" onclick="selectItem1('Máy bay')">Máy bay</a></li>
                                <li><a class="dropdown-item" href="#" onclick="selectItem1('Xe khách')">Xe khách</a></li>
                                <li><a class="dropdown-item" href="#" onclick="selectItem1('Tàu hoả')">Tàu hoả</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col">
                        <p class="text-center">Điểm khởi hành</p>
                        <div class="dropdown d-flex justify-content-center">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" id="selectedItem2">Nơi đi
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" onclick="selectItem2('Hà Nội')">Hà Nội</a></li>
                                <li><a class="dropdown-item" href="#" onclick="selectItem2('Hạ Long')">Hạ Long</a></li>
                                <li><a class="dropdown-item" href="#" onclick="selectItem2('Đà Lạt')">Đà Lạt</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <p class="text-center">Điểm đến</p>
                        <div class="dropdown d-flex justify-content-center">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" id="selectedItem3">Nơi đến
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" onclick="selectItem3('Hà Nội')">Hà Nội</a></li>
                                <li><a class="dropdown-item" href="#" onclick="selectItem3('Hạ Long')">Hạ Long</a></li>
                                <li><a class="dropdown-item" href="#" onclick="selectItem3('Đà Lạt')">Đà Lạt</a></li>
                            </ul>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col">
                        <p class="text-center">Ngày đi</p>
                        <div class="form-outline d-flex justify-content-center">
                            <input type="date" id="typeNumber" class="form-control-lg" />
                        </div>

                    </div>
                    <div class="col">
                        <p class="text-center">Số hành khách</p>
                        <div class="form-outline d-flex justify-content-center">
                            <input type="number" id="typeNumber" min="1" class="form-control-lg" />
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">

                        <input type="button" class="btn btn-primary" name="tim" value="Tìm">
                    </div>
                </div>
            </div>
        </form>

        <script>
            function selectItem3(item) {
                document.getElementById('selectedItem1').textContent = `${item}`;


            }

            function selectItem2(item) {
                document.getElementById('selectedItem2').textContent = `${item}`;

            }

            function selectItem3(item) {

                document.getElementById('selectedItem3').textContent = `${item}`;

            }
        </script>
</body>

</html>