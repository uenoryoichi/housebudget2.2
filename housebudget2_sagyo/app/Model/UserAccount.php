<?php 

class UserAccount extends AppModel
{
	public $hasMany ='Income';
	public $belongsTo = array('Account','User');
	
	public function select_option ($user_account_option=array())
    {
		$user_account_option=array();
        $params=array(
            'conditions'=>array(
                'UserAccount.user_id' => AuthComponent::user('id')
            )
        );
		foreach ($this->find('all',$params) as $data) {
			$user_account_option+=array($data['UserAccount']['id'] => $data['Account']['name']);
		}
		return $user_account_option;
	}
}
