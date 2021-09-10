<?php
// echo "<pre>";
//     print_r($_POST);
// echo "</pre>";

$message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != '')
    {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userMobile = $_POST['mobile'];
            $userLandline = $_POST['landline'];
            $userAddress = $_POST['address'];
            $userPurpose = $_POST['purpose'];
            $userMessage = $_POST['message'];
            $userDate = $_POST['date'];

            $to = "rithickroshaan@gmail.com";
            $body = "";

            $body .="From :".$userName. "\r\n";
            $body .="Email :".$userEmail. "\r\n";
            $body .="Purpose :".$userPurpose. "\r\n";
            $body .="Message :".$userMessage. "\r\n";

            mail($to,$userPurpose,$body);
        
            $message_sent = true;
            
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hall</title>
    <script src="https://kit.fontawesome.com/f7f557b6d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    
    <link rel="stylesheet" href="hall.css">
</head>
<body>
    <!--Navigation Bar-->
    <!-- <header>
        <a href="#"><img src="images/omlogo2.png" class="logo"></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="index.html" class=""onclick="toggleMenu();">Home</a></li>
            <li><a href="#" class="active"onclick="toggleMenu();">Hall</a></li>
            <li><a href="#"onclick="toggleMenu();">Events</a></li>
            <li><a href="#notice"onclick="toggleMenu();">Notice</a></li>
            <li><a href="#"onclick="toggleMenu();">Prayers</a></li>
        </ul>
    </header> -->

    <div class="slider">
        <input type="radio" name="slider" checked="checked">
        <div class="imgBx">
            <img src="images/hall1.jpg" alt="">
            <div class="content">
                <h2 id="text">Sivagama Soundari Wedding Hall</h2>
                <p></p>
            </div>
        </div>
    </div>

    <section class="wedding">
        <div class="row">
            <div class="col50">
                <p>A wedding is the union of not only the bride and groom but about their families and friends. Hindu wedding traditions are based on the sacred scriptures, The Vedas, which date back at least 4000 years, as well as on the local customs and traditions of the area and community. By this union the couple prepares to fulfill their physical, mental, emotional, spiritual and social goals of righteousness, acquisition of wealth, fulfillment of desires and the salvation of the Soul. These ceremonies, rites and rituals are symbolic of great underlying truths and thus should not, because of our ignorance or incapacity to understand them, be rejected as meaningless performances. The rituals of the Hindu marriage ceremony highlight the interdependence and the complementary nature of husband and wife relationship.<br></p>
            </div>
        </div>
    </section>
    <!--reserve form-->
    <?php
    if($message_sent):
    ?>

        <h3>Thanks, we'll be in touch</h3>

    <?php
    else:
    ?>

    <section class="rhall">
        <h2 class="titlegold"><span>R</span>eserve Hall</h2>
    <div class="wrapper">
        <form action="hall.php" method="POST">
           <div class="inputfield">
              <label>Name</label>
              <input type="text" name="name" class="input">
           </div>   
            <div class="inputfield">
              <label>Email Address</label>
              <input type="text" name="email" class="input">
           </div> 
          <div class="inputfield">
              <label>Phone Number(Mobile)</label>
              <input type="text" name="mobile" class="input">
           </div> 
           <div class="inputfield">
            <label>Phone Number(Landline)</label>
            <input type="text" name="landline" class="input">
         </div> 
          <div class="inputfield">
              <label>Address</label>
              <textarea class="textarea" name="address"></textarea>
           </div> 
          <div class="inputfield">
              <label>Purpose Title</label>
              <input type="text" name="purpose" class="input">
           </div> 
           <div class="inputfield">
              <label>Message</label>
              <textarea class="textarea" name="message"></textarea>
           </div>
           <div class="inputfield">
            <label>Event Date</label>
            <input type="date" name="date" class="input">
         </div> 
          <div class="inputfield">
            <input type="submit" value="Request" class="btn">
          </div>
        </form>
    </div>
    </section>
    <?php
    endif;
    ?>
    <footer class="footer">
        <div class="containerfooter">
            <div class="rowfoot">
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <p>No.38 Srimath Ramanathan Mawatha, Colombo 01300</p>
                    <br>
                    <ul>
                        <li>TEL<a href="tel:+94112447837">011 244 7837</a></li>
                    </ul>
                    <p></p>
                </div>
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">events</a></li>
                        <li><a href="#">hall</a></li>
                        <li><a href="#">Preists</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
   <footer>
    <div class="footer-bottom">
        <p>Copyright &copy;2021 DOT SOLUTIONS</p>
    </div>
   </footer>
    <script type="text/javascript">
    let text = document.getElementById('text');
    window.addEventListener('scroll' , function(){
        let value = window.scrollY;
        text.style.marginBottom = value * 1 + 'px';
    })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!--NAVBAR sticky-->
    <script type="text/javascript">
    window.addEventListener('scroll',function(){
        const header = document.querySelector('header');
        header.classList.toggle("sticky",window.scrollY > 0);
    })
    
    function toggleMenu(){
        const menuToggle = document.querySelector('.menuToggle');
        const navigation = document.querySelector('.navigation');
        menuToggle.classList.toggle('active');
        navigation.classList.toggle('active');
    }
    </script>
    <!--IONICONS-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>