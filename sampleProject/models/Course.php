<?php
namespace app\models;

use yii\db\ActiveRecord;

class Course extends ActiveRecord {

    private $name;
    private $course;
    private $amount;
    private $period;

    public function rules(){
        return[
            [['name','course','amount','period'], 'required']
        ];
    }

    public function courseCreate(){
        // $course = new Course();
        // $formData = Yii::$app->request->post();
        // $course->load($formData);
        // if($course->load($formData)){
        //     if($course->save()){
        //         Yii::$app->getSession()->setFlash('message','New Student Enrolled Successfully');
        //         return $this->redirect(['index']);
        //     }
        //     else{
        //         Yii::$app->getSession()->setFlash('message','Student Enrollement Failed');
        //     }
        // } 
    }
}
