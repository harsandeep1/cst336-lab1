<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
      <head>
            <meta charset="utf-8" />
            <title>Harsandeep Singh: A developer</title>
            <link rel="stylesheet" href="css/styles.css" type="text/css" />
            <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">

      </head>
<!-- closing head -->

      <!-- This is the body -->
      <!-- This is where we place the content of our website -->
      <body>
            <header>
                  <h1>Harsandeep Singh</h1>
            </header>
      <hr />
      <!--This is the navigation bar and it has three link to attach to differnt-->
      <!--html pages.-->
      <nav>
            <a class="home" href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
      </nav>
      <br />
      <br />
        
      <!--This is a dive with an id called content-->
      <div id="content">
            <h3>Education</h3>
                  <ul>
                        <a href="https://csumb.edu/csonline" target="_blank"><li>CSUMB - BS of Computer Science</li></a>
                        <li>SFSU - BS of Computer Science</li>
                  </ul>
                  <ul>
                        <li>Mission College - Associates of Computer Science</li>
                        <li>West Valley College - Associates of Computer Science</li>

                  </ul>
      <hr />
      <h3>Skills</h3>
            <table  border=10px>
                  <tr id="table-header">
                        <td><strong>Programming Language</strong></td>
                        <td><strong>Years Experience</strong></td>
                  </tr>
                  <tr class="table-row">
                        <td>Java</td>
                        <td>1 Year</td>
                  </tr>
                  <tr class="table-row">
                        <td>JavaScript</td>
                        <td>6 Months</td>
                  </tr>
                  <tr class="table-row">
                        <td>Python</td>
                        <td>6 Months</td>
                  </tr>
                  
            </table>
      <hr />
      <h3>Work Experience</h3>
            <table border=10px>
                  <tr>
                    <td id="table-header"><strong>Years</strong></td>
                        <td id="table-header">Present</td>
                        <td id="table-header">2018 - 2014</td>
                        <td id="table-header">2014 - 2012</td>
                        <td id="table-header">2012 - 2010</td>
                  </tr>
                  <tr>
                      <td id="table-header"><strong>Places</strong></td>
                        <td class="table-row">Arista Networks</td>
                        <td class="table-row">Cisco Networks</td>
                        <td class="table-row">Vendavo Corporation</td>
                        <td class="table-row">Nvidia Corporation</td>
                  </tr>
            </table>
      
      <hr />  
      <h3>Hobbies</h3>
      <ul>
            <li><span class="hobby">Soccer</span>: I am a FC Barcelona(Spain) fan and I play soccer in the evening. My preferable position is central attacking midfield.</li>
            <li><span class="hobby">Riding Motercycles</span>: I love sports bikes. I love both the Honda and the Yamaha bikes.</li>
            <li><span class="hobby">Travel</span>: I love to travel. I wanted to go Spain(<em>Of Course! <strong>SOCCER</strong></em>), Europe, Central America, and Asia.</li>

      </ul>
              
      </div>
        
        
      <!-- This is the footer -->
      <!-- The footer goes inside the body but not always -->
      <footer>
            <hr />
            <p>
            CST336 Internet Programming. 2020&copy; Singh <br />
            <strong>Disclaimer:</strong> The information in this webpage is 
            used for creating a personal portfolio and sticktly for 
            academic/professional purposes only.
            </p>
            <br /> 
            <br />
            
            <!--This is CSUMB Logo-->
            <img src="img/csumb_logo.png" alt="CSUMB Logo"></img>
      </footer>
      <!-- closing footer -->
      </body>
      <!-- closing body -->

</html>