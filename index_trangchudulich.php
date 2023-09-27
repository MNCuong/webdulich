	<?php include './header.php';


if (!isset($_SESSION['userclient'])) {
    header('Location: dangnhapclient.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Địa điểm du lịch</title>
    <style>
        .content {
            display: flex;
            flex-direction: column;
        }

		.title {
			font-size: 45px;
		}
		
        .header1 {
            z-index: 0;
        }

        .search {
            display: flex;
            width: 80%;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 1.00);
            box-shadow: 0 8px 12px black;
            padding: 12px;
            margin-top: -30px;
            z-index: 2;
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
    <div class="content" >
        <div class="header1" style="margin-top: 200px;">
            <div class="search">
                <div class="mainsearch">
                    <input type="text" class="timkiem" placeholder="Nhập địa điểm...">
                    <button class="tim">Tìm kiếm</button>
                </div>
            </div>
        </div>
        <ul id="list-button"></ul>
        <ul id="list-item"></ul>
    </div>

    <script>
		var arr = [];
		const buttons = document.querySelector('#list-button');
        const list = document.querySelector('#list-item');
    function loadJSON(callback) {
        var xhr = new XMLHttpRequest();
        xhr.overrideMimeType("application/json");
        xhr.open('GET', 'get_data.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                callback(xhr.responseText);
            }
        };
        xhr.send(null);
    }

    loadJSON(function (response) {
        arr = JSON.parse(response);

        arr.forEach(item => {
            var li = document.createElement('li');
            li.innerHTML = `<button class="place1" type="button" onclick="showItem(${item.id_item})">${item.name}</button>`;
            buttons.appendChild(li);
        });

		arr.forEach((item) => {
            if (item.id_item === 1) {
                list.innerHTML = "";
                item.place.forEach((item) => {
                    var li = document.createElement('li');
                    li.innerHTML = `
                        <li>
							<a href="item.php?id=${item.id}">
                            <div class = "place">
								<img src="HinhAnh/${item.source}" alt="${item.location}"  width="100%" />
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
		
    });
		  function showItem(e) {
            arr.forEach((item) => {
                if (item.id_item === e) {
                    list.innerHTML = "";
                    item.place.forEach((item) => {
                        var li = document.createElement('li');
                        li.innerHTML = `
                            <li>
                                <a href="item.php?id=${item.id}">
                                    <div class="place">
                                        <img src="HinhAnh/${item.source}" alt="${item.location}" />
                                        <h2>${item.location}</h2>
                                        <h2>${item.price}</h2>
                                    </div>
                                </a>
                            </li>         
                        `;
                        list.appendChild(li);
                    });
                }
            });
        }
</script>
</body>
</html>
