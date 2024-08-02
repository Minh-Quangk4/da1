
<style>
  
  body {
    font-family: Arial, sans-serif;
  }

  .row2 {
    margin-bottom: 20px;
  }

  .font_title {
    background-color: #333;
    color: #fff;
    padding: 10px;
  }

  .form_content {
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  label {
    font-weight: bold;
  }

  select,
  input[type="text"],
  input[type="file"],
  textarea {
    width: 100%;
    padding: 8px;
    margin: 5px 0 15px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 4px;
  }

  input[type="submit"],
  input[type="reset"],
  input[type="button"] {
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type="submit"]:hover,
  input[type="reset"]:hover,
  input[type="button"]:hover {
    background-color: #45a049;
  }


</style>

<div class="row2">
  <div class="row2 font_title">
    <h1>THÊM MỚI SẢN PHẨM</h1>
  </div>
  <div class="row2 form_content ">
    <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
      <div class="row2 mb10 form_content_container">
        <label>Danh mục</label> <br>
        <select name="iddm" id="">
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            echo '<option value="' . $idDm. '">' . $tenDm . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="row2 mb10 form_content_container">
        <label> Tên sản phẩm</label> <br>
        <input type="text" name="name" placeholder="nhập vào tên sản phẩm">
      </div>
      <div class="row2 mb10">
        <label>Giá cũ </label> <br>
        <input type="text" name="giacu" placeholder="nhập giá của sản phẩm">
        
      </div>
      <div class="row2 mb10">
        <label>Giá mới</label> <br>
        <input type="text" name="giamoi" placeholder="nhập giá của sản phẩm">
        
      </div>
      <div class="row2 mb10">
        <label>Hình ảnh</label> <br>
        <input type="file" name="hinh">
      </div>
      <div class="row2 mb10">
        <label>Mô tả </label> <br>
        <textarea name="mota" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="row mb10 ">
        <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
        <input class="mr20" type="reset" value="NHẬP LẠI">

        <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
      </div>
      <?php 
        if(isset($thanhcong) && ($thanhcong != '')){
          echo $thanhcong;
        }
      ?>
    </form>
  </div>
</div>