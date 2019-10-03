<?php

	namespace app\models;

	use Yii;
	use yii\db\ActiveRecord;

	/**
	 * This is the model class for table "users".
	 *
	 * @property int $id
	 * @property string $email
	 * @property string $pass
	 * @property string $phone
	 * @property string $address
	 * @property string $fio
	 * @property int $registration_date
	 * @property int $last_login
	 * @property int $status
	 * @property string $token
	 *
	 * @property Costs[] $costs
	 * @property Debts[] $debts
	 * @property Events[] $events
	 * @property Notes[] $notes
	 * @property TodoCat[] $todoCats
	 * @property TodoList[] $todoLists
	 */
	class Users extends ActiveRecord
	{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'users';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
				[['email', 'pass'], 'required'],
				[['address', 'fio', 'token'], 'string'],
				[['registration_date', 'last_login', 'status'], 'integer'],
				[['email', 'pass', 'phone'], 'string', 'max' => 255],
				[['email'], 'unique'],
				[['phone'], 'unique'],
			];
		}

		public function sendConfirmMail($token, $email, $fio)
		{
			Yii::$app->mailer->compose([
				'html' => '@app/modules/api/views/mail-templates/register',
			],
			[
				'token' => $token,
				'fio' => $fio,
				'email' => $email
			])
				->setFrom('erkin@pardayev.uz')
				->setTo($email)
				->setSubject("Testing")
				->send();
		}

		/**
		 * {@inheritdoc}
		 */
		public function generateToken()
		{
			$this->token = Yii::$app->security->generateRandomString(15);
		}

		public function setPassword($password)
		{
			$this->pass = Yii::$app->security->generatePasswordHash($password);
		}

		/**
		 * @return \yii\db\ActiveQuery
		 */
		public function getCosts()
		{
			return $this->hasMany(Costs::className(), ['user_id' => 'id']);
		}

		/**
		 * @return \yii\db\ActiveQuery
		 */
		public function getDebts()
		{
			return $this->hasMany(Debts::className(), ['user_id' => 'id']);
		}

		/**
		 * @return \yii\db\ActiveQuery
		 */
		public function getEvents()
		{
			return $this->hasMany(Events::className(), ['user_id' => 'id']);
		}

		/**
		 * @return \yii\db\ActiveQuery
		 */
		public function getNotes()
		{
			return $this->hasMany(Notes::className(), ['user_id' => 'id']);
		}

		/**
		 * @return \yii\db\ActiveQuery
		 */
		public function getTodoCats()
		{
			return $this->hasMany(TodoCat::className(), ['user_id' => 'id']);
		}

		/**
		 * @return \yii\db\ActiveQuery
		 */
		public function getTodoLists()
		{
			return $this->hasMany(TodoList::className(), ['user_id' => 'id']);
		}
	}
