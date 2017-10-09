<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "autor".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $pais_id
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
            [['id', 'nombre', 'pais_id'], 'required'],
            [['id', 'pais_id'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'pais_id' => 'Pais ID',
        ];
    }
}
