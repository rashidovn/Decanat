<?php
//debug($this->request->data);
//debug( $this->request->params);

/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('main');
		echo $this->Html->script('jquery-1.8.0.min');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<div id="header">
			<h1>Деканат Мини</h1>
		</div>

		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav">
						<li <?php if ($controller == 'students') : ?> class="active" <?php endif ?> > <a href="/students">Студенты</a></li>
						<li <?php if ($controller == 'groups') : ?> class="active" <?php endif ?>><a href="/groups">Группы</a></li>
						<li <?php if ($controller == 'specialities') : ?> class="active" <?php endif ?>><a href="/specialities">Специальности</a></li>
						<li <?php if ($controller == 'users') : ?> class="active" <?php endif ?>><a href="/users/login">Войти в систему</a></li>
						<li ><a href="/users/logout">Выйти из системы</a></li>			
					</ul>
				</div>
			</div>
		</div>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			HITC, 2012
		</div>
	</div>
	<?= $this->element('sql_dump'); ?>
</body>
</html>
