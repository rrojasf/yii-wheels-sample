<?php

/**
 * This is the model class for table "{{usuarios}}".
 *
 * The followings are the available columns in table '{{usuarios}}':
 * @property integer $usr_id
 * @property string $usr_nombre
 * @property string $usr_password
 * @property string $usr_salt
 * @property string $usr_email
 * @property string $usr_descripcion
 *
 * The followings are the available model relations:
 * @property Regionales $usrRgn
 * @property Actividades[] $actividades
 * @property Actividades[] $actividades1
 */
//class Usuarios extends CActiveRecord
class Users extends ManyManyActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usr_alias, usr_email, usr_name', 'required'),
	            	array('usr_email', 'email'),
	            	array('usr_alias', 'unique'),
			array('usr_alias, usr_password, usr_salt, usr_email', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('usr_id, usr_alias, usr_password, usr_salt, usr_email, usr_profile', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usr_id' => 'Id',
			'usr_alias' => 'Login',
			'usr_password' => 'Password',
			'usr_salt' => 'SecurityKey',
			'usr_email' => 'Email',
			'usr_name' => 'Nombre',
			'usr_status' => 'Estado'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('usr_id',$this->usr_id);
		$criteria->compare('usr_alias',$this->usr_alias,true);        
		$criteria->compare('usr_name',$this->usr_name,true);
		$criteria->compare('usr_password',$this->usr_password,true);
		$criteria->compare('usr_salt',$this->usr_salt,true);
		$criteria->compare('usr_email',$this->usr_email,true);
		
		$criteria->compare('usr_status',$this->usr_status);
	

		return new CActiveDataProvider($this, array(
            'pagination'=>array(
            // please check how we get the
            // the pageSize from user's state
            'pageSize'=> Yii::app()->user->getState('pageSize',
            //
            // we have previously set defaultPageSize
            // on the params section of our main.php config file
            Yii::app()->params['defaultPageSize']),
            ),            
			'criteria'=>$criteria,			
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}	
	
		/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return $this->hashPassword($password,$this->usr_salt)===$this->usr_password;
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @param string salt
	 * @return string hash
	 */
	public function hashPassword($password,$salt)
	{
		return md5($salt.$password);
	}

	/**
	 * Generates a salt that can be used to generate a password hash.
	 * @return string the salt
	 */
	public function generateSalt()
	{
		return uniqid('',true);
	}

	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->usr_salt=$this->generateSalt();
                $this->usr_status = 1;
			}
            
			//if(!empty($_POST["usr_password"])) {
				$this->usr_password=$this->hashPassword($this->usr_password, $this->usr_salt);
			//}
		
			return true;
		}
		else
			return false;
	}
    
public function scopes()
  {
    return array(
      'not_admin' => array(
        'condition' => "usr_alias='admin'",
      ),
    );
  }
      
}
