<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\models\Job;
use app\models\Info;

class JobController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex()
    {
        $jobs = Job::find()->where(['status' => '1'])->orderBy('updated_at ASC')->all();

        foreach ($jobs as $job) {
            // Действие job
            $info = new Info;
            $info->text = "Job done " . rand();
            $info->save();

            // Смена статуса - выполненный
            $job->status = 0;
            $job->save(false);
        }
    }

}
