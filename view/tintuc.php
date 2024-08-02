<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background-color: #f0f0f0;
    font-size: 17px;
}

header {
    height: 100px;
    display: flex;
    background-color: #fff !important;
    align-items: center;
    position: relative;
}

a {
    text-decoration: none;
    color: black;
}

.logo {
    width: 200px;
    font-size: 50px;
    margin-right: 10px;
}

.search {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border: 1px solid rgb(158, 155, 155);
    height: 50px;
    width: 400px;
    border-radius: 8px;
    margin: 50px;
}

.search button {
    background: none;
    border: none;
}

.search input {
    margin-left: 4px;
    border: none;
    height: 100%;
    width: 100%;
}

.search i {
    font-size: 20px;
    margin: 10px;
}

.search input:focus {
    outline: none;
}

.nav-header ul {
    display: flex;
    font-size: 17px;
}

.nav-header li {
    display: flex;
    align-items: center;
    margin: 20px;
    width: 120px;
}

.nav-header i {
    margin: 5px;
    font-size: 25px;

}

.form-login i {
    font-size: 25px;
    color: #fff;
    margin: 10px;
}

.form-login {
    display: flex;
    align-items: center;
    position: absolute;
    justify-content: center;
    right: 20px;
    width: 150px;
    background-color: #821818;
    height: 70%;
    border-radius: 10px;
}

.form-login a {
    color: #fff;
    width: 50px;
}

/* nav main */
.nav-main {
    height: 50px;
    color: #fff;
    background: #353333;
}

.nav-main i {
    margin: 4px;
}

.nav-main ul {
    margin-left: 20px;
    display: flex;
    list-style: none;

}

.nav-main li {
    display: flex;
    align-items: center;
    margin-right: 40px;
}

.nav-main a {
    line-height: 50px;
    color: #fff;

}

.father-li-sp {
    position: relative;
}

.ch-li-sp {
    display: none !important;
    left: 0;
    top: 50px;
    position: absolute;
    background-color: #ffff;
    flex-direction: column;
    width: 300px;
    padding: 10px;
}

.ch-li-sp a {
    color: black;
}

.father-li-sp:hover .ch-li-sp {
    display: flex !important;
}

.ch-li-sp li:hover {
    background-color: #b5b3b3;
    width: 100%;

}

.bigbox {
    border: 1px solid black;
    width: 1400px;
    height: 400px;
    margin-top: 30px;
    margin-left: 55px;
    border: none;
}

.smallbox {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.boxsmallest {
    border: 2px solid #ccc;
    width: 900px;
    height: 400px;
}

.boxsmallest1 {
    border: 1px solid black;
    width: 500px;
    height: 400px;
    border: none;
}

.banner1 {
    width: 1415px;
    height: 400px;
}

.banner1>img {
    width: 100%;
    height: 100%;
}

.boxsmallest2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 0px;
    padding: 0px 30px;
}

.boxcon1 {
    border: 1px solid gray;
    width: 206px;
    height: 190px;

    overflow: hidden;
    margin-left: 30px;
}

.bannercon {
    width: 100%;
    height: 100%;

}

.bannercon>img {
    width: 100%;
    height: 100%;

}


.bigbox2 {
    border: 1px solid black;
    width: 1420px;
    height: 60px;
    margin-top: 30px;
    margin-left: 55px;
}

.bigbox2>img {
    width: 100%;
}

.bigbox3 {
    border: 2px solid #ccc;
    width: 1420px;

    margin-top: 50px;
    margin-left: 55px;
    background-color: #f0f0f0;

}

.goku {
    border: 1px solid black;
    width: 1320px;
    margin-top: 50px;
    margin-left: 48px;
    border: none;
}

.gohan {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 1px;
}

.goten {
    border-radius: 10px;
    border: 2px solid #ccc;
    width: 250px;
    height: 450px;
    margin-left: 40px;
    background-color: #fff;
    margin-bottom: 60px;
    box-shadow:3px 3px 3px #00000073;
}

.anhsp {
    border: 1px solid black;
    width: 240px;
    height: 250px;
    border: none;
}

.anhsp>img {
    width: 220px;
    position: relative;
    height: 196px;
    right: -15px;
    top: 38px;
}

.tensp {
    border: 1px solid black;
    width: 250px;
    height: 40px;
    margin-top: 10px;
    text-align: center;
    border: none;
}

.tensp>a {
    line-height: 40px;
    font-weight: 600;
}

.giasp {
    border: 1px solid black;
    width: 250px;
    height: 60px;
    margin-top: 5px;
    text-align: center;
    border: none;
    margin-left: 30px;
}

.flex>p {
    font-weight: 700;

}

s {
    color: gray;
}

.gray {
    margin-left: 20px;
}

.red {
    color: brown;
    margin-left: 20px;

}

.flex {
    display: flex;

}

.flex1 {
    margin-bottom: 30px;
    display: flex;
}

.buttonxemct {
    margin-top: 40px;
    margin-left: 45px;

}

.bt {
    width: 150px;
    height: 30px;
    background-color: black;
    font-weight: 700;
    border-radius: 100px;
}

.bt>a {
    color: #fff;
}

.bt:hover {
    background-color: gray;
}

.bigbox4,
.bigbox {
    border: 2px solid #ccc;
    width: 1420px;

    margin-left: 55px;
    margin-top: 50px;


}

.boxtt {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    margin: 50px;
}

.boxtt1 {
    border: 1px solid #ccc;
    width: 300px;
    height: 400px;
    margin-left: 15px;
}

.chinhanh1 {
            height: 225px;
    /* color: white; */
    background-color: white;
    border: none;
        }

        .chinhanh1>img {
            width: 200px;
    height: 196px;
    position: relative;
    top: 14px;
    left: 44px;
        }

.nd {
    border: none;
    width: 280px;
    height: 90px;
    margin-top: 20px;
    margin-left: 15px;
}

.nd>a {
    color: gray;
    font-weight: 500;
    text-decoration: none;
}

.tieu1 {
    display: flex;
    margin-left: 63px;
    margin-top: 30px;
    justify-content: space-between;
}

.left {
    margin-right: 60px;
    font-size: 18px;
}
</style>
<div class="bigbox4">
    <div class="tieude">
        <div class="tieu1">
            <h2 class="cn">24H CÔNG NGHỆ</h2>
            <div class="left">
                <a class="xemtc" href="#">XEM TẤT CẢ</a>
            </div>
        </div>
    </div>
    <div class="boxtintuc">
        <div class="boxtt">
            <div class="boxtt1">
                <div class="chinhanh1">
                    <img src="./img/ip11t.jpg" alt="">
                </div>
                <div class="nd">
                    <a href="#">
                        iPhone là điện thoại thông minh được sản xuất bởi Apple - một trong những tập đoàn công nghệ
                        hàng đầu nước Mỹ. Đây là chiếc điện thoại được yêu thích và săn đón nhất thế giới tính tới thời
                        điểm hiện tại.
                    </a>
                </div>
            </div>
            <div class="boxtt1">
                <div class="chinhanh1">
                    <img src="./img/ip11.jpg" alt="">
                </div>
                <div class="nd">
                    <a href="#">
                        iPhone là điện thoại thông minh được sản xuất bởi Apple - một trong những tập đoàn công nghệ
                        hàng đầu nước Mỹ. Đây là chiếc điện thoại được yêu thích và săn đón nhất thế giới tính tới thời
                        điểm hiện tại.
                    </a>
                </div>
            </div>
            <div class="boxtt1">
                <div class="chinhanh1">
                    <img src="./img/ip12pr.jpg" alt="">
                </div>
                <div class="nd">
                    <a href="#">
                        iPhone là điện thoại thông minh được sản xuất bởi Apple - một trong những tập đoàn công nghệ
                        hàng đầu nước Mỹ. Đây là chiếc điện thoại được yêu thích và săn đón nhất thế giới tính tới thời
                        điểm hiện tại.
                    </a>
                </div>
            </div>
            <div class="boxtt1">
                <div class="chinhanh1">
                    <img src="./img/ip14prm.jpg" alt="">
                </div>
                <div class="nd">
                    <a href="#">
                        iPhone là điện thoại thông minh được sản xuất bởi Apple - một trong những tập đoàn công nghệ
                        hàng đầu nước Mỹ. Đây là chiếc điện thoại được yêu thích và săn đón nhất thế giới tính tới thời
                        điểm hiện tại.
                    </a>
                </div>
            </div>


        </div>
    </div>
</div>
</div>