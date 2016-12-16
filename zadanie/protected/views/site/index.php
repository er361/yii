<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<p>Чтобы подать заявку как пользователь нужно:</p>
<ul>
	<li>Зарегистрироваться </li>
	<li>Зайти в личный кабинет и подать</li>
</ul>

<p>Чтобы зайти под админом нужно выполнить миграции из папки "protected":  <code>yiic migrate --migrationPath=user.migrations</code> далее нужно будет указать админа логин пароль и т.д</p>
