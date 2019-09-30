<?php

namespace app\models;

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
            [['address', 'fio'], 'string'],
            [['registration_date', 'last_login', 'status'], 'integer'],
            [['email', 'pass', 'phone'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['phone'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'pass' => 'Pass',
            'phone' => 'Phone',
            'address' => 'Address',
            'fio' => 'Fio',
            'registration_date' => 'Registration Date',
            'last_login' => 'Last Login',
            'status' => 'Status',
        ];
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
