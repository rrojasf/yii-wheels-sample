<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
    	private $_username;

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users=Users::model()->find('LOWER(usr_alias)=?',array(strtolower($this->username)));

		if($users===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$users->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$users->usr_id;
			$this->username=$users->usr_alias;
			$this->errorCode=self::ERROR_NONE;
		}
		
		return $this->errorCode==self::ERROR_NONE;
	}

	/**
	 * @return integer the ID of the usuarios record
	 */
	public function getId()
	{
		return $this->_id;
	}
}