<?php

namespace frontend\controllers;

use yii\web\Controller;
use common\models\news;

class NewsController extends Controller
{
public function actionList()
{
    $news=News::find()->all();
    return $this->render("list",["news"=>$news]);
}

 public function actionView($id)
 {
    $new=News::findOne(["id"=>$id]);
     return $this->render("view",["new"=>$new]);
 }

}