<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%author}}".
 *
 * @property string $id
 * @property string $firstname
 * @property string $surname
 * @property string $biography
 *
 * @property Books[] $books
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%author}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'surname'], 'required'],
            [['firstname'], 'string', 'max' => 32],
            [['surname'], 'string', 'max' => 64],
            [['biography'], 'string', 'max' => 2048],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'firstname' => Yii::t('app', 'Firstname'),
            'surname' => Yii::t('app', 'Surname'),
            'biography' => Yii::t('app', 'Biography'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['author_id' => 'id']);
    }
}
