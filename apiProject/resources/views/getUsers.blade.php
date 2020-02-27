<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum=scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

   <!--- loops through each user and makes a list
   of them that includes their first and last names
   addresses-->

    <?php  foreach($everyUser as $user) {

     print "<li>$user->first_name $user->last_name </li>";

    } ?>

</body>

</html>
