<?php
$title = $_POST["title"];
$deskripsi = $_POST["deskripsi"];
$accountnumber = $_POST["accountnumber"];
$bank = $_POST["bank"];
$accountname = $_POST["accountname"];
$transaction = $_POST["transaction"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$totalamount = $transaction * 100;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengiriman</title>
</head>

<body style="margin: 0px; background-color: #fafafa;">

    <div class="navbar" style="background-color: grey; display: flex; justify-content: center; align-items: center; padding: 10px;">
        <ul class="menu" style="font-size: 16px; list-style: none; padding: 0; display: flex;  align-items: center; margin-left: 5%;">
            <li style="margin: 0 50px;"><a href="form_pemesanan.php" style=" text-decoration:  none; color: #fff;">Home</a></li>
            <li style="margin: 0 50px;"><a href="#" style=" text-decoration: none; color: #fff;">Register</a></li>
            <li style="margin: 0 50px;"><a href="#" style="text-decoration: none; color: #fff;">Policy</a></li>
            <li style="margin: 0 50px;"><a href="#" style="text-decoration: none; color: #fff;">About</a></li>
        </ul>
    </div>
    <br>

    <section>
        <div class="drom" style="display: flex; justify-content: center; align-items: center;">
            <div class="container" style="width: 40%; padding: 20px; background-color: #fff; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <table style="padding: 20px;">
                    <tr>
                        <td>
                            <p>Title Here : <?= $title ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Deskripsi : <?= $deskripsi ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Total Amount : $<?= $totalamount ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Pay to : <?= $accountnumber ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> <label for="payment" style="font-size: 16px;">Payment Type:</label></td>
                    </tr>
                    <tr>
                        <td><select id="payment" name="paymenttype" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                                <option value="Credit Card">Credit Card</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="PayPal">PayPal</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p>Account Holder : <?= $accountname ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Account No : <?= $accountnumber ?></p>
                            <input type="checkbox" value="Send to Mobile Phone" name="" id="" style="color: green;">
                            <label for="" style="color: green;">Send to Mobile Phone</label><br>
                            <input type="checkbox" value="Send to Email" name="" id="">
                            <label for="" style="color: green;">Send to Email</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Send to Mobile Phone : <?= $phone ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Send to Email : <?= $email ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Pay using Quidlink" name="btn" style="background-color: grey; color: #fff; padding: 10px 20px; border:#fff; border-radius: 5px;"></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <br>

</body>

</html>