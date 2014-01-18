<nav class="container">
<div class="row">
	<ul class="nav nav-tabs nav-justified">
    <li><?php echo $this->Html->link(__('HOME'),array('controller' => 'Users', 'action' => 'index'));?></li>
		<li><a href="pay_index.php" >支出管理</a></li>
		<li><?php echo $this->Html->link(__('収入一覧'), array('controller'=>'Incomes', 'action'=>'index'))?></li>
		<li><a href="transfer_index.php" >口座間移動</a></li>
		<li><a href="account_index.php" >口座残高更新</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">設定 <span class="caret"></span></a>
    			<ul class="dropdown-menu" >
    				<li><a href="account_choice.php" >口座設定</a></li>
    				<li><a href="specification_choice.php" >分類項目設定</a></li>
    			</ul>
  		</li>
		<li><a href="mail_form.php" >お問い合わせ</a></li>
        <li><?php echo $this->Html->link(__('ログアウト'),array('controller'=>'Users','action'=>'logout'));?></li>
	</ul>
</div>
</nav>
