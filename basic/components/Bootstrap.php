<?php
/**
 * Created by PhpStorm.
 * User: burakovas
 * Date: 2019-01-14
 * Time: 20:19
 */

namespace app\components;


use app\models\tables\Tasks;
use yii\base\BootstrapInterface;
use yii\base\Component;
use yii\base\Event;

class Bootstrap extends Component implements BootstrapInterface
{
    /** @var Application */
    protected $app;

    public function bootstrap($app)
    {
        $this->app = $app;
        $this->setLang();
    }

    protected function setLang(){
        $this->app->language = $this->app->session->get('lang');
    }

    protected function attachEventsHandlers(){
        Event::on(Tasks::class, Tasks::EVENT_AFTER_INSERT, function ($event){

            $task = $event->sender;
            $user = $task->responsible;

            \Yii::$app->mailer->compose()
                ->setTo($user->email)
                ->setFrom('admin@test.ru')
                ->setSubject("You have new task!")
                ->setTextBody("New task created '($task->name)' !!")
                ->send();
        });
    }
}