<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Safe Airlines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
    <nav class="navbar navbar-expand-lg bg-light">
   <div class="container-fluid">
    <a class="navbar-brand" href="#">Safe Airline</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      
        <a class="nav-link" href="/Airports">Airports</a>
        <a class="nav-link" href="/Countries">Countries</a>
        <a class="nav-link" href="/Airlines">Airlines</a>
      </div>
    </div>
      </div>
          </nav>
          <div class="text-center mt-3">
          <a class="btn" style="background-color:#8A2BE2" href="/New_Airports" role="button">New Airport</a>
           
         </div>
<br>
<div class="container-fluid mt-3"> <select class="form-select" aria-label="Default select example">
  <option value="1">Germany</option>
  <option value="2">America</option>
  <option value="3"></option>
</select>
</div>

<br>

</div>
          </nav>
          <div class="text-center">
          <a class="btn" style="background-color:#8A2BE2" href="#" role="button">Search</a>
           
         </div>
         
         
         <div class="container-fluid mt-2">
         
          <table class="table table-dark table-hover">
        <tbody>
       <tr>
       
        <th scope="row">Name</th>
      <td colspan="2">Country</td>
      <td>location</td>
      <td>Airlines</td>
      <td></td>
      <td>
      <td class="text-center">
        Actions
</td>
      </td>

      





       </tr>

       <tr>
       
       <th scope="row">Safe Airlines</th>
      <td colspan="2">Germany</td>
      <td>51.1642292 10.4541194</td>
      <td>Germany Airlines</td>
      <td></td>
      <td> 
        <div class="text-center">
        <td class="text-center">  <a class="btn" style="background-color:#008000" href="New_Addairline" role="button">Add Airline</a>
           
       
          <a class="btn" style="background-color:#FF7F50" href="New_RemoveAirline" role="button">Remove Airline</a>
        
        
          <a class="btn" style="background-color:#FFEBCD" href="New_edit" role="button">Edit</a>

          <a class="btn" style="background-color:#8B0000" href="New_delete" role="button">Delete</a>
</td>
         </div></td>




       </tr>
  </body>
</html>