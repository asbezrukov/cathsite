<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="widget-main">
                <div class="widget-inner">
                    <form name = "formLogin" action = "/site/login" method = "post">
                        <div class="form-auth-wrap">
                            <table class="form-auth">
                                <tr><td>Логин:&nbsp;</td><td><input type="text" name="username" ></td> </tr>
                                <tr><td><div class="form-auth-space"></div></td></tr>
                                <tr><td>Пароль:&nbsp;</td><td><input type="password" name="password" ></td> </tr>
                                <tr><td><div class="form-auth-space"></div></td></tr>
                                <tr><td></td><td><input class="pull-right" type="submit" value = "Войти"></td> </tr>
                           </table>
                        </div>
                    </form>
                    <p class="hint">
                        Учетные записи для входа:<br>
                        Login: <span class="hint-light">admin</span><br>
                        Login: <span class="hint-light">chiefstudent</span><br>
                        Login: <span class="hint-light">chiefstaff</span><br>
                        Login: <span class="hint-light">student</span><br>
                        Login: <span class="hint-light">staff</span><br>
                        Пароль для всех: <span class="hint-light">1</span>
                    </p>
                </div>
            </div>
        </div> <!-- /.col-md-8 -->
    </div>
</div>
