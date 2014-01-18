<?php  

class Account extends AppModel
{

        public $name = 'Account';
  	public $hasMany ='UserAccount';
	public $belongsTo = array('AccountClassification');


}
