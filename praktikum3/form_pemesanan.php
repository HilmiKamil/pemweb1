<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Burger</title>
</head>

<body style="margin: 0;">
    <div class="navbar" style="background-color: grey; display: flex; justify-content: center; align-items: center; padding: 10px;">
        <ul class="menu" style="font-size: 16px; list-style: none; padding: 0; display: flex;  align-items: center; margin-left: 5%;">
            <li style="margin: 0 50px;"><a href="#" style="text-decoration: none; color: #fff;">Home</a></li>
            <li style="margin: 0 50px;"><a href="#" style="text-decoration: none; color: #fff;">Generate Link</a></li>
            <li style="margin: 0 50px;"><a href="#" style="text-decoration: none; color: #fff;">Transaction History</a></li>
            <li style="margin: 0 50px;"><a href="#" style="text-decoration: none; color: #fff;">Policy</a></li>
            <li style="margin: 0 50px;"><a href="#" style="text-decoration: none; color: #fff;">Logout</a></li>
        </ul>
    </div>
    <br>

    <div class="drom" style="display: flex; justify-content: center; align-items: center;">
        <div class="form-container" style="width: 40%; padding: 20px; background-color: #fff; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <form action="form_pengiriman.php" method="POST" style="padding: 20px;">

                <div class="form-row" style="margin-bottom: 10px;">
                    <h1 style="font-size: 30px; text-align: center;font-size: 36px; color:#333; text-align: center; background-color: #f0f0f0; padding: 10px; border-radius: 10px;"><b>FORM PENGIRIMAN <span style="color: brown;"><u>BURGER</u></span></b></h1>
                </div>
                <br>

                <div class="form-row" style="margin-bottom: 10px;">
                    <label for="title" style="font-size: 16px;"><b>Title Here:</b></label>
                    <input type="text" name="title" id="title" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <div class="form-row" style="margin-bottom: 10px;">
                    <label for="deskripsi" style="font-size: 16px;"><b>Deskripsi:</b></label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" maxlength="400" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
                </div>

                <div class="form-row" style="margin-bottom: 10px;">
                    <label for="accountnumber" style="font-size: 16px;"><b>Account Number:</b></label>
                    <input type="number" name="accountnumber" id="accountnumber" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <div class="form-row" style="margin-bottom: 10px;">
                    <label for="bank" style="font-size: 16px;"><b>Bank:</b></label>
                    <select id="bank" name="bank" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        <option value="BCA">BCA</option>
                        <option value="BRI">BRI</option>
                        <option value="Bank Syariah">Bank Syariah</option>
                        <option value="Bank Permata">Bank Permata</option>
                    </select>
                </div>

                <div class="form-row" style="margin-bottom: 10px;">
                    <label for="accountname" style="font-size: 16px;"><b>Account Holder:</b></label>
                    <input type="text" name="accountname" id="accountname" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <div class="form-row" style="margin-bottom: 10px;">
                    <label for="transaction" style="font-size: 16px;"><b>Transaction:</b></label>
                    <input type="number" name="transaction" id="transaction" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" min="1">
                    <p>*if the transaction is for 3 person, choose 3 from the dropdown list</p>
                    <input type="checkbox" value="Send to Mobile Phone" name="" id="" style="color: green;">
                    <label for="" style="color: green;">Send to Mobile Phone</label><br>
                    <input type="checkbox" value="Send to Email" name="" id="">
                    <label for="" style="color: green;">Send to Email</label>
                </div> <br>

                <div class="form-row" style="margin-bottom: 10px;">
                    <label for="phone" style="font-size: 16px;"><b>Send to Mobile Phone:</b></label>
                    <input type="number" name="phone" id="phone" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <div class="form-row" style="margin-bottom: 10px;">
                    <label for="email" style="font-size: 16px;"><b>Send to Email:</b></label>
                    <input type="email" name="email" id="email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <div class="form-row" style="margin-bottom: 10px;">
                    <input type="submit" value="Submit" name="btn" style="background-color: grey; color: #fff; padding: 10px 20px; border:#fff; border-radius: 5px;">
                    <input type="reset" value="Reset" name="reset" style="background-color: grey; color: #fff; padding: 10px 20px; border:#fff; border-radius: 5px;">
                </div>
            </form>
        </div>
    </div>
    <br>
</body>

</html>