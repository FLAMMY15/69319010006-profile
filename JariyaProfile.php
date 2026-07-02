<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jariya Profile</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background: #f4f4f4;
        }

        .container{
            max-width: 900px;
            margin: 50px auto;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .header{
            background: #007bff;
            color: white;
            text-align: center;
            padding: 40px;
        }

        .profile-img{
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            margin-top: 20px;
        }

        .content{
            padding: 30px;
        }

        .section{
            margin-bottom: 25px;
        }

        .section h2{
            color: #007bff;
            margin-bottom: 10px;
        }

        ul{
            margin-left: 20px;
        }

        .footer{
            text-align: center;
            background: #f8f9fa;
            padding: 15px;
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="header">
        <h1>จริยา (Jariya)</h1>
        <p>Web Developer & Student</p>

        <!-- เปลี่ยนเป็นรูปของตัวเอง -->
        <img src="https://via.placeholder.com/180" alt="Profile" class="profile-img">
    </div>

    <div class="content">

        <div class="section">
            <h2>เกี่ยวกับฉัน</h2>
            <p>
                สวัสดีครับ ผมชื่อจริยา สนใจด้านการพัฒนาเว็บไซต์
                การเขียนโปรแกรม และการจัดการฐานข้อมูล
                มีความสนใจในการพัฒนา Web Application ด้วย PHP,
                MySQL และ JavaScript
            </p>
        </div>

        <div class="section">
            <h2>ทักษะ (Skills)</h2>
            <ul>
                <li>HTML5 / CSS3</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>MariaDB / MySQL</li>
                <li>Git & GitHub</li>
            </ul>
        </div>

        <div class="section">
            <h2>การศึกษา</h2>
            <p>วิทยาลัยเทคนิคชลบุรี</p>
        </div>

        <div class="section">
            <h2>ช่องทางติดต่อ</h2>
            <p>Email: example@email.com</p>
            <p>GitHub: github.com/Jariya005</p>
        </div>

    </div>

    <div class="footer">
        © <?php echo date("Y"); ?> Jariya Profile
    </div>

</div>

</body>
</html>
