<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
	
	<style>
	.form {
		display: none;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: #fff;
		padding: 20px;
		border: 1px solid #ccc;
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
}
	
	</style>
	
</head>
<body>
    <button id="showFormButton">Hiển thị Form</button>

    <div id="form1" class="form">
        <!-- Nội dung của Form 1 -->
        <h2>Form 1</h2>
        <input type="text" placeholder="Input 1">
        <button id="closeForm1Button">Đóng Form 1</button>
    </div>

  

    <script >

			// Lấy các phần tử DOM
		const showFormButton = document.getElementById("showFormButton");
		const form1 = document.getElementById("form1");

		const closeForm1Button = document.getElementById("closeForm1Button");
		

		// Sự kiện khi nhấn nút "Hiển thị Form"
		showFormButton.addEventListener("click", () => {
			form1.style.display = "block";
		
		});

		// Sự kiện khi nhấn nút "Đóng Form 1"
		closeForm1Button.addEventListener("click", () => {
			form1.style.display = "none";
		});

		
	
	
	</script>
</body>
</html>
