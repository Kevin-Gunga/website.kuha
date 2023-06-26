<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Orbitron:wght@800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/6f82847460.js" crossorigin="anonymous"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KISII UNIVERSITY HEART ASSOCIATION</title>
<style>
    [class*="col"] {
        padding: 1rem;
        border: 2px solid #fff;
        width: 100%;
    }
</style>

<body>
    <header>
        
           
        
        <nav class="navbar  navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
            <nav>
                <div id="web">KISII UNIVERSITY HEART ASSOCIATION (KUHA)</div>
            </nav>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="">
                            <a href="#website">Home</a>
                        </li>
                        <li class="">
                            <a href="#About-KUHA">About</a>
                        </li>
                        <li class="">
                            <a href="#footer">Contact</a>
                        </li>
                        <li class="">
                            <a href="#Activities">Activities</a>
                        </li>
                        <li class="">
                            <a href="https://flickr.com/photos/198508982@N04/" target="_blank">Photos and Videos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="website">
            <img src="header.jpg" alt="">
        </div>
    </header>

    <div class="main-page">
        <div id="logo">
            <img src="logo.png" alt="">
            <div class="hr1">
                <hr>
            </div>
        </div>

        <div id="constitution">
            <button id="button">
                <a href="main.pdf">   
                    <p>DOWNLOAD CONSTITUTION</p> 
                 </a>
            </button>
        </div>
        <div class="schedule_about">
            <div id="meeting-schedule">
                <h1>MEETING SCHEDULE</h1>
                <ul>
                    <li>Time:2.00pm</li>
                    <li>Room:TC 12</li>
                    <li>Location:Main Campus</li>
                    <li>Day:Sunday</li>
                </ul>
            </div>
        </div>
        <div class="container my-5">
            <div id="About-KUHA">
                <h1><u>ABOUT KUHA</u></h1>
                <p>VISION; to be a compassionate affiliation for the betterment of an individual and the society.</p>
                <p>MISSION; to empower the community and serve one another. </p>
            </div>
        </div>

        <div class="container">
            <div id="Membership">
                <h1><u>MEMBERSHIP</u></h1>
                <ol>
                    <li>All university students are legible to join the association upon payment of registration fee of ksh 100/= and a renewal fee of ksh 70/= per semester.</li>
                    <li>Association's members who have graduated will still be considered members upon payment of ksh 200 as renewal fee per semester.</li>
                </ol>
                <div id="donate">
                    <a href="/register.html"> <input id="register" type="button" name="Donate" value="Register"></a>
                    <a href="/donate.html"> <input id="register" type="button" name="Donate" value="Donate"></a>
                </div>
            </div>
        </div>

        <div class="container-md-5 my-5 mx-1">
            <div id="card-body">
                <h1 class="text-center"><u>EXECUTIVES</u></h1>
                <div class="box exe">
                    <div class="patron">
                        <div class="card-title">MR.AGGREY <br> PATRON</div>
                        <img src="patron.jpg" class="card-img-top" alt="">
                    </div>

                    <div class="chairman">
                        <div class="card-title">BENJAMIN MKAPA <br>CHAIRMAN</div>
                        <img src="chairman.jpg" class="card-img-top" alt="">

                    </div>

                    <div class="vicechair">
                        <div class="card-title">MICHAEL OUMA <br> VICE CHAIRMAN</div>
                        <img src="vicechair.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="secgen">
                        <div class="card-title">MESHACK OKHIYA <br> SECRETARY GENERAL</div>
                        <img src="secgen.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="orgasec">
                        <div class="card-title">BRITON TIMBE <br> ORGANISING SECRETARY</div>
                        <img src="orgasec.jpg" class="card-img-top" alt="">
                    </div>
                    <br>
                    <div class="treasurer">
                        <div class="card-title">DORICUS MASINDE <br> TREASURER</div>
                        <img src="treasurer.jpg" class="card-img-top" alt="">
                    </div>

                    <div class="welfare">
                        <div class="card-title">VIVIAN KILIBWA <br> WELFARE</div>
                        <img src="welfare.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="legal">
                        <div class="card-title">SYLIVIAH MORAA <br> LEGAL ADVISOR</div>
                        <img src="legaladvisor.jpg" class="card-img-top" alt="">
                    </div>

                    <div class="publicity">
                        <div class="card-title">KEVIN GUNGA <br> PUBLICITY SECRETARY</div>
                        <img src="publicity.jpg" class="card-img-top" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="hr1">
            <hr>
        </div>
    </div>
    <div class="container-md-4 my-4">
        <div class="cohorts_activities_recent">
            <div id="cohorts">
                <h1>Edu service cohorts</h1>
                <ol>
                    <li>KUHA</li>
                    <li>Scouts</li>
                    <li>ST. John's Ambulance</li>
                    <li>Biodiversity</li>
                </ol>
            </div>
            <div id="Activities">
                <h1>ACTIVITIES</h1>
                <ul>
                    <li>Hike</li>
                    <li>University Day</li>
                    <li>Bonding Camp</li>
                    <li>Visiting orpanages</li>
                    <li>Visiting Hospitals</li>
                </ul>
            </div>

            <div id="Recent_news">
                <h1>RECENT NEWS</h1>
                <table>
                    <tr>
                        <th>Activity</th>
                        <th>Date</th>
                    </tr>
                    <tr>
                        <td>Hike</td>
                        <td>28/01/2023</td>
                    </tr>
                    <tr>
                        <td>AGM</td>
                        <td>4/02/2023</td>
                    </tr>
                    <tr>
                        <td>University Day</td>
                        <td>11/2/2023</td>
                    </tr>
                    <tr>
                        <td>Visiting Orphanage</td>
                        <td>25/02/2023</td>
                    </tr>
                    <tr>
                        <td>Bonding Camp</td>
                        <td>17/03/2023</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
    </div>

        <div id="footer">
            <div class="hr2">
                <hr>
            </div>
            <div class="contain common">
            <h1>Contact us:</h1>
                
                    
            <form action="" method="POST" class="form">
                <input type="text" name="fname" class="input" placeholder="Enter Your Full Name"><br><br><br><br>

                <input type="email" name="email" class="input"  placeholder="Enter Your E-mail.."><br><br>

                <label for="message">Enter Your Message Here:</label><br><br>

                <textarea name="msg"  rows="10" cols="30"> </textarea><br><br>

                <input type="submit" name="save_btn" id="send" value="SEND" ><br><br>

                <button id="view"><a href="view.php">VIEW</a></button>
            </form>
                    
          

    <div>
                <?php
    if (isset($_POST['save_btn'])) {
        $fname = mysqli_real_escape_string($con,$_POST['fname']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $message = mysqli_real_escape_string($con,$_POST['msg']);
    
        if (empty($fname)){
            exit();
        }
        
        if (empty($email)){
            exit();
        }
    
        if (empty($message)){
            exit();
        }
    
      $query = "INSERT INTO users 
        (fname,email,msg) VALUES('$fname','$email','$message')";
    
    
      $data = mysqli_query($con,$query);
      if ($data) {
         ?>
                    <script type=text/javascript>
                        alert("Data Submitted Successfully");
                    </script>
                    <?php
      }
      else{
        ?>
                        <script type=text/javascript>
                            alert("Please Try Again");
                        </script>
                        <?php
      }
    }
    ?>

 </div class="">
                <div class="facebook">
                    <a href="https://www.facebook.com/groups/679998296671842/permalink/830717378266599/?app=fbl" target="_blank">
                        <i class="fa-brands fa-facebook fa-3x"></i>
                    </a>
                </div>
                <div class="twitter">
                    <a href="https://twitter.com/HeartKisii7934" target="_blank">
                        <i class="fa-brands fa-square-twitter fa-3x"></i>
                    </a>
                </div>
                <div class="whatsapp">
                    <a href="https://chat.whatsapp.com/HFmVOtgO1svFRzzozLXL5A" target="_blank">
                        <i class="fa-brands fa-whatsapp fa-3x"></i>
                    </a>
                </div>
                <div class="gmail">
                    <a href="mailto:kisiiheartassociation@gmail.com">
                    <i class="fa-solid fa-envelope fa-3x"></i>
                    </a>
                </div>

            </div>
            <p>Developed By Kevin Gunga.& Copy;2023 All rights Reserved</p>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>

</html>

</html>