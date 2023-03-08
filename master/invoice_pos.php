<?php
include_once "component/user_data.php";
$app = new controller;
$get_ids = base64_decode($app->get_request('sid'));
?>
<html>
<head>
<style>
    #invoice-POS{
        box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
        padding:2mm;
        margin: 0 auto;
        width: 65mm;
        background: #FFF;


    ::selection {background: #f31544; color: #FFF;}
    ::moz-selection {background: #f31544; color: #FFF;}
    h1{
        font-size: 1.5em;
        color: #222;
    }
    h2{font-size: .9em;}
    h3{
        font-size: 1.2em;
        font-weight: 300;
        line-height: 2em;
    }
    p{
        font-size: .7em;
        color: #666;
        line-height: 1.2em;
    }

    #top, #mid,#bot{ /* Targets all id with 'col-' */
        border-bottom: 1px solid #EEE;
    }

    #top{min-height: 100px;}
    #mid{min-height: 80px;}
    #bot{ min-height: 50px;}

    #top .logo{
    //float: left;
        height: 60px;
        width: 60px;
        background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
        background-size: 60px 60px;
    }
    .clientlogo{
        float: left;
        height: 60px;
        width: 60px;
        background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
        background-size: 60px 60px;
        border-radius: 50px;
    }
    .info{
        display: block;
    //float:left;
        margin-left: 0;
    }
    .title{
        float: right;
    }
    .title p{text-align: right;}
    table{
        width: 100%;
        border-collapse: collapse;
    }
    td{
    //padding: 5px 0 5px 15px;
    //border: 1px solid #EEE
    }
    .tabletitle{
    //padding: 5px;
        font-size: .5em;
        background: #EEE;
    }
    .service{border-bottom: 1px solid #EEE;}
    .item{width: 24mm;}
    .itemtext{font-size: .5em;}

    #legalcopy{
        margin-top: 5mm;
    }


    }
</style>
</head>
<body>

<div id="invoice-POS">

    <center id="top">
        <div class="logo"></div>
        <div class="info">
            <h4><?= $business_name; ?></h4>
        </div><!--End Info-->
    </center><!--End InvoiceTop-->

    <div id="mid">
        <div class="info">
            <h4>Contact Info</h4>
            <p>
                Address : street city, state 0000</br>
                Email   : JohnDoe@gmail.com</br>
                Tel: <?= $phone_number;  ?></br>
            </p>
        </div>
    </div><!--End Invoice Mid-->

    <div id="bot">

        <div id="table">
            <table>
                <tr class="tabletitle">
                    <td class="item"><h5>Item</h5></td>
                    <td class="Hours"><h5>Qty</h5></td>
                    <td class="Rate"><h5>Sub Total</h5></td>
                </tr>
                <?php
                $get_category = $app->view_invoice($key_grant,$get_ids);
                $count = 0;
                foreach ($get_category as $cc) {
                $count++;
                ?>
                <tr class="service">
                    <td class="tableitem"><p class="itemtext"><?= $app->stringFormat($cc->item_name, 25); ?></p></td>
                    <td class="tableitem"><p class="itemtext"><?= $cc->qty; ?></p></td>
                    <td class="tableitem"><p class="itemtext"><?= number_format($cc->price_sold); ?></p></td>
                </tr>
                    <?php
                }
                ?>

                <tr class="tabletitle">
                    <td></td>
                    <td class="Rate"><h4>tax</h4></td>
                    <td class="payment"><h4>$00.00</h4></td>
                </tr>

                <tr class="tabletitle">
                    <td></td>
                    <td class="Rate"><h4>Total</h4></td>
                    <td class="payment"><h4><?php $plant =$app->total_paid_carts($get_ids,$key_grant); echo  number_format($plant->price_sold);  ?></h4></td>
                </tr>

            </table>
        </div><!--End Table-->

        <div id="legalcopy">
            <p class="legal"><strong>Thanks For Your Patronage...</strong>
            </p>
        </div>

    </div><!--End InvoiceBot-->
</div><!--End Invoice-->

<a href="user_dir.php"> <button>Dashboard</button></a>
</body>
</html>