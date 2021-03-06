<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6ccdd39db5.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <h2 class="logo"><span>H</span>usain.</h2>
                <ul id="list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#services">Services</a></li>
                    <li><a href="index.php#work">Portfolio</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
                <i class="fa-solid fa-bars" onclick="openMenu()" id="icon"></i>
            </nav>
            <div class="content">
                <p>Web Developer &<span> Designer </span></p>
                <h1>Hi, I'm Husain <br> <span> Champawala </span>From India</h1>
            </div>
        </div>
    </header>

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-1">
                    <img src="Husain 3.jpg">
                </div>
                <div class="col-2">
                    <h1 class="title">About <span>Me</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ut placeat sed non rem neque,
                        impedit laboriosam assumenda saepe et magnam similique, alias optio qui esse, voluptatum quae
                        quia ex quis provident! Hic et itaque dicta molestias deserunt in perspiciatis.
                    </p>
                    <div class="tab-titles">
                        <div class="tab-links active" onclick="opentab('skills')">Skills</div>
                        <div class="tab-links" onclick="opentab('experience')">Experience</div>
                        <div class="tab-links" onclick="opentab('education')">Education</div>
                    </div>
                    <div class="tab-contents active" id="skills">
                        <ul>
                            <li><span>Web Development</span><br>Developing Web App</li>
                            <li><span>Python Development</span><br>Building Games</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>2022 - Web Developer Intern</span><br>Sparks Foundation</li>
                            <li><span>2022 - Web Developer Intern</span><br>Let's Grow More</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2018 - SSC</span><br>SSVEHS</li>
                            <li><span>2020 - HSC</span><br>K M Agrawal College</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services">
        <div class="container">
            <h1 class="title">My <span>Services</span></h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Development</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis quidem dignissimos illo
                        tempora obcaecati corrupti in ex quis numquam blanditiis commodi dicta laudantium natus
                        incidunt, odit voluptate minima odio amet placeat optio ullam tempore. Non, velit. Aliquid
                        temporibus sapiente deleniti.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                    <i class="fa-brands fa-python"></i>
                    <h2>Python Development</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis quidem dignissimos illo
                        tempora obcaecati corrupti in ex quis numquam blanditiis commodi dicta laudantium natus
                        incidunt, odit voluptate minima odio amet placeat optio ullam tempore. Non, velit. Aliquid
                        temporibus sapiente deleniti.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                    <i class="fa-brands fa-app-store"></i>
                    <h2>App Development</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis quidem dignissimos illo
                        tempora obcaecati corrupti in ex quis numquam blanditiis commodi dicta laudantium natus
                        incidunt, odit voluptate minima odio amet placeat optio ullam tempore. Non, velit. Aliquid
                        temporibus sapiente deleniti.</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- WORKS -->
    <section id="work">
        <div class="container">
            <h1 class="title">My <span>Work</span></h1>
            <div class="work-list">
                <div class="work">
                    <img src="work-1.png" alt="">
                    <div class="layer">
                        <h2>Social Media App</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit ad laudantium sequi doloribus
                            quidem quam consequuntur voluptatem sapiente ut voluptatum.
                        </p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="work-2.png" alt="">
                    <div class="layer">
                        <h2>Music App</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit ad laudantium sequi doloribus
                            quidem quam consequuntur voluptatem sapiente ut voluptatum.
                        </p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="work-3.png" alt="">
                    <div class="layer">
                        <h2>Online Shoping App</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit ad laudantium sequi doloribus
                            quidem quam consequuntur voluptatem sapiente ut voluptatum.
                        </p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See More</a>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-l">
                    <h1 class="title"><span>Contact</span> Me</h1>
                    <p><i class="fa-solid fa-envelope"></i>husainchampawala@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i>8879525311</p>
                    <div class="social-media">
                        <a href="https://wa.me/8879525311 "><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/in/husain-b-champawala-2522a2205/"><i
                                class="fa-brands fa-linkedin"></i></a>
                        <a href="https://github.com/husainbc070503"><i class="fa-brands fa-github"></i></a>
                        <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <a href="Cuvette Workshop Certificate.pdf" class="download-btn" download>Download CV</a>
                </div>
                <div class="contact-r">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                        <input type="text" name="name" id="name" placeholder="You Name.." required>
                        <input type="email" name="email" id="email" placeholder="You Email.." required>
                        <textarea name="msg" id="msg" placeholder="Your Message.." required></textarea>
                        <button type="submit" value="submit" id="submit-btn">Submit</button>
                    </form>
                    <?php
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $msg = $_POST['msg'];
                        $servername = 'localhost:3307';
                        $username='root';
                        $password='';
                        $database = 'portfolio';
                        $conn = mysqli_connect($servername,$username,$password,$database);
                        $sql = "INSERT INTO `contact` (`name`, `email`, `message`, `date-time`) VALUES ('$name', '$email', '$msg', current_timestamp());";
                        $result = mysqli_query($conn,$sql);
                        if($result){
                            echo '<span id="success" style="color: rgb(0, 255, 21);">Message Sent Successfully..</span>';
                        }
                        else{
                            echo '<span id="danger" style="color: red;">Error!!</span>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <style>
        footer {
            display: block;
            padding: 10px 0;
            text-align: center;
            background: #fffeee;
            color: black;
            font-size: 18px;
        }
    </style>

    <footer>
        <p>Copyright &copy; 2022 Husain Champawala</p>
    </footer>
    
    <script src="script.js"></script>
</body>

</html>