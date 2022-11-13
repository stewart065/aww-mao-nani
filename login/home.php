<?php
  // session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  
  <link rel="stylesheet" href="styler.css">
</head>
<body>
<div class="parent">
<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="room/bbbbcszsddsdf.png" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="room/cvbcvb.png" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="room/ddsss.jpg" alt="" style="width:100%;">
      </div>
      <div class="item">
        <img src="room/Room 1.jpg" alt="" style="width:100%;">
      </div>
      <div class="item">
        <img src="room/Room 2.webp" alt="" style="width:100%;">
      </div>
      <div class="item">
        <img src="room/room 3.jpg" alt="" style="width:100%;">
      </div>
      <div class="item">
        <img src="room/x.jpg" alt="" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

       
<div class="first">
                <h2 class = "title">SEASIDE</h2>
                <img class="uy"  src="jk.png" alt="">
                <img class= "img2" src="ht.png" alt="">
        </div>
        <div class="search">
                <input class="hty" type="text" placeholder = "Search" name="Search" >
        </div>
        <div class="ql">
                <div class="header">
                                <div class="qwe">
                                        <div class="home"><a href="home.php">HOME</a></div> 
                                         <div class="menu"><a href="menu.php">MENU</a></div> 
                                        <div class="loca"><a href="location.php">LOCATIONS</a></div>
                                        <div class="contact"><a href="">CONTACT</a></div>
                                        <div class="about"><a href="">ABOUT</a></div>
                                </div>
                </div>
        </div>
        <div class="body">           
              
                <div class="ml">
                    <p class="text1">If your looking for some affordable rooms and some <br> relaxing massage its time for you to have a reservation. </p>
                </div>

                         
                          <!-- <div class="imgf">
                            
                            <div class="vpl"><img src="pol.png" alt=""></div>
                        </div> -->
              

        </div>
        <div class="slideshow-container">

                <div class="mySlides">
                <q> We welcome you just a few steps from 4ks Pension House in the center of the Northen Cebu capital in Bogo.</q>
                <p class="author">  <a href="">Click Here</a> </p>
                </div>

                <div class="mySlides">
                <q> 4ks Pension House When you Choose us once, and you will choose us always</q>
                        <p class="author">  <a href="">Click Here</a> </p>
                </div>

                <div class="mySlides">
                <q>Experience the perfect blend of innovative design, relaxing inspiration and value for money. .</q>
                <p class="author">  <a href="">Click Here</a> </p>
                </div>
                <div class="mySlides">
                <q>Our air-conditioned and functionally equipped with flat screen TV, among others, provide everything needed for a comfortable stay. </q>
                <p class="author">  <a href="">Click Here</a> </p>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                </div>
                      <div class="bol">                
                          <div class="dot-container">
                          <span class="dot" onclick="currentSlide(1)"></span> 
                          <span class="dot" onclick="currentSlide(2)"></span> 
                          <span class="dot" onclick="currentSlide(3)"></span> 
                          <span class="dot" onclick="currentSlide(4)"></span> 
                       </div>
                    </div>            
                   
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
         <script src="java.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
</body>
<style>
                                 .imgf{
                                    position: relative;
                                    
                                   
                                 }
                                 .vpl{
                                    position: absolute;
                                    left:-30px;
                                    top:198px;
                                 
                                 }
                                 .vpl img{
                                    width:1710px ;
                                    height: 200px;
                                 }
                            </style>
<!-- af -->
<style>
                          .dot-container {
                                position: relative;
                              text-align: center;
                              padding: 20px;
                              background: rgb(139, 41, 41);
                              width:400px;
                              top:640px;
                              left:865px;
                            


                              
                              }
                              .author a {color: black;
                                          font-weight: bold;
                                            font-size:32px;}

                              /* The dots/bullets/indicators */
                              .dot {
                               
                              cursor: pointer;
                              height: 15px;
                              width: 15px;
                              margin: 0 2px;
                              background-color: #bbb;
                              border-radius: 50%;
                              display: inline-block;
                              transition: background-color 0.6s ease;
        
           }
                    </style>     
<!-- ar -->
<style>
        .parent{
            position: relative;
        }
        .container{
            position: absolute;
           height:20px ;
           width:1650px;
           margin-left:-9px;
           bottom: -218px;
        }

</style>
<!-- en style -->
<style>

                  body{
                    background-color: rgb(139, 41, 41);
                height: 50cm;
                  
                  
                }
                .first{
                    position: relative;
                }
                .title{
                    position: absolute;
                    width: 189px;
                    height: 80px;
                    left: 225px;
                    top: -2px;

                    font-family: 'Lemonada';
                    font-style: normal;
                    font-weight: 700;
                    font-size: 40px;
                    line-height: 80px;
                    text-align: center;
                    color: #FFFFFF;
                    opacity: 0.6;
                }
                .uy{position: absolute;
                width: 75px;
                height: 75px;
                left: 156px;
                top: 25px;
                border-radius: 339.5px;
                }
                .img2{
                    position: absolute;
                    width: 75px;
                    height: 75px;
                    left: 1319px;
                    top: 25px;

                }
                .search{
                    position: relative;   
                }
                .hty{
                    position: absolute;
                    width: 386px;
                    height: 38px;
                    left: 552px;
                    top: 86px;

                    background: #D9D9D9;
                    border-radius: 5px;
                }
                .ql{
                    position: relative;
                }
                .header{
                    position: absolute;
                    width: 1690px;
                    height: 48px;
                    left: -10px;
                    top: 150px;
                    background-color: white;
                }
                .qwe{
                    position: relative;
                }
                .home{
                    position: absolute;
                    width: 93px;
                    height: 36px;
                    left: 136px;
                    top: 6px;
                    font-family: 'Inter';
                    font-style: normal;
                    font-weight: 800;
                    font-size: 30px;
                    line-height: 36px;
                    text-align: center;
                    color: black;
                    
                }
                a{
                    text-decoration: none;
                    color: #000;
                    opacity: 0.6;
                }
                .menu{
                    position: absolute;
                    width: 93px;
                    height: 36px;
                    left: 376px;
                    top: 6px;
                    font-family: 'Inter';
                    font-style: normal;
                    font-weight: 800;
                    font-size: 30px;
                    line-height: 36px;
                    text-align: center;
                    color: black;
                    
                }
                .loca{
                    position: absolute;
                    width: 93px;
                    height: 36px;
                    left: 656px;
                    top: 6px;
                    font-family: 'Inter';
                    font-style: normal;
                    font-weight: 800;
                    font-size: 30px;
                    line-height: 36px;
                    text-align: center;
                    color: black;
                }
                .contact{
                    position: absolute;
                    width: 73px;
                    height: 36px;
                    left: 956px;
                    top: 6px;
                    font-family: 'Inter';
                    font-style: normal;
                    font-weight: 800;
                    font-size: 30px;
                    line-height: 36px;
                    text-align: center;
                    color: black;
                }
                .about{
                    position: absolute;
                    width: 73px;
                    height: 36px;
                    left: 1316px;
                    top: 6px;
                    font-family: 'Inter';
                    font-style: normal;
                    font-weight: 800;
                    font-size: 30px;
                    line-height: 36px;
                    text-align: center;
                    
                }
                .ml{
                    position:relative; 
                  }
                  .text1{
                          position: absolute;
                          left: 230px;
                          top: 410px;
                          font-family: 'Montserrat';
                          font-style: normal;
                          font-weight: 800;
                          font-size: 30px;
                          line-height: 60px;
                          text-align: center;

                          color: #000;
                  }
                    
                  .nlk{
                  position: relative;
                  font-size: 24px;
                  font-style: initial;
                  top:-400px;
                  
                  }
                  .romd{
                  position: absolute;
                  left: 800px;
                  font-size: 30px;
                  }
                  
                  /* Slideshow container */
                          .slideshow-container {
                          position: relative;
                          width:560px;
                          height: 300px;
                          background: rgb(139, 41, 41);
                          left:780px;
                          top:650px;

                          
                          }

                          /* Slides */
                          .mySlides {
                          display: none;
                          padding: 90px;
                          text-align: center;
                          
                          }

                          /* Next & previous buttons */
                          .prev, .next {
                          cursor: pointer;
                          position: absolute;
                          top: 50%;
                          width:auto;
                          margin-top: -30px;
                          padding: 16px;
                          color: #888;
                          font-weight: bold;
                          font-size: 20px;
                          border-radius: 0 3px 3px 0;
                          user-select: none;
                          
                          }

                          /* Position the "next button" to the right */
                          .next {
                          position: absolute;
                          right: 0;
                          border-radius: 3px 0 0 3px;
                          }

                          /* On hover, add a black background color with a little bit see-through */
                          .prev:hover, .next:hover {
                          background-color: rgba(0,0,0,0.8);
                          color: white;
                          }

                          /* The dot/bullet/indicator container */
                      
                      

                          /* Add a background color to the active dot/circle */
                          .active, .dot:hover {
                          background-color: #717171;
                          }

                          /* Add an italic font style to all quotes */
                          q {font-style: italic;
                              font-size: 28px;
                              color: #fff;
                            }

                          /* Add a blue color to the author */
                      
</style>
</html>