<?php

namespace Projeto\Unit96;
use Projeto\unit96\EmailService;

class EmailSender {
    private $emailService;

    public function __construct(EmailService $emailService) {
        $this->emailService = $emailService;
    }

    public function sendEmail($to, $subject, $message) {
        $this->emailService->send($to, $subject, $message);
    }
}

?>