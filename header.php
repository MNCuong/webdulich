<?php
session_name('client');
session_start(); 
?>


<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
        box-sizing: border-box;
    }
    .child2 {
        background-color: rgba(242, 243, 243, 1.00);
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2)
    }
    .menu {
        width: 70%;
        display: flex;
        margin: 0 auto;
    }
    .child1 {
        background-color: aliceblue;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .child1 img {
        height: 80px;
        width: 200px;
    }
    .child2 .menu a {
        font-weight: 700;
        padding: 12px 12px;
        text-decoration: none;
        color: rgba(3, 18, 26, 1.00);
    }
    .child2 .menu a:hover {
        background: rgba(188, 188, 188, 1.00);
    }
    .child1 button {
        padding: 8px;
        margin-right: 12px;
        border-radius: 8px;
        border: 1px solid;
        background-color: rgba(1, 148, 243, 1.00);
        font-weight: 700;
        color: rgba(255, 255, 255, 1.00);
    }
    .child1 button:hover {
        cursor: pointer;
        opacity: 0.7;
    }
    .wrapper {
        position: fixed;
        width: 100%;
        z-index: 2;
		display: flex;
		flex-direction: column;
    }


</style>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="child1">
                <div class="child11"><img src="pic/logodaidien.png" alt=""></div>
                <div class="child11" style="width: 50%;">
					<?php
                        if(isset($_SESSION['userclient'])) {
							    ?>
						<marquee behavior="scroll" direction="right" scrollamount="10"><?php echo "Chào mừng " . $_SESSION['userclient'] . "!<br>";?></marquee>
					<?php
						}?>
				
				</div>
                <div class="child11">
                    <?php
                        if(isset($_SESSION['userclient'])) {
							   

                            echo '<a href="dangxuat_controller.php"><button>Đăng xuất</button></a>';
                        } else {
                            // Nếu chưa đăng nhập, hiển thị nút đăng nhập và đăng ký
                            echo '<a href="dangnhapclient.php"><button>Đăng nhập</button></a>';
                            echo '<a href="dangky.php"><button>Đăng ký</button></a>';
                        }
                    ?>
                </div>
            </div>
            <div class="child2">
                 <div class="menu">
                    <a href="index.php">Home</a>
                    <a href="index_muaVe.php">Di chuyển</a>
                    <a href="danhsachphongks.php">Đặt phòng</a>
                    <a href="lichsudatphong.php">Lịch sử đặt phòng</a>
                    <a href="index_trangchudulich.php">Hoạt động và giải trí</a>
                </div>
            </div>
            
        </div>
    </div>
</body>
	
	
</html>
