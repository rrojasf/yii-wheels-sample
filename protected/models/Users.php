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
class Usuarios extends ManyManyActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{usuarios}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usr_alias, usr_email, usr_nombre, usr_prf_id', 'required'),
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
			'eventos' => array(self::HAS_MANY, 'Eventos', 'usr_id'),			
            'usrPrf' => array(self::BELONGS_TO, 'Perfiles', 'usr_prf_id'),
			'eventosCliente' => array(self::HAS_MANY, 'Eventos', 'usr_id_cliente'),
			'eventosAutor' => array(self::HAS_MANY, 'Eventos', 'usr_id_crea'),
			'eventosModifica' => array(self::HAS_MANY, 'Eventos', 'usr_id_mod'),
			'usrPrf' => array(self::BELONGS_TO, 'Perfiles', 'usr_prf_id'),
			'cli' => array(self::BELONGS_TO, 'Clientes', 'cli_id'),				
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
			'usr_nombre' => 'Nombre',
            'usr_prf_id' => 'Perfil',
            'usr_estado' => 'Estado'
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
		$criteria->compare('usr_nombre',$this->usr_nombre,true);
		$criteria->compare('usr_password',$this->usr_password,true);
		$criteria->compare('usr_salt',$this->usr_salt,true);
		$criteria->compare('usr_email',$this->usr_email,true);
		$criteria->compare('usr_prf_id',$this->usr_prf_id);
		$criteria->compare('usr_estado',$this->usr_estado);
		$criteria->compare('cli_id',$this->cli_id);		

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
                $this->usr_estado = 1;
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
  
    public function getRoles(){
        $assignedRoles = Rights::getAssignedRoles(Yii::app()->user->getId());                 
        $listRoles = array();

        foreach($assignedRoles as $rol) {
            array_push($listRoles, '\''.$rol->name.'\'');
        } 

        return implode(',',$listRoles);      
    }
    
    public function getPerfil(){
        $usuario = Usuarios::model()->findByPk(Yii::app()->user->getId());                 

        return array('id'=>$usuario->usr_prf_id, 'nombre'=>$usuario->usrPrf->prf_nombre);
    }    
}
