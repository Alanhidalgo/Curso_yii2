<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "autor".
 *
 * @property integer $id
 * @property string $Nombre
 * @property string $pais_id
 * @property string $Created_By
 *
 * @property Pais $id0
 */
class Autor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'autor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'pais_id', 'Created_By'], 'required'],
            [['Nombre', 'pais_id', 'Created_By'], 'string', 'max' => 100],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'pais_id' => 'Pais ID',
            'Created_By' => 'Created  By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Pais::className(), ['id' => 'id']);
    }
}
