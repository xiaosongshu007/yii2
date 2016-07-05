<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zb_userinfo".
 *
 * @property string $txtuser
 * @property string $password
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zb_userinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txtuser', 'password'], 'required'],    
            [['txtuser'], 'string', 'max' => 12],
            [['password'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'txtuser' => 'Txtuser',
            'password' => 'Password',
        ];
    }
}
