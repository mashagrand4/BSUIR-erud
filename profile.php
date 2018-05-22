<?php
require_once('db/config.php');
$dbh = new DB_Connection();


$id = $_COOKIE['u_id'];
if (!$id) {
    header('Location: /');
}
$data = $dbh->execQuery("SELECT * FROM users where id = $id");
$user = $data->fetchAll(PDO::FETCH_ASSOC);

$user = reset($user);

$isAdmin = $user['is_admin'];
$user_pass = $user['password'];
$user_email = $user['email'];
$user_name = $user['name'];
$user_info = $user['information'];
$isTeacher = $user['is_teacher'];
$isAutomat = $user['automat'];


if (isset($_POST['c-pass']) && isset($_POST['n-pass'])) {
    $prev = $_POST['c-pass'];
    $new = $_POST['n-pass'];
    $sql = "UPDATE users SET password = '$new'
            WHERE id = $id and password = '$prev'";
    $data = $dbh->execQuery($sql);


    $query = "SELECT * FROM users where id = $id";
    $data = $dbh->execQuery($query);
    $user = $data->fetchAll(PDO::FETCH_ASSOC);
    $user_pass = reset($user);
    $user_pass = $user_pass['password'];
    if ($user_pass == $new) {
        ?>
        <script>
            setTimeout(
                function () {
                    alert('Пароль изменен');
                }, 500);
            setTimeout(
                function () {
                    window.location = "/profile.php"
                }, 550);
        </script>
        <?php
    } else {
        ?>
        <script>
            setTimeout(
                function () {
                    alert('Текущий пароль введен неверно')
                }, 500);
            setTimeout(
                function () {
                    window.location = "/profile.php"
                }, 550);
        </script>
        <?php
    }
    ?>

    <?php
}

if ($isAdmin) {
    if (isset($_GET['setadmin']) && $actionUserId = $_GET['id']) {
        $data = $dbh->execQuery("UPDATE `users` SET `is_admin`='" . $_GET['setadmin'] . "' WHERE `id`= $actionUserId");
        header('Location: /profile.php');
        exit;
    }
    if (isset($_GET['setteacher']) && $actionUserId = $_GET['id']) {
        $data = $dbh->execQuery("UPDATE `users` SET `is_teacher`='" . $_GET['setteacher'] . "' WHERE `id`= $actionUserId");
        header('Location: /profile.php');
        exit;
    }
}?>
<!-- (C) 2016 Mashinskaya Mariya, BSUIR -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//RU">
<HTML>
<HEAD>
    <LINK rel=stylesheet href="/wrap/css/style.css" type=text/css>
    <LINK rel=stylesheet href="/auth/styles.css" type=text/css>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf8">
    <META HTTP-EQUIV="Content-Language" CONTENT="ru">
    <title>ЭУМК по дисциплине "Визуальные средства разработки программных приложений"</title>
    <base target="_top">
</HEAD>

<BODY>
    <header class="header_style">
        <a href="/"><img id="logo" src="wrap/images/logo.png"></a>
        <nav class="nav">
            <ul>
                <li><a href="index.php">Оглавление</a></li>
                <li><a href="/program/program.php">Программа</a></li>
                <li><a href="theory/theory.php">Теория</a></li>
                <li><a href="/practice/practice.php">Практика</a></li>
                <li><a href="/author/author.php">Об авторах</a></li>
                <li><a href="/kwoladge/test.php">Контроль знаний</a></li>
                <?php if (isset($_COOKIE['authorized']) && $_COOKIE['authorized'] == 1): ?>
                    <li class="current"><a target="_self" href="/profile.php">Профиль</a></li>
                    <li><a target="_self" href="/?logout=1">Выйти</a></li>
                <?php else: ?>
                    <li><a target="_self" href="/auth/login.php">Войти</a></li>
                    <li><a target="_self" href="/auth/register.php">Зарегистрироваться</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <div class="div_main">
        <div class="user-information">
            <table>
                <tr>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Информация</th>
                </tr>
                <tr>
                    <td><?php echo $user_name; ?></td>
                    <td><?php echo $user_email; ?></td>
                    <td><?php echo $user_info; ?></td>
                </tr>
                </table>
        </div>
        <?php if (!$isAdmin && !$isTeacher){
            $strAutomat=$isAutomat;
            if($isAutomat=="Да"){
                $style="green";
            }else{
                $style="red";
            }
            ?>
            <div>
                <h1>Автомат:</h1>
                <span style="color: <?= $style;?>"><?= $strAutomat; ?></span>
            </div>

        <?php
            echo "";
        }
            ?>

        <?php if ($isAdmin): ?>
            <div class="users-list">
                <h2>Таблица Всех Пользователей</h2>
                <table>
                    <tr>
                        <td>Имя пользователя</td>
                        <td>Емеил пользователя</td>
                        <td>Назначение админом</td>
                        <td>Назначение преподавателем</td>
                    </tr>
                    <?php
                    $allUsers = $dbh->execQuery("SELECT * FROM users where id != $id")->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($allUsers as $a_user):
                        ?>
                        <tr>
                            <td><?php echo $a_user['name'] ?></td>
                            <td><?php echo $a_user['email'] ?></td>
                            <td>
                                <?php if ($a_user['is_admin']): ?>
                                    <span>Да</span><br>
                                    <a href="/profile.php?setadmin=0&id=<?php echo $a_user['id']; ?>"><span
                                                style="color: red">X</span></a>
                                <?php else: ?>
                                    <span>Нет</span><br>
                                    <a href="/profile.php?setadmin=1&id=<?php echo $a_user['id']; ?>"><span>Назначить</span></a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($a_user['is_teacher']): ?>
                                    <span>Да</span><br>
                                    <a href="/profile.php?setteacher=0&id=<?php echo $a_user['id']; ?>"><span
                                                style="color: red">X</span></a>
                                <?php else: ?>
                                    <span>Нет</span><br>
                                    <a href="/profile.php?setteacher=1&id=<?php echo $a_user['id']; ?>"><span>Назначить</span></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <br><br>
        </div>
    <?php endif; ?>

    <?php if ($isAdmin || $isTeacher): ?>
        <div class="student-information">
            <h3>Пройденные студентами тесты</h3>
            <?php
            $arrUsers = $dbh->execQuery("SELECT DISTINCT u.name,u.id,u.automat FROM users AS u 
                                                      INNER JOIN tests_results AS tr ON tr.uid=u.id
                                                     WHERE is_admin='0' 
                                                     AND is_teacher='0'");
            $arrUsers = $arrUsers->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table>
                <tr>
                    <th>Студент</th>
                    <th></th>
                </tr>


                <?php foreach ($arrUsers as $user): ?>

                    <?php

                    $strAutomat=$user["automat"];
                    if($user["automat"]=="Да"){
                        $style="green";
                    }else{
                        $style="red";
                    }
                    $arrTests = array();
                    $arrMarks = array();
                    $arrResults = $dbh->execQuery("SELECT id,results,mark FROM tests_results WHERE uid='" . $user["id"] . "'");
                    $arrResults = $arrResults->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($arrResults as $resultItem) {
                        $arrTests[$resultItem['id']] = $resultItem['results'];
                        $arrMarks[$resultItem['id']] = $resultItem['mark'];
                    }
                    ?>

                    <tr>
                        <td style="width: 10%;"><?php echo $user["name"]; ?><br>

                            (<h5 style="display: inline;">Автомат:</h5> <span style="font-size: 20px;color: <?= $style;?>"><?= $strAutomat; ?></span>)
                        </td>
                        <td>
                            <table style="width: 100%; margin-bottom: 35px">
                                <tr>
                                    <th>Результат</th>
                                    <th>Зачет/Не зачёт</th>
                                </tr>

                                <?php
                                foreach ($arrTests as $key=> $test){
                                ?>
                                <tr style="height: 100px;">
                                    <td>
                                        <?php
                                        $results = unserialize($test);
                                        foreach ($results

                                        as $n => $r){
                                        if ($n == 0) continue;
                                        ?>
                                        <span style='display: inline-block; text-align: center;margin-right:10px'>
                                <?php
                                echo $n;
                                echo "<br/>";
                                echo ($r == '+') ? "+" : "-";
                                echo "</span>";
                                }

                                ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $arrMarks[$key];

                                        ?>
                                    </td>
                                </tr>
                                        <?php
                                        }
                            ?>

                            </table>

                        </td>

                    </tr>


                <?php endforeach; ?>
            </table>
        </div>

        <canvas class="chart" id="myChart1"></canvas>
        <canvas class="chart" id="myChart2"></canvas>
    <?php else: ?>
        <div class="tests-info">
            <h3>Пройденные вами тесты</h3>
            <?php
            $tests_result_sql = $dbh->execQuery("SELECT * FROM tests_results where uid = $id");
            $tests_result = $tests_result_sql->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <?php
            if (!$isTeacher) {
                if (count($tests_result) < 1) echo "<span>Вы еще не проходили тесты!</span>";

                foreach ($tests_result as $t): ?>
                    <table>
                        <tr>
                            <td>Дата:<?php echo $t['datetime']; ?></td>
                            <td>Тест №<?php echo $t['testid'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: left">
                                <?php
                                $results = unserialize($t['results']);
                                $i = 1;
                                foreach ($results

                                as $n => $r){
                                if ($n == 0) continue;
                                ?>
                                <span style='<?php if ($i % 2 == 0) echo "background: white;" ?>  border: 1px solid #444444; display: inline-block; padding: 2px; text-align: center'>
                                <?php
                                echo $n;
                                echo "<br/>";
                                echo ($r == '+') ? "+" : "-";
                                echo "</span>";
                                $i++;
                                }
                                ?>
                            </td>
                        </tr>
                    </table>

                <?php endforeach;
            }
            ?>
        </div>
    <?php endif; ?>
        <div class="change-password">
            <form class="password_form" action="#" method="post" name="change-password">
                <ul>
                    <li>
                        <h2>Изменить пароль</h2>
                        <span class="required_notification">* Обязвтельные для заполнения поля</span>
                    </li>
                    <li>
                        <label for="pass">Текущий пароль*:</label>
                        <input type="password" name="c-pass" placeholder="" required/>
                    </li>
                    <li>
                        <label for="pass">Новый пароль*:</label>
                        <input type="password" name="n-pass" required pattern="{3,16}"/>
                        <span class="form_hint">Пароль не должен быть меньше 4-ёх символов</span>
                    </li>
                    <li>
                        <button class="submit" type="submit">Изменить</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <script>
        window.onload = function() {
            const ctx1 = document.getElementById('myChart1').getContext('2d');
            const ctx2 = document.getElementById('myChart2').getContext('2d');
            const myChart1 = new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: ['1w', '2w', '3w', '4w', '5w', '6w', '7w', '8w','9w', '10w', '11w', '12w'],
                    datasets: [{
                        label: 'Петр Петров',
                        data: [4, 5, 5, 4, 4, 4, 1, 0, 4, 4, 4, 4, 4, 5],
                        borderColor: "#ff6384",
                        backgroundColor: "transparent"
                    }, {
                        label: 'Иван Иванов',
                        data: [2, 2, 4, 4, 1, 4, 0, 0, 4, 5, 4, 4, 4, 0],
                        borderColor: "#36a2eb",
                        backgroundColor: "transparent"
                    }, {
                        label: 'Вася Петров',
                        data: [8, 8, 8, 8, 9, 7, 8, 9, 9, 8, 7, 9, 9, 7],
                        borderColor: "#ffcd56",
                        backgroundColor: "transparent"
                    },
                    {
                        label: 'Сергей Сергеев',
                        data: [9, 10, 8, 7, 10, 9, 7, 10, 9, 9, 8, 7, 9, 9, 10],
                        borderColor: "#4bc0c0",
                        backgroundColor: "transparent"
                    },
                    {
                        label: 'Коля Петров',
                        data: [7, 8, 8, 7, 9, 7, 10, 9, 9, 8, 7, 9, 9, 10],
                        borderColor: "#9966ff",
                        backgroundColor: "transparent"
                    }]
                }
            });
            const myChart2 = new Chart(ctx2, {
                type: 'polarArea',
                data: {
                    datasets: [{
                        data: [
                            11,
                            16,
                            7,
                            3,
                            14
                        ],
                        backgroundColor: [
                            "rgba(255, 177, 193, 0.7)",
                            "rgba(255, 207, 159, 0.7)",
                            "rgba(68, 149, 204, 0.7)",
                            "rgba(255, 230, 170, 0.7)",
                            "rgba(255, 102, 255, 0.7)"
                        ]
                    }],
                    labels: [
                        "Red",
                        "Green",
                        "Yellow",
                        "Grey",
                        "Blue"
                    ]
                }
            });
        };

    </script>
</BODY>
</HTML>
