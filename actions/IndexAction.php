<?php
<<<<<<< HEAD
namespace app\actions;

=======

namespace app\actions;


>>>>>>> origin/master
use Yii;
use yii\data\ActiveDataProvider;
use yii\rest\IndexAction as Index;

<<<<<<< HEAD
class IndexAction extends Index
{
   public function run()
=======

class IndexAction extends Index
{

    public function run()
>>>>>>> origin/master
    {
        $modelClass = $this->modelClass;
        return $modelClass::$users;
    }
}
