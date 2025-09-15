<?php
namespace App\Mail;

use App\Contracts\Mailing;
use Exception;
use Illuminate\Support\Facades\View;

class PHPMailer implements Mailing
{
    public function mail($data)
    {
        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST', 'smtp.gmail.com');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION', 'tls');
            $mail->Port       = env('MAIL_PORT', 587);

            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));

            $mail->addAddress(env('MAIL_FROM_ADDRESS'));

            $body = View::make("pages.email_content", compact("data"))->render();
            $mail->isHTML(true);
            $mail->Subject = $data["nom"];
            $mail->Body    = $body;
            $mail->AddEmbeddedImage(public_path('images/Logo.png'), 'logo_cid');

            $mail->send();
            return back()->with("success", "Email envoyé avec succès");
        } catch (Exception $e) {
            return "Erreur : " . $e;
        }
    }
}
