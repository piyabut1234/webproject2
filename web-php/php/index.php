<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบสมัครสมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   


    <div class="container">
        <div class="form-box">
            <div class="sign-in-container">
                <h4>ระบบสมัครสมาชิก :</h4>
                <form action="" method="post">
                    <div class="mb-2">
                        <input type="text" name="name" class="form-control" required minlength="3" placeholder="ชื่อ">
                    </div>
                    <div class="mb-2">
                        <input type="text" name="surname" class="form-control" required minlength="3" placeholder="นามสกุล">
                    </div>
                    <div class="mb-2">
                        <input type="text" name="username" class="form-control" required minlength="3" placeholder="username">
                    </div>
                    <div class="mb-2">
                        <input type="password" name="password" class="form-control" required minlength="3" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        สมัครสมาชิก
                    </button>
                </form>
                <hr>
                <p>สมัครเป็นสมาชิกอยู่หรือไม่ คลิกเพื่อเข้าสู่ระบบ</p>
            </div>
            <div class="sign-up-container">
                <h2>สวัสดีเพื่อนๆ!</h2>
                <p>ยินดีต้อนรับสู่แผนกเทคโนโลยีสารสนเทศ</p>
                <img src="./img/ดีไซน์ที่ยังไม่ได้ตั้งชื่อ.png" alt="ดีไซน์ที่ยังไม่ได้ตั้งชื่อ" class="rounded-image">
            </div>
        </div>
    </div>
   


</body>
</html>


<?php
if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['username']) && isset($_POST['password'])) {
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';




    require_once 'connect.php';




    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = sha1($_POST['password']);




    $stmt = $conn -> prepare("SELECT id FROM regis_tb WHERE username = :username");
    $stmt->execute(array(':username' => $username));




    if ($stmt->rowCount() > 0) {
        echo '<script>
                setTimeout(function(){
                    swal({
                        title: "Username ซ้ำ !!",
                        text: "กรุณาสมัครใหม่อีกครั้ง",
                        type: "warning"
                    }, function(){
                        window.location = "index.php";
                    });
                }, 1000);
              </script>';
    } else {
        $stmt = $conn->prepare("INSERT INTO regis_tb (name, surname, username, password) VALUES (:name, :surname, :username, :password)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $result = $stmt->execute();




        if ($result) {
            echo '<script>
                    setTimeout(function() {
                        swal({
                            title: "สมัครสมาชิกสำเร็จ",
                            text: "กรุณารอระบบ Login",
                            type: "success"
                        }, function() {
                            window.location = "index1.html";
                        });
                    }, 1000);
                  </script>';
        } else {
            echo '<script>
                    setTimeout(function() {
                        swal({
                            title: "เกิดข้อผิดพลาด",
                            text: "ไม่สามารถสมัครสมาชิกได้",
                            type: "error"
                        }, function() {
                            window.location = "index.php";
                        });
                    }, 1000);
                  </script>';
        }
    }
}
?>
