<!DOCTYPE html>
<html>
<head>
  <title>Form Overlay Example</title>
  <style>
    /* CSS cho form overlay */
    .overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .form-container {
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <button id="showFormBtn">Hiển thị Form</button>

  <div class="overlay" id="overlay">
    <div class="form-container">
      <h2>Form Thêm</h2>
      <form>
        <!-- Đặt các trường nhập liệu ở đây -->
        <button type="submit">Thêm</button>
      </form>
      <button id="closeFormBtn">Đóng</button>
    </div>
  </div>

  <script>
    const showFormBtn = document.getElementById('showFormBtn');
    const closeFormBtn = document.getElementById('closeFormBtn');
    const overlay = document.getElementById('overlay');

    showFormBtn.addEventListener('click', () => {
      overlay.style.display = 'flex';
    });

    closeFormBtn.addEventListener('click', () => {
      overlay.style.display = 'none';
    });
  </script>
</body>
</html>
