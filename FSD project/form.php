<?php

?>
"<body>

<div class="container" id="resume-form">
    <h1 class="text-center my-4">Resume Generator</h1>

    <div class="row">

        <div class="col-md-6">
          <!--first col of 6 rows-->
          <h3>Personal Information</h3>

          <div class="form-group mt-3">
                <b><label for="namefield" >Your Name</label></b>
                <input type="text" id="name" placeholder="Enter here" class="form-control">
          </div>
          <div class="form-group mt-2" >
                <b><label for="addressfield">Your Address</label></b>
                <textarea id="addressfield" placeholder="Enter here" class="form-control" >
                </textarea>
          </div>
          <div class="form-group mt-2">
                <b><label for="contactfield">Your Phone No</label></b>
                <input type="text" id="contactfield" placeholder="Enter here" class="form-control">
          </div>
          <div class="form-group mt-2">
            <b><label for="namefield">Your Email</label></b>
            <input type="text" id="email" placeholder="Enter here" class="form-control">
          </div>
          <div class="form-group mt-3">
            <b><label for="namefield">Important Links</label></b>
            <div class="form-group mt-2">
            <label for="namefield">LinkedIn</label>
            <input type="text" id="linkedfield" placeholder="Enter here" class="form-control">
            <div class="form-group mt-2">
            <label for="namefield">GitHub</label>
            <input type="text" id="linkedfield" placeholder="Enter here" class="form-control">
            </div>
            <div class="form-group mt-2">
            <label for="namefield">Twitter</label>
            <input type="text" id="linkedfield" placeholder="Enter here" class="form-control">
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

                <div class="container text-center mt-2" id="skAddButton">
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
      <textarea placeholder="Enter here" id="objectivefield"  class="form-control" >
      </textarea>
</div>

<div class="form-group mt-2" id="pj">
  <b><label for="">Projects Information</label></b>
  <textarea placeholder="Enter here" class="form-control pjField"> </textarea>

  <div class="container text-center mt-2" id="pjAddButton">
      <button onclick="addNewpjField()" class="btn btn-primary btn-sm" id="pjAddbutton">Add</button>
  </div>



  <div class="form-group mt-2" id="ed">
    <b><label for="">Education</label></b>
    <textarea placeholder="Enter here" class="form-control edField"> </textarea>

    <div class="container text-center mt-2" id="edAddButton">
        <button onclick="addNewedField()" class="btn btn-primary btn-sm" id="edAddbutton">Add</button>
    </div>

    </div>

    <div class="form-group mt-2" id="sl">
      <b><label for="">Skills</label></b>
      <input placeholder="Enter here" class="form-control slField">

      <div class="container text-center mt-2" id="slAddButton">
          <button onclick="addNewslField()" class="btn btn-primary btn-sm" id="slAddbutton">Add</button>
      </div>

      </div>



    
 </div>
  </div>
</div>

<div class="container text-center mt-3">
    <button onclick="addNewField()" class="btn btn-primary btn-lg">Generate Resume</button>

</div>
<br><br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="script.js"></script> 
</body>"