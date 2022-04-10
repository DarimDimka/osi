<?php
require "vender/connectdb.php";
$title = "Заявка";
require_once "./vender/beginPage.php"; 

$mysql_user = mysqli_query($link, "SELECT * FROM `users` WHERE `id` = {$_SESSION['users']['id']}");
$users = mysqli_fetch_assoc($mysql_user);
$mysql_oborud = mysqli_query($link, "SELECT * FROM `oborud`");

?>

<link rel="stylesheet" type="text/css" href="./assets/css/account/account.css">
<form action="/vender/add_order.php" method="post">
    <input type="hidden" name="id" value="<?= $users['id']?>" />
    <div class="row mt-3">
        <div class="col-md-6">
            <label class="labels">Имя</label>
            <input type="text" class="form-control" placeholder="Имя" name='lastname' value="<?= $users['lastname']?>">
        </div>
        <div class="col-md-6">
            <label class="labels">Фамилия</label>
            <input type="text" class="form-control" value="<?= $users['surname']?>" placeholder="Фамилия" name="surname">
        </div>
        <div class="col-md-6">
            <label class="labels">Телефон</label>
            <input type="number" class="form-control" placeholder="Номер телефон" name="phone" value="<?= $users['phone']?>" >
        </div>
        <div class="col-md-6">
            <label class="labels">Email</label>
            <input type="text" class="form-control" placeholder="Email"  name="email" value="<?= $users['email']?>">
        </div>
        <div class="col-md-6">
            <label class="labels">Оборудование:</label>
            <select name="id_oborud">
                <?php while ($so = mysqli_fetch_assoc($mysql_oborud)) {?>
                    <option <?=$so['status'] == 0 ? "disabled" : ""?> value="<?= $so['id']?>" >
                        <?= $so['name']?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="col-md-12">
            <label class="labels">Причина</label>
            <input type="text" class="form-control" placeholder="Причина"  name="prichina">
        </div>
        <div class="col-md-12">
            <label class="labels">Адрес</label>
            <input type="text" class="form-control" placeholder="Адрес"  name="address">
        </div>
        <div class="col-md-12">
            <label class="labels">Дата</label>
            <input type="date" class="form-control" placeholder="Дата"  name="date">
        </div>
    </div>
    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" name="submit" type="submit">Сохранить</button></div>
</form>

<?  require_once "./vender/endPage.php"; ?>
