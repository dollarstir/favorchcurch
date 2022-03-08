<?php
include 'conn.php';

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_GET['action'])) {
        if($_GET['action'] == "contact_us") {
            foreach ($_POST as $key => $value) {
                if(empty($value)) {
                    exit(
                        json_encode([
                            "status" => "MISSING_PARAMETER",
                            "message" => "Required field was omitted ($key)"
                        ])
                    );
                }
            }

            extract($_POST);

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                exit(
                    json_encode([
                        "status" => "INVALID_EMAIL",
                        "message" => "The email submitted is invalid"
                    ])
                );
            }

            $sql = mysqli_query($conn, "INSERT INTO messages (fullname, email, subject, message) VALUES ('$fullname', '$email', '$subject', '$message')");
            if($sql) {
                exit(
                    json_encode([
                        "status" => "OK",
                        "message" => "Message submitted succesfully"
                    ])
                );
            }

            exit(
                json_encode([
                    "status" => "ERROR",
                    "message" => "Could not insert values into the database."
                ])
            );
        }

        if($_GET['action'] == "social_update") {
            $_POST = json_decode(file_get_contents("php://input"), true);
            extract($_POST);

            if(empty($link)) {
                exit(
                    json_encode([
                        "status" => "MISSING_PARAMETER",
                        "message" => "Social media link can not be empty"
                    ])
                );
            }

            $sql = mysqli_query($conn, "UPDATE social_accounts SET link = '$link' WHERE title = '$title'");
            if($sql) {
                exit(
                    json_encode([
                        "status" => "OK",
                        "message" => "Account link updated successfully!"
                    ])
                );
            }

            exit(
                json_encode([
                    "status" => "ERROR",
                    "message" => "Could not update account link"
                ])
            );
        }
    }

    exit(
        json_encode([
            "status" => "INVALID_REQUEST",
            "message" => "Your requested url is incomplete or invalid."
        ])
    );
}