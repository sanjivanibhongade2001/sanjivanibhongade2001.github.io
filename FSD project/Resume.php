<!DOCTYPE html>
<html>
    <head>
        <title>
            Resume Generator
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="template.css">
    </head>
    <body>

        <div class="container" id="resume-form">
            <h1 class="text-center my-4">Resume Generator</h1>

            <div class="row">

                <div class="col-md-6">
                  <!--first col of 6 rows-->
                  <h3>Personal Information</h3>

                  <div class="form-group mt-3">
                        <b><label for="namefield" >Your Name</label></b>
                        <input type="text" id="nameField" placeholder="Enter here" class="form-control">
                  </div>
                  <div class="form-group mt-2" >
                        <b><label for="addressfield">Your Address</label></b>
                        <textarea placeholder="Enter here"  id="addressField" class="form-control" >
                        </textarea>
                  </div>
                  <div class="form-group mt-2">
                        <b><label for="contactfield">Your Phone No</label></b>
                        <input type="text" id="phoneField" placeholder="Enter here" class="form-control">
                  </div>
                  <div class="form-group mt-2">
                    <b><label for="namefield">Your Email</label></b>
                    <input type="text" id="emailField" placeholder="Enter here" class="form-control">
                  </div>
                  <div class="form-group mt-3">
                    <div class="form-group mt-2">

                      <div class="form-group mt-2" id="il" >
                        <b><label for="">Important Links</label></b>
                        <input placeholder="For ex. linkedIn, github,etc" class="form-control ilField"> 

                        <div class="container text-center mt-2" id="ilAddButton">
                            <button class="btn btn-primary btn-sm" id="ilAddButton" onclick="addNewilField()">Add</button>
                        </div>
                      
                   
                  </div>

                </div>
                <div class="form-group mt-3">

                    <div class="form-group mt-2" id="ac" >
                        <b><label for="">Achievements</label></b>
                        <input placeholder="Enter here" class="form-control acField"> 

                        <div class="container text-center mt-2" id="acAddButton">
                            <button class="btn btn-primary btn-sm" id="acAddButton" onclick="addNewacField()">Add</button>
                        </div>

                  </div>
                  
                   <div class="form-group mt-2" id="lk">
                        <b><label for="">Languages Know</label></b>
                        <input placeholder="Enter here" class="form-control lkField">

                        <div class="container text-center mt-2" id="lkAddButton">
                            <button class="btn btn-primary btn-sm" onclick="addNewlkField()" id="lkAddButton">Add</button>
                        </div>

                  </div>
                 
                    <div class="form-group mt-2" id="hb">
                        <b><label for="">Hobbies</label></b>
                        <input placeholder="Enter here" class="form-control hobField">

                        <div class="container text-center mt-2" id="hbAddButton" >
                            <button onclick="addNewhbField()" class="btn btn-primary btn-sm" id="hbAddbutton">Add</button>
                        </div>

                  </div>
                  </div>  
                </div>
            </div>


          <div class="col-md-6">
            <!--second row -->
            <h3>Professional Information</h3>
            
            <div class="form-group mt-3" >
              <b><label for="objectivefield">Career Objective</label></b>
              <textarea placeholder="Enter here" id="objectiveField"  class="form-control" >
              </textarea>
        </div>

        <div class="form-group mt-2" id="pj">
          <b><label for="">Projects Information</label></b>
          <textarea placeholder="Enter here" class="form-control pjField"> </textarea>

          <div class="container text-center mt-2" id="pjAddButton">
              <button onclick="addNewpjField()" class="btn btn-primary btn-sm" id="pjAddbutton">Add</button>
          </div>


          <!-- Educations-->

          <div class="form-group mt-2" id="ed">
            <b><label for="">Education</label></b>
            <textarea placeholder="Enter here" class="form-control edField"> </textarea>
  
            <div class="container text-center mt-2" id="edAddButton">
                <button onclick="addNewedField()" class="btn btn-primary btn-sm" id="edAddbutton">Add</button>
            </div>

            </div>

            <!--  Skill -->

            <div class="form-group mt-2" id="sl">
              <b><label for="">Skills</label></b>
              <input placeholder="Enter here" class="form-control slField">
    
              <div class="container text-center mt-2" id="slAddButton">
                  <button onclick="addNewslField()" class="btn btn-primary btn-sm" id="slAddbutton">Add</button>
              </div>
  
              </div>


              <!--Certifications-->
              <div class="form-group mt-2" id="cer">
                <b><label for="">Certifications </label></b>
                <input placeholder="Enter here" class="form-control cerField">
      
                <div class="container text-center mt-2" id="cerAddButton">
                    <button onclick="addNewcerField()" class="btn btn-primary btn-sm" id="cerAddbutton">Add</button>
                </div>
    
                </div>



              

            </div>
         </div>
         <div class="container">
         <div class="container text-center mt-3">
          <button  onclick="generateresume()" class="btn btn-primary btn-lg">Generate Resume</button>
          </div>
        </div>
        </div>
        

        <br><br><br>
        <div class="container" id="cv-template">
          <div class="row">
           <div class="col-md-4 py-4 background ">
               <!--first col-->
               <h1 id="nameT"><b>Sanjivani Bhongade</b></h1><br>
               <div class="container text-center">
                <img src="image.jpg" alt="image" class="img-fluid myimg"><br><br>
               </div>
               <h3><B style="color: rgb(104, 1, 104);">CONTACT DETAILS</B></h3><HR>
              <h6><b>Address:</b></h6>
               <p id="addressT">Abc xyz, Wardha-442001</p>
               <h6><b>Phone:</b></h6>
               <p id="phoneT">91 9087654321</p>
               <h6><b>Email:</b></h6>
               <p id="emailT">sanjivanibhongade@gmail.com</p>
               <h6><b>Important Links:</b></h6>
               <ul id="ilT">
                <li>https://www.facebook.com/checkpoint/?next=%2Fpassword%2Fchange%2Freason%2F</li>
                <li>https://www.facebook.com/checkpoint/?next=%2Fpassword%2Fchange%2Freason%2F</li>
               </ul>
              
               <br>
               <h3><B style="color: rgb(104, 1, 104);">ACHIEVEMENTS</B></h3><HR>
                <ul id="achievementT">
                  <li>Smart India Hackethone Finalist 2022</li>
                  <li>Lila Girls 2019</li>
                  <li>Smart India Hackethone Finalist 2022</li>
                </ul>
                <br>
                <h3><B style="color: rgb(104, 1, 104);">LANGUAGES</B></h3><HR>
                  <ul id="languageT">
                    <li>Engilish</li>
                    <li>Hindi</li>
                    <li>Marathi</li>
                  </ul>
                 
                  <br>
                  <h3><B style="color: rgb(104, 1, 104);">HOBBIES</B></h3><HR>
                    <ul id="hobbiesT">
                      <li>Travelling</li>
                      <li>Dancing</li>
                      <li>Singging</li>
                    </ul>
                    <br>
                   
   
           </div>
   
   
           <div class="col-md-8 py-4">
               <!--This is second col-->

               <!--Objevtive field-->
               <div class="card">
                <div class="card-header background"> <h3><B style="color: rgb(104, 1, 104);">OBJECTIVE</B></h3></div>
                <div class="card-body">
                  <p id="objectiveT"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nemo voluptates non corrupti delectus inventore, pariatur repellat id ducimus! Maiores, fugiat hic. Saepe ullam quae at accusamus minus expedita neque sed odio deleniti eius! Reiciendis magnam ipsa est libero dolores veritatis sapiente, eveniet soluta! Iusto voluptas dolores natus delectus fugiat.</p>
                </div>
               </div>
               <!--Work Experience-->
               <div class="card my-3">
                <div class="card-header background"> <h3><B style="color: rgb(104, 1, 104);">PROJECT INFORMATION</B></h3></div>
                <div class="card-body">
                <ul id="pjT">
                  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nobis omnis nostrum. Nemo cupiditate, impedit maxime recusandae nulla non odio dolores saepe numquam quibusdam deleniti ex libero provident? Consequuntur provident eveniet, quasi quisquam quaerat ipsa aperiam sit asperiores fugiat reiciendis dolorem unde praesentium et sequi ipsum quos iste aliquid quo.</li>
                  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nobis omnis nostrum. Nemo cupiditate, impedit maxime recusandae nulla non odio dolores saepe numquam quibusdam deleniti ex libero provident? Consequuntur provident eveniet, quasi quisquam quaerat ipsa aperiam sit asperiores fugiat reiciendis dolorem unde praesentium et sequi ipsum quos iste aliquid quo.</li>
                  <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid dolorum autem tempore numquam. Facere ratione incidunt, praesentium ullam asperiores voluptate ab repudiandae perferendis ducimus dolore, error, voluptas sapiente accusamus sit.</li>
                </ul>  
                </div>
               </div>

               <!--Education Details Field-->
               <div class="card my-3">
                <div class="card-header background"> <h3><B style="color: rgb(104, 1, 104);">EDUCATION DETAILS</B></h3></div>
                <div class="card-body"> 
                  <ul id="acT">
                    <li>Bajaj Institute Of Tehnology</li>
                    <li>XYX Collage Of Science and Commerce</li>
                    <li>XYX School </li>
                  </ul>
                  
                </div>
               </div>

               <!--Skills-->

               <div class="card my-3">
                <div class="card-header background"> <h3><B style="color: rgb(104, 1, 104);">SKILLS</B></h3></div>
                <div class="card-body"> 
                  <ul id="skT">
                    <li>HTML</li>
                    <li>CSS Collage Of Science and Commerce</li>
                    <li>JavaScript </li>
                    <li>Java</li>
                    <li>C</li>
                    <li>MySQL</li>
                  </ul>
                  
                </div>
               </div>

               
               <div class="card my-3">
                <div class="card-header background"> <h3><B style="color: rgb(104, 1, 104);">CERTIFICATIONS</B></h3></div>
                <div class="card-body"> 
                  <ul id="cerT">
                    <li>Html by Coursera</li>
                    <li>Python by Udemy</li>
                    <li>JavaScript by Coursera</li>
                    <li>Cyber Security by Cisco</li>
                    <li>MySQL by W3School</li>
                  </ul>
                  
                </div>
               </div>

   
           </div>
   
          </div>
   
   
       </div>
   <br>
   <br>
       <div class="container mt-3 text-center">
        <div class="button btn" onclick="printCV()" style="background-color:rgb(194, 30, 194);">Print Resume</div>
       </div>
   
       </div>

       </div>
       <br>   <br>   <br>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="script.js"></script> 
    </body>
</html>