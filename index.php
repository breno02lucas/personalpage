<?php
    session_start();
    require_once("header.php");
    require_once("footer.php");

?>

<div class="container">

    <div class="personal-infos">

        <div class="circle">
            <i class="fas fa-laptop-code"></i>
        </div>
        
        <p class="name">Breno Lucas da Silva Soares</p>
        <p class="function">Front-End Developer</p>

        <div class="social-midias">
            <p class="title">Social Medias</p>
            <a href="https://github.com/breno02lucas" target="_blank"> <i class="fab fa-github-square"></i> </a> 
            <a href="https://www.linkedin.com/in/blss/" target="_blank"> <i class="fab fa-linkedin"></i> </a> 
            <a href="https://www.instagram.com/blssstudio/" target="_blank"> <i class="fab fa-instagram-square"></i> </a> 
        </div>

        <div class="download" id="downCV">
            <a href="incs/cv.pdf" download="Breno Lucas - Currículo" class="cv">Baixar CV</a>
            <i class="fas fa-arrow-down arrow"></i>
            <i class="fas fa-check correct"></i>
        </div>
        
    </div>

    <div class="curriculum-infos" id="session">
        

    </div>

</div>

<div class="menu-lateral">

    <nav>
        <ul>
            <li class="btn-changePage" id="btn-home">
                Home
            </li>
            <li class="btn-changePage" id="btn-about">
                About-me
            </li>
            <li class="btn-changePage" id="btn-skills">
                Skills
            </li>
            <li class="btn-changePage" id="btn-studies">
                Studies
            </li>
            <li class="btn-changePage" id="btn-works">
                Works
            </li>
            <li class="btn-changePage" id="btn-contact">
                Contact
            </li>
        </ul>

    </nav>

</div>