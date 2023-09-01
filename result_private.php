<?php
require('connection.php');
if(isset($_GET['stat']) && $_GET['stat'] != ''){
    $stat=$_GET['stat'];
    $id=$_GET['id'];
    mysqli_query($con,"UPDATE `covid` SET `status`='$stat' WHERE `id`='$id'");
}
if(isset($_GET['vstat']) && $_GET['vstat'] != ''){
    $vstat=$_GET['vstat'];
    $id=$_GET['id'];
    mysqli_query($con,"UPDATE `covid` SET `verify_status`='$vstat' WHERE `id`='$id'");
}
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">

<head>
    <script src="https://kit.fontawesome.com/1c2c2462bf.js" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- SEO Meta Tags -->
    <meta name="description" content="Get unlimited google drive storage at just 600 rupees for lifetime." />
    <meta name="author" content="Deshbakth.tech" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="DeshBhakth.tech" />
    <!-- website name -->
    <meta property="og:site" content="DeshBhakth.tech" />
    <!-- website link -->
    <meta property="og:title" content="DeshBhakth.tech" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Get unlimited google drive storage at just 600 rupees for lifetime." />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="media/logo.png" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="https://deskbakth.tech" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>DeshBhakth.tech</title>
    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="favicons/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicons\favicon-16x16.png" />
    <link rel="manifest" href="favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#000000" />
    <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#000000" />
    <link rel="icon" href="media/logo.png" />
    <link rel="stylesheet" href="result/result.css" />
</head>

<body>
    <div id="demo">
        <h1>#ASKSTM LIST</h1>
        <?php
        $res2=mysqli_query($con,"select * from `covid` where `status`='0' ORDER BY `covid`.`id` DESC");
        $count_pending = mysqli_num_rows($res2);
        $res3=mysqli_query($con,"select * from `covid` where `status`='1' ORDER BY `covid`.`id` DESC");
        $count_done = mysqli_num_rows($res3);
        $total_count = $count_pending + $count_done ;
        ?>


        <!-- Responsive table starts here -->
        <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
        <div class="table-responsive-vertical shadow-z-1">
            <!-- Table starts here -->
            <p>Pending : <?php echo $count_pending ?> </p>
            <p>Completed : <?php echo $count_done ?> </p>
            <p>Total : <?php echo $total_count ?> </p>
            <table id="table" class="table table-hover table-mc-light-blue">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>number</th>
                        <th>requirement</th>
                        <th>date</th>
                        <th>Status</th>
                        <th>Verification</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $res=mysqli_query($con,"select * from `covid` where `status`='0' ORDER BY `covid`.`id` DESC");
                    while($row=mysqli_fetch_assoc($res)){

            ?>
                    <tr>
                        <td data-title="ID"><?php echo $row['id']?></td>
                        <td data-title="Name"><?php echo $row['name']?></td>
                        <td data-title="number"><?php echo $row['mobile']?></td>
                        <td data-title="requirement"><?php echo $row['msg']?></td>
                        <td data-title="date"><?php echo $row['added_on']?></td>
                        <?php 
                        if($row['status']==0){
                            ?>
                        <td style="background-color: red" data-title="Status"><a
                                style="color:white; text-decoration:none;"
                                href="?stat=1&id=<?php echo $row['id'] ?>">pending</a></td>
                        <?php
                        }elseif($row['status']==3){
                            ?>
                        <td style="background-color: orange" data-title="Status"><a
                                style="color:white; text-decoration:none;" href="?stat=1&id=<?php echo $row['id'] ?>">No
                                Response</a></td>
                        <?php

                        } else {
                        ?>
                        <td style="background-color: green" data-title="Status"><a
                                style="color:white; text-decoration:none;"
                                href="?stat=0&id=<?php echo $row['id'] ?>">Completed</a></td>
                        <?php
                        }
                        ?>
                        <!-- verification -->
                        <?php 
                        if($row['verify_status']==0){
                            ?>
                        <td style="background-color: red" data-title="Verification"><a
                                style="color:white; text-decoration:none;"
                                href="?vstat=1&id=<?php echo $row['id'] ?>">pending</a></td>
                        <?php
                        }elseif($row['verify_status']==3){
                            ?>
                        <td style="background-color: orange" data-title="Verification"><a
                                style="color:white; text-decoration:none;"
                                href="?vstat=1&id=<?php echo $row['id'] ?>">No
                                Response</a></td>
                        <?php

                        } else {
                        ?>
                        <td style="background-color: green" data-title="Verification"><a
                                style="color:white; text-decoration:none;"
                                href="?vstat=0&id=<?php echo $row['id'] ?>">Verified</a></td>
                        <?php
                        }
                        ?>


                    </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>

        <!-- Table Constructor change table classes, you don't need it in your project -->


    </div>
    <script src="result/result.js"></script>
    <script src="./removeBanner.js"></script>
</body>

</html>