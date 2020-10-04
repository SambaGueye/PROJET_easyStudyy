<?php
               $destinataire = 'sophiabefun@gmail.com';
               $envoyeur ='nachinsophia@gmail.com';
                    $sujet = 'Email de test';
                    $message = "Bonjour !\r\nCeci est un email de test.\r\n";
                    $headers = 'From: '.$envoyeur . "\r\n" .
                         'Reply-To: '.$envoyeur. "\r\n" .
                         'X-Mailer: PHP/' . phpversion();
                    $envoye = mail($destinataire, $sujet, $message, $headers);
               if ($envoye)
                         echo "<br />Email envoyé.";
               else
                    echo "<br />Email refusé.";
?> 