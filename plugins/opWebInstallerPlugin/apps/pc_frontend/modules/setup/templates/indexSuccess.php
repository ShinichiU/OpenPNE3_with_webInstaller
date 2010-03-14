<?php require_once($path.'_header.php') ?>

<?php if (!checkConfiguration::hasFatalError()): ?>
<div id="serupForm" class="dparts form">
<div class="parts">
<div class="partsHeading"><h3>OpenPNE3 セットアップ</h3></div>

<?php if (trim($form->renderGlobalErrors().$form->renderHiddenFields())): ?>
<table>
<tr>
<th><img src="images/icon_alert.gif" alt="" /></th>
<td>
<?php echo $form->renderGlobalErrors() ?>
<?php echo $form->renderHiddenFields() ?>
</td>
</tr>
</table>
<?php endif; ?>

<form action="./" method="post">
<strong>*</strong>は必須項目です。
<table>
<tr>
<th><label for="setup_DBMS">データベース&nbsp;<strong>*</strong></label></th>
<td>
<?php echo $form['DBMS']->renderError() ?>
<?php echo $form['DBMS']->render() ?>
</td>
</tr>
<tr>
<th><label for="setup_username">データベースユーザ名&nbsp;<strong>*</strong></label></th>
<td>
<?php echo $form['username']->renderError() ?>
<?php echo $form['username']->render() ?>
</td>
</tr>
<tr>
<th><label for="setup_password">データベースユーザパスワード</label></th>
<td>
<?php echo $form['password']->renderError() ?>
<?php echo $form['password']->render() ?>
<div class="help">パスワードが不要な場合、未入力のままにしてください</div>
</td>
</tr>
<tr>
<th><label for="setup_database">データベース名&nbsp;<strong>*</strong></label></th>
<td>
<?php echo $form['database']->renderError() ?>
<?php echo $form['database']->render() ?>
</td>
</tr>
<tr>
<th><label for="setup_hostname">ホスト名&nbsp;<strong>*</strong></label></th>
<td>
<?php echo $form['hostname']->renderError() ?>
<?php echo $form['hostname']->render() ?>
<div class="help">サーバー管理者より特に指定がない場合は、localhost のままで問題ありません</div>
</td>
</tr>
<tr>
<th><label for="setup_port">ポート</label></th>
<td>
<?php echo $form['port']->renderError() ?>
<?php echo $form['port']->render() ?>
</td>
</tr>
<tr>
<th><label for="setup_socket">ソケット</label></th>
<td>
<?php echo $form['socket']->renderError() ?>
<?php echo $form['socket']->render() ?>
</td>
</tr>
</table>

<div class="operation">
<ul class="moreInfo button">
<li>
<input type="submit" class="input_submit" value="送信" />
</li>
</ul>
</div>
</form>
</div><!-- parts -->
</div><!-- dparts -->
<?php endif; ?>

<div id="configurationList" class="dparts form">
<div class="parts">
<div class="partsHeading"><h3>OpenPNE利用環境確認</h3></div>

<?php if (checkConfiguration::hasFatalError()): ?>
<table>
<tr>
<th><img src="images/icon_alert.gif" alt="" /></th>
<td>
赤色の項目を修正して、「再読み込み」ボタンを押してください
</td>
</tr>
</table>
<form method="get" action="./">
<div class="operation">
<ul class="moreInfo button">
<li>
<input type="submit" class="input_submit" value="再読み込み" />
</li>
</ul>
</div>
</form>
<?php endif; ?>

<table>
<?php foreach ($configurations as $configuration): ?>
<tr class="<?php echo 'conf_'.$configuration['type'] ?>">
<th><?php echo $configuration['name'] ?></th>
<td>
<?php echo ('OK' == $configuration['type']) ? 'OK' : $configuration['type'].':'.$configuration['help']; ?>
</td>
</tr>
<?php endforeach; ?>
</table>
</div>
</div>

<?php require_once($path.'_footer.php') ?>
