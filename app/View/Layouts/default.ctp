<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('ExtendedFamilies');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

</script>
</head>
<body>
	<div id="container">
		
		<div id="header">
		<?php echo $this->Html->image("ExtendedFam/ExFam_01.jpg", array('alt' => 'Extended Families Australia'));?>
		</div>
		<div id="navigation">
		<ul>
		<li>
		<?php Echo $this->Html->Link('HOME', '#');?>
		</li>
		<li>
		<?php Echo $this->Html->Link('CLIENT', '/clients');?>
        <ul class="submenu" id="clientsubmenu">
         <li>
        <?php Echo $this->Html->Link('Client List', '/clients', array('class' => 'button'));?>
        </li>
         <li>
        <?php Echo $this->Html->Link('Add Client', '/clients/add');?>
        </li>
         <li>
        <?php Echo $this->Html->Link('Statuses list', '/clientstatuses');?>
        </li>
        <li>
        <?php Echo $this->Html->Link('Add Status', '/clientstatuses/add');?>
        </li>
        </ul>
		</li>
		<li>
		<?php Echo $this->Html->Link('VOLUNTEER', '/volunteers');?>
			<ul class="submenu" id="clientsubmenu">
         <li>
        <?php Echo $this->Html->Link('Volunteer List', '/volunteers', array('class' => 'button'));?>
        </li>
        <li>
        <?php Echo $this->Html->Link('Statuses list', '/volunteerstatuses');?>
        </li>
        <li>
        <?php Echo $this->Html->Link('Timesheet List', '/Timesheets');?>
        </li>
        </ul>
		</li>
		<li>
		<?php Echo $this->Html->Link('MATCHING', '#');?>
		</li>
		<li>
		<?php Echo $this->Html->Link('EVENT', '#');?>
		</li>
		</ul>
		</div>
		<div id="content">
			
			<?php echo $this->Html->getCrumbs(' > ', array('url' => array('controller' => 'pages', 'action' => 'display', 'Home'))); ?><br>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			Copyright @ Extended Families Australia 2012
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php
        echo $content_for_layout;
    ?>
	
</body>
</html>

