<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pais".
 *
 * @property integer $id
 * @property string $nombre_pais
 * @property string $estado
 */
class Pais extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pais';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nombre_pais', 'estado'], 'required'],
            [['id'], 'integer'],
            [['nombre_pais', 'estado'], 'string'],
            [['nombre_pais', 'estado'], 'unique', 'messeage' => 'Ya se ha registrado ese pais'],
            [['nombre_pais', 'estado'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_pais' => 'Nombre Pais',
            'estado' => 'Estado',
        ];
    }
}
