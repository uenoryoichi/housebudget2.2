<?php  

class AccountClassification extends AppModel
{
  	public $hasMany ='Account';
    public $validate = array(
        'name' => array(
            'rule' => 'numeric'
        )
    );
}
