<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>  
<div class="container">
    <div class="row">
        <div class="col-md-12">
	        	<form name = "formLogin" action = "?r=site/login" method = "post">
	        		<table class="formAuth">  
	        			<tr> <td> Введите логин </td> <td> <input type="text" name="username" ></td> </tr>
	        			<tr><td> </td></tr>
	        			<tr> <td> Введите пароль</td> <td> <input type="password" name="password" ></td> </tr>
	        			<tr><td> </td></tr>
	        			<tr> <td> </td> <td> <input type="submit" value = "Войти"></td> </tr>
		           </table>
	            </form>
        </div> <!-- /.col-md-8 -->
    </div>
</div>
