
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
    <h1>THÊM MỚI DANH MỤC</h1>
  </div>
  <div class="row2 form_content ">
    <form action="index.php?act=adddm" method="POST" enctype="multipart/form-data">
      <div class="row2 mb10">
        <label>Tên danh mục </label> <br>
        <input type="text" name="tendm" placeholder="nhập tên danh mục">
      </div>
      
      <div class="row mb10 ">
        <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
        <input class="mr20" type="reset" value="NHẬP LẠI">

        <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
      </div>
      <?php 
        if(isset($thanhcong) && ($thanhcong != '')){
          echo $thanhcong;
        }
      ?>
    </form>
  </div>
</div>