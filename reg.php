<?php
$title = "Регистрация";
require_once "./vender/beginPage.php"; ?>
<link rel="stylesheet" href="assets/css/auto/reg.css">
<div class="container">
    <div class="row">
            <div class="col-xs-12 forma">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                        <img class="brandimg img-responsive zoomIn" src="./assets/img/index/logo_osi.svg" />
                    </div>
                </div>
                    <div class="row forma-input margin-top-20px">
                        <form action="vender/reg.php" method="POST">
                            <input type="hidden" name="" value="">
                            <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                                <div class="form-group">
                                    <label class="control-label block">Имя</label>
                                    <input class="form-control" type="text" name="lastname"/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                                <div class="form-group">
                                    <label class="control-label block">Фамилия</label>
                                    <input class="form-control" type="text" name="surname"/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                                <div class="form-group">
                                    <label class="control-label block">E-mail</label>
                                    <input class="form-control" type="email" name="email"/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                                <div class="form-group">
                                    <label class="control-label block">Телефон</label>
                                    <input class="form-control" type="phone" name="phone"/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                                <div class="form-group">
                                    <label class="control-label block">Логин</label>
                                    <input class="form-control" type="text" name="login"/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                                <div class="form-group">
                                    <label class="control-label">Пароль</label>
                                    <input class="form-control" type="password" name="password"/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                                <div class="form-group">
                                    <label class="control-label">Пароль еще раз</label>
                                    <input class="form-control" type="password" name="confpassword"/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" name="submit">Регистрация</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
</div>


<?php require_once "./vender/endPage.php";