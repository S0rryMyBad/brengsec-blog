<h1><i class="fa fa-dashboard"></i><?=$Language->template('overview_dashboard_text')?></h1>
<p><?=$Language->template('overview_dashboard_desc')?></p>

<h2><i class="fa fa-newspaper-o"></i><?=$Language->template('last_post')?></h2>
<p><strong><?=$Language->text('posts')?>:</strong> <?=$COUNT['POST']?> | <a href="<?=Application::getAdminURL('post/')?>"><?=$Language->text('post_overview')?></a> | <a href="<?=Application::getAdminURL('post/insert.php')?>"><?=$Language->text('insert')?></a></p>
<?php if(!empty($LAST['POST'])): ?>
	<ul class="item-list">
		<?=$LAST['POST']?>
	</ul>
<?php else: ?>
	<p><em><?=$Language->template('home_no_posts')?></em></p>
<?php endif; ?>

<h2><i class="fa fa-file-text-o"></i><?=$Language->template('last_page')?></h2>
<p><strong><?=$Language->text('pages')?>:</strong> <?=$COUNT['PAGE']?> | <a href="<?=Application::getAdminURL('page/')?>"><?=$Language->text('page_overview')?></a> | <a href="<?=Application::getAdminURL('page/insert.php')?>"><?=$Language->text('insert')?></a></p>

<?php if(!empty($LAST['PAGE'])): ?>
	<ul class="item-list">
		<?=$LAST['PAGE']?>
	</ul>
<?php else: ?>
	<p><em><?=$Language->template('home_no_pages')?></em></p>
<?php endif; ?>

<h2><i class="fa fa-user"></i><?=$Language->template('last_user')?></h2>
<p><strong><?=$Language->text('users')?>:</strong> <?=$COUNT['USER']?> | <a href="<?=Application::getAdminURL('user/')?>"><?=$Language->text('user_overview')?></a> | <a href="<?=Application::getAdminURL('user/insert.php')?>"><?=$Language->text('insert')?></a></p>

<?php if(!empty($LAST['USER'])): ?>
	<ul class="item-list">
		<?=$LAST['USER']?>
	</ul>
<?php else: ?>
	<p><em><?=$Language->template('home_no_users')?></em></p>
<?php endif; ?>
