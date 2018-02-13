<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "include/head.php"?>
    <link rel="stylesheet" type="text/css" href="css/123123.css">
</head>

<body>
<div class="header">
    <div class="logo">
        <a href="about.html"><img src="image/flag.png" ></a>
    </div>
    <div class="nav">
        <ul>
            <li><a href="http://google.com">���������</a></li>
            <li><a href="http://google.com">�� ��������</a></li>
        </ul>
    </div>
    <div class="search">
        <form>
            <p><input type="search" name="" placeholder="����� �� �����">
                <input type="image" src="image/search_button.png" width="30px" height="30px"  value="�����"></p>
        </form>
    </div>

</div>
<div class="cont">
    <div class="posts">
        <div class="post">
            <?php
            $post = [
                'username' = ["���"],
                'created_at',
                'pic' = ["url (image/flag.png")],



            ];
            ?>

            <div class="ava">
                <img src="image/cat.jpg" alt="">
                <br><?= echo $post['username'];
                var_dump($post);?> </br>
                3 ��� �����
            </div>
            <div class="pic">
                <img src="image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="image/like.png" alt="">
            </div>
            <div class="htag">
                <p>text text text</p>
            </div>
        </div>

        <div class="post">
            <div class="ava">
                <img src="image/cat.jpg" alt="">
                <br>@nickname <br>3 ��� ����� </br></h5>
            </div>
            <div class="pic">
                <img src="image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>

        <div class="post">
            <div class="ava">
                <img src="image/cat.jpg" alt="">
                <br>@nickname <br>3 ��� ����� </br></h5>
            </div>
            <div class="pic">
                <img src="image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>
        <div class="post">
            <div class="ava">
                <img src="image/cat.jpg" alt="">
                <br>@nickname <br>3 ��� ����� </br></h5>
            </div>
            <div class="pic">
                <img src="image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>
        <div class="post">
            <div class="ava">
                <img src="image/cat.jpg" alt="">
                <br>@nickname </br>3 ��� ����� </br></h5>
            </div>
            <div class="pic">
                <img src="image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>
        <div class="post">
            <div class="ava">
                <img src="image/cat.jpg" alt="">
                <br>@nickname <br>3 ��� ����� </br></h5>
            </div>
            <div class="pic">
                <img src="image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>
        <div class="post">
            <div class="ava">
                <img src="image/cat.jpg" alt="">
                <br>@nickname <br>3 ��� ����� </br></h5>
            </div>
            <div class="pic">
                <img src="image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>
        <div class="post">
            <div class="ava">
                <img src="image/cat.jpg" alt="">
                <br>@nickname <br>3 ��� ����� </br></h5>
            </div>
            <div class="pic">
                <img src="image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>
    </div>
   ?>
</div>
</body>
<footer>
    <div class="bttm">
        <div class="by">
            <h5>Developer</h5>
        </div>
        <div class="about">
            <ul>
                <li><a href="about.html">� �������</a></li>
                <li><a href="http://google.com">������</a> </li>
                <li><a href="http://google.com">���������� ������</a></li>
            </ul>
        </div>
        <div class="subscribe">
            <form>
                <p><input type="text" name="" placeholder="�����������">
                    <input type="submit" value="�����������"></p>
            </form>
        </div>
    </div>
</footer>
</html>