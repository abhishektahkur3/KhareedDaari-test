<?php
$active = "Account";
include("db.php");
include("functions.php");
include("header.php");
?>

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    <span>Account</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- #content Begin -->
<div class="tabs" style="display: grid; justify-content:center">
    <ul class="tab-links" style="display:flex; list-style:none">
        <li class="size_cat">
            <button type="button" id="cat_btn" onclick="document.getElementById('img').src='img/womens-size-chart.jpg'">
                Woman's Size Chart
            </button>
        </li>
        <li class="size_cat">
            <button type="button" id="cat_btn" onclick="document.getElementById('img').src=
                'img/men-size-chart.jpg'">
                Men's Size Chart
            </button>
        </li>
        <li class="size_cat">
            <button type="button" id="cat_btn" onclick="document.getElementById('img').src=
                'https://storage.sg.content-cdn.io/in-resources/37509c70-78e6-42a4-a0cc-744f8212d423/Images/userimages/HOW-TO-MEASURE-Men.jpg'">
                Measure Men
            </button>
        </li>
        <li class="size_cat">
            <button type="button" id="cat_btn" onclick="document.getElementById('img').src=
                'https://storage.sg.content-cdn.io/in-resources/37509c70-78e6-42a4-a0cc-744f8212d423/Images/userimages/HOW-TO-MEASURE-WOMEN.jpg'">
                Measure Woman
            </button>

        </li>
        <style>
            .size_cat{
                margin:20px
            }
            #cat_btn{
                border: none;
                height: 45px;
                width: 180px;
            }
            #cat_btn:focus{
                background-color: #f13510;
            }
            #cat_btn:hover{
                background-color: #f13510;
            }

        </style>
    </ul>
</div>
<div class="tab-content" style="display:grid; justify-content:center; margin-bottom:20px">
    <div class="tab" id="WOMENSIZECHART">
        <div class="carmaa-store-images "><img class="sizechartimg" id="img" src="img/womens-size-chart.jpg" style="filter: invert(0);"></div>
    </div>
    <!-- <div class="tab" id="MENSIZECHART" style="display: block;">
        <div class="carmaa-store-images"><img class="sizechartimg" src="http://storage.sg.content-cdn.io/in-resources/37509c70-78e6-42a4-a0cc-744f8212d423/Images/userimages/Opt1/mens-12102019.jpg" style="filter: invert(0);"></div>
    </div>
    <div class="tab" id="HOWTOMEASUREWOMEN" style="display: none;">
        <div class="carmaa-store-images"><img class="sizechartimg" src="//storage.sg.content-cdn.io/in-resources/37509c70-78e6-42a4-a0cc-744f8212d423/Images/userimages/HOW-TO-MEASURE-WOMEN.jpg" style="filter: invert(0);"></div>
    </div>
    <div class="tab" id="HOWTOMEASUREMEN" style="display: none;">
        <div class="carmaa-store-images"><a href="#"><img class="sizechartimg" src="//storage.sg.content-cdn.io/in-resources/37509c70-78e6-42a4-a0cc-744f8212d423/Images/userimages/HOW-TO-MEASURE-Men.jpg" style="filter: invert(0);"></a></div>
    </div> -->
</div>

<?php
include('footer.php');
?>

</body>

</html>