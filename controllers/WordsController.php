<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\Pagination;
use app\models\Words;

class WordsController extends SiteController
{
    public function actionLibrary()
    {   
        $model = new Words;
        $query = Words::find();
        $pagination = new Pagination([
            'defaultPageSize' => 12,
            'totalCount' => $query->count(),
        ]);
        $word = $query->orderBy('word')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('library', [
            'word' => $word,
            'pagination' => $pagination,
        ]);

    }

}
