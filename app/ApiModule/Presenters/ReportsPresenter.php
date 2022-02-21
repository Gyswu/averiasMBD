<?php

declare(strict_types=1);

namespace App\ApiModule\Presenters;

use Latte\Engine;
use Nette\Mail\Mailer;
use Nette\Mail\Message;
use Nette\Mail\SmtpMailer;
use Nette\Utils\Json;
use Nextras\Orm\Collection\ICollection;

final class ReportsPresenter extends BaseApiPresenter
{
    private $secretToken = "1hnoILACJWVE0J4xRqwqgJBl5a0RbrDW";

    private SmtpMailer $smtpMailer;
    private $smtpConfig;
    public function __construct($smtp)
    {
        $this->smtpConfig = $smtp;
        $this->smtpMailer = new SmtpMailer([
            'host' => $smtp['host'],
            'username' => $smtp['username'],
            'password' => $smtp['password'],
            'secure' => $smtp['secure'],
        ]);
    }

    private function sendEmail(string $subject, string $to, string $body)
    {
        $mail = new Message;
        $mail->setFrom($this->smtpConfig['username'])
            ->addTo($to)
            ->setSubject($subject)
            ->setHtmlBody($body);

        $this->smtpMailer->send($mail);
    }

    public function actionPrintersStatus($token)
    {
        if ($token !== $this->secretToken) {
            $this->sendJson("Access not allowed");
        }

        $copies = $this->orm->copias->getReport();
        // ->orderBy("this->maquina->empresa->nombre", "ASC")
        // ->orderBy("this->maquina->modelo", "ASC");

        $latte = new Engine;
        $body = $latte->renderToString(
            __DIR__ . '/templates/Reports/printersStatus.latte',
            [
                "copies" => $copies
            ]
        );


        $this->template->copies = $copies;
        // $this->sendEmail("Report of printers", "vichaunter@gmail.com", $body);
    }
}
