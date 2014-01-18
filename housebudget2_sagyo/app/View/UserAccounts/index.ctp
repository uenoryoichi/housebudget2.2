
<ul>
<?php foreach ($user_accounts as $user_account) :?>
<li>
<?php
//echo h($income['Income']['title']);
echo $this->Html->Link($user_account['UserAccount']['id'],'/incomes/view/'.$user_account['UserAccount']['id']);
?>
</li>
<?php endforeach;?>
</ul>


<h2>Add Income</h2>
<?php echo $this->Html->Link('Add Income', array('controller'=>'incomes', 'action'=>'add'));?>