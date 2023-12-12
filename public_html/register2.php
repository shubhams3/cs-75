<html>
    <head>
        <title>Frosh IMs</title>
    </head>
    <body>
        <? if (empty($_POST['name']) || empty($_POST['gender']) ||empty($_POST['Dorm']): ?>You must provide your name, gender and dorm! Go <a href="froshims2.html">back</a>
        <? else: ?>
        You are registered
        <? endif ?>
    </body>
</html>
