	<?php include './header.php';


if (!isset($_SESSION['userclient'])) {
    header('Location: dangnhapclient.php');
    exit;
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <style>
        .content {
            display: flex;
            flex-direction: column;
        }

		.title {
			font-size: 45px;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		}
		
        .header {
            z-index: 0;
			padding-top: 200px;  
			
        }

        .search {
            display: flex;
            width: 80%;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 1.00);
            box-shadow: 0 8px 12px black;
            padding: 12px;
            margin-top: -30px;
            z-index: 1;



        }

        .mainsearch {
            margin: 0 auto;
            width: 90%;
        }

        .timkiem {
            width: 90%;
            padding: 8px;
        }

        .tim {
            float: right;
            padding: 10px;
            background-color: rgba(17, 190, 231, 1.00);
            border-radius: 8px;
            border: none;
        }

        .tim:hover {
            opacity: 0.7;
            cursor: pointer;
        }

        #list-button {
            display: flex;
            gap: 10px;
            list-style: none;
        }

        #list-item {
			width: 100%;
            max-width: 1200px;
            margin: 0 auto;
/*            justify-content: space-between;*/
            display: flex;
            list-style: none;
        }
		
		#list-item li{
			margin-right: 16px;
			border-radius:8px;
			background-color: antiquewhite;
			padding: 8px;
			
		}
		
		#list-button1 {
            display: flex;
            gap: 10px;
            list-style: none;
        }

        #list-item1 {
			width: 100%;
            max-width: 1200px;
            margin: 0 auto;
/*            justify-content: space-between;*/
            display: flex;
            list-style: none;
        }
		
		#list-item1 li{
			margin-right: 16px;
			border-radius:8px;
			background-color: antiquewhite;
			padding: 8px;
			
		}
		
		.place1 {
			float: right;
            padding: 10px;
            background-color: rgba(185,185,185,1.00);
            border-radius: 8px;
            border: none;
		}
		
		.place1:active, .place1:focus {
			background-color: rgba(17, 190, 231, 1.00);
		}
		
		.place1:hover {
            opacity: 0.7;
            cursor: pointer;
        }
		
		.place {
			margin-right: -16px;
		}
		
		.place img {
			width: 250px;
			height: 200px;
			object-fit: cover;
		}
		
		.place h2 {
			text-align: center;
			font-size: 15px;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		}	
    </style>
</head>

<body>
    <div class="container" style="display: flex;flex-direction: column ">
        <div class="content">
            <div class="header">
				<div class="title">
					Địa điểm du lịch
				</div>
                <img src="BTL/HinhAnh/sunset-2983614.jpg" width="100%" height="300" style="object-fit: cover">
            </div>
            <div class="search">
                <div class="mainsearch">
                    <input type="search" placeholder="Tìm kiếm" class="timkiem">
                    <input type="button" value="Tìm Kiếm" class="tim">
                </div>
            </div>
        </div>
		<div class="title" style="font-size: 30px">
			Việt Nam đệ nhất trứ danh
		</div>
        <div class="diadiem">
            <ul id="list-button">
            </ul>
            <ul id="list-item">
            </ul>
        </div>
		<div class="title" style="font-size: 30px">
			Không thể không đến
		</div>
		<div class="diadiem">
            <ul id="list-button1">
            </ul>
            <ul id="list-item1">
            </ul>
        </div>
    </div>

</body>

</html>
<script>
    const arr = [
    {
        id: 1,
        name: "Đà Nẵng",
        place: [
        	{
            	source: "HinhAnh/SunWorld2.png",
            	location: "Sun World",
				price: 100000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 200000
			},
			{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 100000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 200000
			}
        ]
    },
    {
        id: 2,
        name: "Nha Trang",
        place: [
        	{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 999999
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 999999
			},
			{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 999999
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 999999
			}
        ]
    },
		{
        id: 3,
        name: "Đà Lạt",
        place: [
        	{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 100000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 200000
			},
			{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 100000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 200000
			}
        ]
    },
    {
        id: 4,
        name: "Phú Quốc",
        place: [
        	{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 110000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 220000
			},
			{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 110000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 220000
			}
        ]
    },
		{
        id: 5,
        name: "TP Hồ Chí Minh",
        place: [
        	{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 100000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 200000
			},
			{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 100000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 200000
			}
        ]
    },
    {
        id: 6,
        name: "Hà Nội",
        place: [
        	{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 110000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 220000
			},
			{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 110000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 220000
			}
        ]
    },
    // Các thành phố khác ở đây...
];
    const buttons = document.querySelector('#list-button');
    const list = document.querySelector('#list-item');

    arr.forEach(item => {
        var li = document.createElement('li');
        li.innerHTML = `<button class = "place1" onclick="showItem(${item.id})">${item.name}</button>`
        buttons.appendChild(li);
    })
    arr.forEach((item) => {
            if (item.id === 1) {
                list.innerHTML = "";
                item.place.forEach((item) => {
                    var li = document.createElement('li');
                    li.innerHTML = `
                        <li>
							<a href="chitietdulich.php">
                            <div class = "place">
								<img src="${item.source}" alt="${item.location}"  width="100%" />
                                <h2>${item.location}</h2>
								<h2>${item.price}</h2>
                            </div>
							</a>
                        </li>         
                    `
                    list.appendChild(li);
                })
            }
        })
    function showItem(e) {
        arr.forEach((item) => {
            if (item.id === e) {
                list.innerHTML = "";
                item.place.forEach((item) => {
                    var li = document.createElement('li');
                    li.innerHTML = `
                        <li>
							<a href="chitietdulich.php">
                            <div class = "place">
								<img src="${item.source}" alt="${item.location}" width="100%" />
                                <h2>${item.location}</h2>
								<h2>${item.price}</h2>
                            </div>
							</a>
                        </li>         
                    `
                    list.appendChild(li);
                })
            }
        })
    }
	
	
	const arr1 = [
    {
        id: 1,
        name: "Công viên giải trí",
        place: [
        	{
            	source: "HinhAnh/SunWorld2.png",
            	location: "Sun World",
				price: 100000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 200000
			},
			{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 100000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 200000
			}
        ]
    },
    {
        id: 2,
        name: "Công viên nước",
        place: [
        	{
            	source: "HinhAnh/SunWorld3.png",
            	location: "Sun World",
				price: 110000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 220000
			},
			{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 110000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 220000
			}
        ]
    },
		{
        id: 3,
        name: "Địa điểm nổi tiếng",
        place: [
        	{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 100000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 200000
			},
			{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 100000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 200000
			}
        ]
    },
    {
        id: 4,
        name: "Thiên đường thiên nhiên",
        place: [
        	{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 110000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 220000
			},
			{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 110000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 220000
			}
        ]
    },
		{
        id: 5,
        name: "Chương trình biểu diễn",
        place: [
        	{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 100000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 200000
			},
			{
            	source: "HinhAnh/SunWorld1.png",
            	location: "Sun World",
				price: 100000
            },
            {
                source: "HinhAnh/SunWorld1.png",
                location: "Some Place",
                price: 200000
			}
        ]
    },
    // Các thành phố khác ở đây...
];
    const buttons1 = document.querySelector('#list-button1');
    const list1 = document.querySelector('#list-item1');

    arr1.forEach(item => {
        var li = document.createElement('li');
        li.innerHTML = `<button class = "place1" onclick="showItem1(${item.id})">${item.name}</button>`
        buttons1.appendChild(li);
    })
    arr1.forEach((item) => {
            if (item.id === 1) {
                list1.innerHTML = "";
                item.place.forEach((item) => {
                    var li = document.createElement('li');
                    li.innerHTML = `
                        <li>
							<a href="chitietdulich.php">
                            <div class = "place">
								<img src="${item.source}" alt="${item.location}"  width="100%" />
                                <h2>${item.location}</h2>
								<h2>${item.price}</h2>
                            </div>
							</a>
                        </li>         
                    `
                    list1.appendChild(li);
                })
            }
        })
    function showItem1(e) {
        arr1.forEach((item) => {
            if (item.id === e) {
                list1.innerHTML = "";
                item.place.forEach((item) => {
                    var li = document.createElement('li');
                    li.innerHTML = `
                        <li>
							<a href="chitietdulich.php">
                            <div class = "place">
								<img src="${item.source}" alt="${item.location}" width="100%" />
                                <h2>${item.location}</h2>
								<h2>${item.price}</h2>
                            </div>
							</a>
                        </li>         
                    `
                    list1.appendChild(li);
                })
            }
        })
    }
	
	
	
	
	


</script>