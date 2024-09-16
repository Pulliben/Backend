<Head>
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
</Head>
<header>
    <div class = "container">
        <h1 style="color: white;">Pulastya Desai</h1>
        <nav>
            <ul>
               <li><a href="homepage.html">Home</a></li>
                <li><a href="skills.html">Skills</a></li>
                <li><a href="project.html">Projects</a></li>
                
                
            



            </ul>
        </nav>

    </div>
</header>
<section id="Contact"> 
    <body style="background-color:rgb(241, 241, 241);">
    <h1>Enter Your Details</h1>
    <form action="save_user.php" method="post">
        <label style="font-family: cursive; color: rgb(106, 110, 241);"for="name">Name:</label>
         <input style="font-family: cursive; color: rgb(106, 110, 241);" type="text" id="name" name="name"required>

         <label style="font-family: cursive; color: rgb(106, 110, 241);" for="email">Email:</label>
         <input style="font-family: cursive; color: rgb(106, 110, 241);" type="email" id="email" name="email"required>
        
        <label style="font-family: cursive; color: rgb(106, 110, 241);" for="number">Number:</label>
         <input style="font-family: cursive; color: rgb(106, 110, 241);" type="number" id="number" name="number"required>
         <label style="font-family: cursive; color: rgb(106, 110, 241);" for="message">Message:</label>
         
         <textarea id="message" name="message"></textarea>
         <button style="background-color: rgb(106, 110, 241); font-family: cursive;"  type="submit">Send</button>

    </form>
</body>
</html>