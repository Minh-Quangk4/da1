<style>
    h1 {
        text-align: center;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="bentrai">
        <ul>
            <img id="logoadmin" src="../img/image/iphone-15-pro-max_3.webp" alt="">
            <h2>Apple Auth Store</h2>
            <div class="canchinh">
                <li><a href="">Danh mục</a></li>
                <img id="iconcanchinh" src="../img/icon/danhmuc.gif" alt="">
                <li><a href="">Hàng hóa</a></li>
                <img id="iconcanchinh" src="../img/icon/hanghoa.gif" alt="">
                <li> <a href="">Khách hàng</a></li>
                <img id="iconcanchinh" src="../img/icon/khachhang.gif" alt="">
                <li> <a href="">Bình luận</a></li>
                <img id="iconcanchinh" src="../img/icon/binhluan.gif" alt="">
                <li><a href="">Đơn hàng</a></li>
                <img id="iconcanchinh" src="../img/icon/donhang.gif" alt="">
                <li> <a href="">Thống kê</a></li>
                <img id="iconcanchinh" src="../img/icon/thongke.gif" alt="">
            </div>

        </ul>
    </div>
    <div class="benphai">
        <h3>Dashboard</h3>
        <div class="icon">
            <img id="icon1" src="../img/icons8-cart.gif" alt="">
            <p>100</p>
            <h5>NEW ORDERS</h5>
            <img id="icon1" src="../img/icons8-comment.gif" alt="">
            <p>2000</p>
            <h5>COMMENTS</h5>
            <img id="icon1" src="../img/icons8-search.gif" alt="">
            <p>240</p>
            <h5>NEW USERS</h5>
            <img id="icon1" src="../img/icons8-user.gif" alt="">
            <p>4500</p>
            <h5>PAGE VIEWS</h5>
        </div>
        <div class="danhsach">
            <h3>Danh sách công việc :</h3>
            <div class="nut">
                <input type="checkbox" name="" id="nut1">
                <label for="">Kiểm tra nhân viên</label>
                <input type="checkbox" name="" id="nut1">
                <label for="">Dọn dẹp kho hàng</label>
                <input type="checkbox" name="" id="nut1">
                <label for="">Kiểm tra doanh số</label>
                <input type="checkbox" name="" id="nut1">
                <label for="">Kiểm tra đơn hàng</label>
                <input type="checkbox" name="" id="nut1">
                <label for="">Giao hàng </label>
                <div class="thoigian">
                    <span id="trang">Thời gian truy cập website</span>
                    <p><span id="timer">00:00:00</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <div class="ft">&copy; 2023 Apple Auth Store.</div>
</footer>

</html>

<style>
    .thoigian {
        position: relative;
        top: -222px;
        left: 400px;
    }

    #trang {
        color: white;
        font-weight: bold;
    }

    #timer {
        position: relative;
        color: white;
        font-size: 48px;
        font-weight: bold;
        left: -43px;
        top: -25px;
    }

    #iconcanchinh {
        width: 40px;
        height: 40px;
        border-radius: 100px;
        position: relative;
        left: -82px;
        top: -25px;
    }

    #nut1 {
        width: 18px;
        height: 18px;
    }

    label {
        position: relative;
        left: 65px;
        top: -23px;
    }

    .nut {
        display: inline-grid;
    }

    .ft {
        font-weight: bold;
        position: relative;
        top: 23px;
    }

    footer {
        border-radius: 10px;
        background-color: black;
        /* padding: 20px; */
        color: #fff;
        text-align: center;
        position: relative;
        /* top: -50px; */
        height: 68px;
        /* padding-top: 1728px; */
        margin-top: 546px;
    }

    h5 {
        position: relative;
        top: 106px;
        left: -32px;
    }

    p {
        font-size: 40px;
        font-weight: bold;
        position: relative;
        top: 34px;
        left: 40px;

    }

    .icon {
        width: 800px;
        height: 158px;
        background-color: #42e4e0;
        position: relative;
        top: -8px;
        border-radius: 10px;
        display: inline-flex;
    }

    label {
        color: white;
    }

    #icon1 {
        width: 40px;
        height: 40px;
        border-radius: 42px;
        position: relative;
        top: 30px;
        left: 100px;
    }

    h2 {
        color: white;
        position: relative;
        font-size: 25px;
        top: -65px;
        left: 45px;
    }

    h3 {
        color: white;
    }

    .bentrai {
        width: 280px;
        border-radius: 18px;
        margin-top: 20px;
        float: left;
        display: grid;
        padding-inline: 20px;
        position: relative;
        background-color: black;
        height: 500px;
    }

    .benphai {
        width: 800px;
        border-radius: 18px;
        margin-top: 20px;
        float: left;
        display: grid;
        padding-inline: 20px;
        position: relative;
        background-color: black;
        height: 500px;
        position: relative;
        left: 40px;
    }

    li {
        list-style: none;
        padding-top: 10px;
    }

    a {
        list-style: none;
        text-decoration: none;
        color: white;
        text-align: center;
    }

    #logoadmin {
        width: 60px;
        height: 60px;
        position: relative;
        border-radius: 100px;
        left: -38px;
    }

    .canchinh {
        position: relative;
        top: -55px;
        left: 58px;
    }
</style>
<script>
    window.onload = function() {
        var timerElement = document.getElementById('timer');
        var seconds = 0;
        var minutes = 0;
        var hours = 0;

        setInterval(updateTimer, 1000);

        function updateTimer() {
            seconds++;
            if (seconds === 60) {
                seconds = 0;
                minutes++;
            }

            if (minutes === 60) {
                minutes = 0;
                hours++;
            }

            var formattedTime = formatTime(hours) + ':' + formatTime(minutes) + ':' + formatTime(seconds);
            timerElement.innerHTML = formattedTime;
        }

        function formatTime(time) {
            return (time < 10) ? '0' + time : time;
        }
    };
</script>