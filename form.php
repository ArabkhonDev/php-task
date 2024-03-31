<?php
if(isset($_POST['form_btn'])){
    if(is_string($_POST['user_name']) && is_numeric($_POST['user_number']))
    $username = $_POST['user_name'];
    $userNumber = $_POST['user_number'];
    if(strlen($userNumber) == 9){
        switch ($userNumber){
            case "20":
                echo "bu simkarta nomi OQ";
                break;
            case "77":
                echo "bu simkarta nomi Mobiuz";
                break;
            case "88":
                echo "bu simkarta nomi Mobiuz";
                break;
            case "90":
                echo "bu simkarta nomi Beeline";
                break;
            case "91":
                echo "bu simkarta nomi Beeline";
                break;
            case "93":
                echo "bu simkarta nomi ucell";
                break;
            case "94":
                echo "bu simkarta nomi ucell";
                break;
            case "95":
                echo "bu simkarta nomi uzmobile";
                break;
            case "98":
                echo "bu simkarta nomi perfectum";
                break;
            case "99":
                echo "bu simkarta nomi uzmobile";
                break;
            

        }
    }else{
        echo "uzbek nomer emas";
    }
}


?>

<style>
    form{
        width: 700px;
        padding-top: 20px;
        background-color: #006053;
    }

    input{
        width: 300px;
        padding: 10px;
    }
</style>

<h1>Salom <?=$username;?></h1>
<h1>nomeringiz <?=$userNumber;?></h1>


<center>
    <form action="#" method="post">
        <h1>Savollaringiz bo'lsa yozib qoldiring</h1>
        <input type="text" name="user_name" placeholder="Ismingiz?" required><br>
        <input type="number" name="user_number" placeholder="Tel number: +998(__) ___ __ __" required><br>
        <button type="submit" name="form_btn">Yuborish</button>
    </form>
</center>