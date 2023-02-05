<?php
            require_once "connection.php";

            session_start();

            if(!isset($_SESSION['uname'])){
                header('location:index.php');
             }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">



<title>Resume</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<a href="logout.php">LOGOUT</a>

             <?php
                         $sql="SELECT`firstname`, `lastname`, `middlename`, `phone`, `email`, `gender`, `street`, `city`, `state`, `zip` FROM `personal` order by id desc limit 1";
                         $res = $con->query($sql);
                         $row = $res->fetch_assoc();
             ?>
             <?php
                     $sql2="SELECT`Date`, `Birth`, `Status`, `Citizenship`, `Religion`, `Height`, `Weight`, `About` FROM `personaldetail` order by id desc limit 1";
                     $res2 = $con->query($sql2);
                     $row2 = $res2->fetch_assoc();
             ?>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="resume-base bg-primary user-dashboard-info-box p-4">
                                <div class="profile">
                                    <div class="jobster-user-info">
                                        <div class="profile-avatar">
                                             <?php 
                                                $sql = "SELECT * FROM images ORDER BY id DESC limit 1";
                                                $res = mysqli_query($con,  $sql);

                                                if (mysqli_num_rows($res) > 0) {
                                                    while ($images = mysqli_fetch_assoc($res)) {  ?>
                                                    
                                                    <div class="alb">
                                                        <img style="width:120px; margin-left:68px;" src="uploads/<?=$images['image_url']?>">
                                                    </div>
                                                        
                                            <?php } }?>
                                        </div>
                                      
                                    </div>
                                </div>
                                
                                <div class="about-candidate border-top">
                                    <div class="candidate-info">
                                        <h6 class="text-white">Name:</h6>
                                        <p class="text-white"><?php echo $row['firstname']?> <?php echo $row['lastname']?> <?php echo $row['middlename']?></p>
                                    </div>
                                    <div class="candidate-info">
                                        <h6 class="text-white">Email:<br> <?php echo $row['email']?></h6>
                                        
                                    </div>
                                        <div class="candidate-info">
                                            <h6 class="text-white">Phone:</h6>
                                            <p class="text-white"><?php echo $row['phone']?></p>
                                        </div>
                                        <div class="candidate-info">
                                            <h6 class="text-white">Date Of Birth:</h6>
                                            <p class="text-white"><?php echo $row2['Date']?></p>
                                        </div>
                                        <div class="candidate-info">
                                            <h6 class="text-white">Birth Place:</h6>
                                            <p class="text-white"><?php echo $row2['Birth']?></p>
                                        </div>
                                        <div class="candidate-info">
                                            <h6 class="text-white">Status:</h6>
                                            <p class="text-white"><?php echo $row2['Status']?></p>
                                        </div>
                                        <div class="candidate-info">
                                            <h6 class="text-white">Citizenship:</h6>
                                            <p class="text-white"><?php echo $row2['Citizenship']?></p>
                                        </div>
                                        <div class="candidate-info">
                                            <h6 class="text-white">Religion:</h6>
                                            <p class="text-white"><?php echo $row2['Religion']?></p>
                                        </div>
                                        <div class="candidate-info">
                                            <h6 class="text-white">Height:</h6>
                                            <p class="text-white"><?php echo $row2['Height']?></p>
                                        </div>
                                        <div class="candidate-info">
                                            <h6 class="text-white">Weight:</h6>
                                            <p class="text-white"><?php echo $row2['Weight']?></p>
                                        </div>
                                        <div class="candidate-info">
                                            <h6 class="text-white">Address:</h6>
                                            <p class="text-white"><?php echo $row['street']?>,<?php echo $row['city']?> ,<?php echo $row['state']?>, <?php echo $row['zip']?></p>
                                        </div>
                                        <div class="candidate-info">
                                            <h6 class="text-white">Gender:</h6>
                                            <p class="text-white"><?php echo $row['gender']?></p>
                                        </div>
                                        <div class="candidate-info">
                                            <h6 class="text-white">About Me</h6> <br>
                                            <p class="text-white"><?php echo $row2['About']?></p>
                                        </div>
                                </div>
                                
                                <div class="mt-0">
                                    <h5 class="text-white">Professional Skill:</h5>
                                    <div class="progress bg-dark">
                                        <div class="progress-bar bg-white" role="progressbar" style="width:55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar-title text-white">Photoshop</div>
                                        <span class="progress-bar-number text-white">70%</span>
                                    </div>
                                </div>
                            <div class="progress bg-dark">
                                <div class="progress-bar bg-white" role="progressbar" style="width:80%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar-title text-white">JavaScript</div>
                                    <span class="progress-bar-number text-white">80%</span>
                                </div>
                            </div>
                            <div class="progress bg-dark">
                                <div class="progress-bar bg-white" role="progressbar" style="width:55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar-title text-white">HTML/CSS</div>
                                    <span class="progress-bar-number text-white">55%</span>
                                </div>
                            </div>
                            <div class="progress bg-dark mb-md-0">
                                <div class="progress-bar bg-white" role="progressbar" style="width:60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar-title text-white">PHP</div>
                                    <span class="progress-bar-number text-white">60%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-7">
                    <div class="resume-experience">
                        <div class="timeline-box">
                            <h5 class="resume-experience-title">Education:</h5>
                            <a href="educadd.php">+</a>
                            
                                <div class="jobster-candidate-timeline">
                                    <div class="jobster-timeline-item">
                                        <div class="jobster-timeline-cricle">
                                            <i class="far fa-circle"></i>
                                        </div>
                                        <?php
                                               $sql="SELECT`year`, `school` FROM `educ`";
                                               $res=$con->query($sql);
                                               while($row = mysqli_fetch_object($res)){
                                                
                                         ?>
                                         
                               <div class="jobster-timeline-info">
                                    <div class="dashboard-timeline-info">
                                                
                                        <h6 class="mb-20 y-120"><?php echo $row->year?></h6>
                                        <span>-<?php echo $row->school?></span>
                       
                                    </div>
                                </div>
                                
                                <?php }?>
                </div>
                    <div class="jobster-timeline-item mb-0">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                            <div class="dashboard-timeline-info">
                                <h6 class="mb-2">Secondary</h6>
                                <span>- </span>
                                <p></p>
                                
                        </div>
                        
                        </div>
                    </div>
                    <div class="jobster-timeline-item mb-0">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                            <div class="dashboard-timeline-info">
                                <h6 class="mb-2">Tertiary</h6>
                                <span>- </span>
                                <p></p>
                                
                        </div>
                        
                        </div>
                    </div>
                </div>
                        <?php
                               
                        ?>
                    </div>
                    <div class="timeline-box mt-4">
                    <h5 class="resume-experience-title" style="margin-left: 30px;">Work &amp; Experience:</h5>
                    <div class="jobster-candidate-timeline">
                    <div class="jobster-timeline-item">
                    <div class="jobster-timeline-cricle">
                    <i class="far fa-circle"></i>
                    </div>
                    <div class="jobster-timeline-info">
                    <div class="dashboard-timeline-info">
                    <span class="jobster-timeline-time"></span>
                    <h6 class="mb-2"></h6>
                    <span>- </span>
                    <p class="mt-2"></p>
                    </div>
                    </div>
                    </div>
                    <div class="jobster-timeline-item mb-0">
                    <div class="jobster-timeline-cricle">
                    <i class="far fa-circle"></i>
                    </div>
                    <div class="jobster-timeline-info">
                    <div class="dashboard-timeline-info">
                    <span class="jobster-timeline-time"></span>
                    <h6 class="mb-2"></h6>
                    <span>- </span>
                    <p class="mt-2"></p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                        <?php
                              
                        ?>
                    <div class="timeline-box mt-2">
                    <h5 class="resume-experience-title" style="margin-left:40px;">Character Reference:</h5>
                    <div class="jobster-candidate-timeline">
                    <div class="jobster-timeline-item">
                    <div class="jobster-timeline-cricle">
                    <i class="far fa-circle"></i>
                    </div>
                    <div class="jobster-timeline-info">
                    <div class="dashboard-timeline-info">
                    <span class="jobster-timeline-time"></span>
                    <h6 class="mb-2"></h6>
                    <span>- </span>
                    <p class="mt-2"></p>
                    </div>
                    </div>
                    </div>
                    <div class="jobster-timeline-item mb-0">
                    <div class="jobster-timeline-cricle">
                    <i class="far fa-circle"></i>
                    </div>
                    <div class="jobster-timeline-info">
                    <div class="dashboard-timeline-info">
                    <span class="jobster-timeline-time"></span>
                    <h6 class="mb-2"></h6>
                    <span>- </span>
                    <p class="mt-2"></p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
            </div>
<style type="text/css">
    /* My Resume */
    .profile {
        margin-bottom: 25px;
    }
    .profile .jobster-user-info {
        display: inline-block;
        width: 100%;
    }
    .profile .jobster-user-info .profile-avatar {
        position: relative;
        height: 115px;
        width: 115px;
        border-radius: 100%;
        display: inline-block;
    }
    .profile .jobster-user-info .profile-avatar img {
        border-radius: 100%;
    }
    .profile .jobster-user-info .profile-avatar i {
    font-size: 16px;
    color: #21c87a;
    position: absolute;
    background: #ffffff;
            border-radius: 100%;
            cursor: pointer;
            height: 30px;
            width: 30px;
            line-height: 30px;
            text-align: center;
            bottom: 20px;
            right: -5px;
        }

        .about-candidate {
            padding: 25px 0px;
        }
        .about-candidate .candidate-info {
            margin-bottom: 20px;
        }

        .resume-experience {
            padding-left: 10px;
            padding-top: 60px;
            padding-bottom: 60px;
            position: relative;
            padding-right: 50px;
            background: #f6f6f6;
        }
        .resume-experience:before {
            position: absolute;
            left: -40%;
            right: 0;
            width: 100%;
            height: 100%;
            background: #f6f6f6;
            content: "";
            z-index: -1;
            top: 0;
        }
        .resume-experience .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-cricle {
            border-color: #f6f6f6;
        }

        .user-dashboard-info-box .select2-container--default .select2-selection--single .select2-selection__rendered {
            font-weight: bold;
            color: #626262;
        }

        @media (max-width: 1199px) {
            .secondary-menu ul li a {
                padding: 10px 15px;
            }
        }

        @media (max-width: 991px) {
            .resume-experience {
                padding-left: 15px;
                padding-top: 30px;
                padding-bottom: 30px;
                padding-right: 15px;
            }
            .resume-experience:before {
                content: none;
            }
            .secondary-menu ul li {
                display: inline-block;
            }
        }

        @media (max-width: 575px) {
            .secondary-menu ul li a {
                padding: 4px 8px;
            }
        }

        /*****************************
            Progress Bar
        *****************************/
        .progress {
            position: relative;
            overflow: inherit;
            height: 3px;
            margin: 40px 0px 15px;
            width: 100%;
            display: inline-block;
        }
        .progress .progress-bar {
            height: 3px;
            background: #21c87a;
        }
        .progress .progress-bar-title {
            position: absolute;
            left: 0;
            top: -20px;
            color: #212529;
            font-size: 14px;
            font-weight: 600;
        }
        .progress .progress-bar-number {
            position: absolute;
            right: 0;
            color: #646f79;
            top: -20px;
        }


        /* Jobster Candidate */
        .jobster-candidate-timeline {
            position: relative;
        }
        .jobster-candidate-timeline:before {
            content: "";
            position: absolute;
            left: 20px;
            width: 2px;
            top: 5px;
            bottom: 5px;
            height: calc(100% - 5px);
            background-color: #eeeeee;
        }

        .jobster-candidate-timeline .jobster-timeline-item {
            display: table;
            position: relative;
            margin-bottom: 20px;
            width: 100%;
        }

        .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-cricle {
            border-radius: 50%;
            border: 12px solid white;
            z-index: 1;
            top: 5px;
            left: 9px;
            position: absolute;
        }
        .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-cricle:before {
            content: "";
            position: absolute;
            left: 12px;
            width: 20px;
            top: -1px;
            bottom: 5px;
            height: 2px;
            background-color: #eeeeee;
        }
        .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-cricle > i {
            font-size: 15px;
            top: -8px;
            left: -7px;
            position: absolute;
            color: #21c87a;
        }

        .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-info {
            display: table-cell;
            vertical-align: top;
            padding: 5px 0 0 70px;
        }
        .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-info h6 {
            color: #21c87a;
            margin: 5px 0 0px;
        }
        .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-info span {
            color: #212529;
            font-size: 13px;
            font-weight: 500;
        }

        .jobster-candidate-timeline span.jobster-timeline-time {
            color: #646f79 !important;
        }

        .jobster-candidate-timeline .jobster-timeline-icon {
            border: 2px solid #eeeeee;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            line-height: 42px;
            text-align: center;
            background: #ffffff;
            position: relative;
            margin-bottom: 20px;
        }
        .jobster-candidate-timeline .jobster-timeline-icon i {
            font-size: 16px;
            color: #212529;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 16px;
        }

</style>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">

</script>
</body>
</html>