<?php
if (empty($_POST["email"])) {
    header("Location: ./index.php?content=message&alert=no-email");
} else {
    include "./connect_db.php";
    include "./functions.php";

    $email = sanitize($_POST["email"]);

    $sql = "SELECT * FROM `register` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)) {
        header("Location: ./index.php?content=message&alert=emailexists");
    } else {
        $array = mk_password_hash_from_microtime();

        $sql = "INSERT INTO `register` (`id`,
                                            `email`,
                                            `password`,
                                            `userrole`,
                                            `activated` )
                        VALUES              (NULL,
                                            '$email',
                                            '{$array["password_hash"]}',
                                            'customer',
                                            0)";
        if (mysqli_query($conn, $sql)) {
            $id = mysqli_insert_id($conn);
            $to = $email;
            $subject = "Activatielink voor uw account van www.inlogsysteem.nl";

            include "./alt-email.php";

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: admin@inlog.org\r\n";
            $headers .= "Cc: falcowollaars@outlook.com\r\n";
            $headers .= "Bcc: splayeshagar@gmail.com";

            mail($to, $subject, $message, $headers);
            echo $message;
            header("Refresh:8; url=./index.php?content=message&alert=register-success");
        } else {
            header("Location: ./index.php?content=message&alert=register-error");
    
        }
    }
} ?> 
