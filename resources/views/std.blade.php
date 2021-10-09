<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Student management system</title>
    <style>
        
        *{
            font-family: cursive,sans-serif,'Times New Roman', Times, serif;
        }
        h1{
            margin: 20px;
            font-weight: 900;
            
        }
        img{
          box-shadow: 10px 10px 5px grey;
        }
        body{
            background: url(https://img.freepik.com/free-vector/white-abstract-background_23-2148810113.jpg?size=626&ext=jpg);
            background-attachment: scroll;
            background-clip: border-box;
            background-size: cover;
            background-repeat: no-repeat;
            
        }
    </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/create">Student Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/create">Enter Data</a>
        </li>
        
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row header-container text-center">
        <h1> <u> Student Management System </u> </h1>
        <hr>
        <img src="https://www.lingholic.com/wp-content/uploads/2013/01/study.jpg" alt="image" width="900px" height="400px">
    </div>
</div>




<div class="container">
@if($layout == 'index')
<div class="container-fluid">
    <div class="row">
    <section class="col">
        @include("student")
    </section>
    <section class="col"></section>
    </div>
</div>
@elseif($layout == 'create')
    <div class="container-fluid">
    <div class="row">
    <section class="col">
        @include("student")
    </section>
    <section class="col">
       <form action="/store" method="POST" class="my-4">
        @csrf
           <h2>Enter your data:</h2>
           <hr>
           <div class="form-group">
               <label >CNE</label>
               <input type="text" name="cne" class="form-control" placeholder="Enter cne">
            </div>
            <div class="form-group">
               <label >First Name</label>
               <input type="text" name="firstName" class="form-control" placeholder="Enter first name">
            </div>
            <div class="form-group">
               <label >Last Name</label>
               <input type="text" name="secondName" class="form-control" placeholder="Enter last name">
            </div>
            <div class="form-group">
               <label >Age</label>
               <input type="text" name="age" class="form-control" placeholder="Enter your age...">
            </div>
            <div class="form-group mb-4">
               <label >Speciality</label>
               <input type="text" name="speciality" class="form-control" placeholder="Enter your Speciality">
            </div>
            <input type="submit" class="btn btn-info" value="Submit">
            <input type="reset" class="btn btn-primary" value="Reset">
            </form> 
    </section>
    </div>
</div>
@elseif($layout == 'show')
<div class="container-fluid">
    <div class="row">
    <section class="col">
        @include("student")
    </section>
    <section class="col"></section>
    </div>
</div>
@elseif($layout == 'edit')
<div class="container-fluid">
    <div class="row">
    <section class="col">
        @include("student")
    </section>
    <section class="col">       
        <form action="/update/{{$student->id}}" method="POST" class="my-4">
        @csrf
           <h2>Update your data:</h2>
           <hr>
           <div class="form-group">
               <label >CNE</label>
               <input type="text" name="cne" class="form-control" value="{{$student->cne}}" placeholder="Enter cne">
            </div>
            <div class="form-group">
               <label >First Name</label>
               <input type="text" name="firstName" class="form-control" value="{{$student->firstName}}" placeholder="Enter first name">
            </div>
            <div class="form-group">
               <label >last Name</label>
               <input type="text" name="secondName" class="form-control" value="{{$student->secondName}}" placeholder="Enter last name">
            </div>
            <div class="form-group">
               <label >Age</label>
               <input type="text" value="{{$student->age}}" name="age" class="form-control" placeholder="Enter your age...">
            </div>
            <div class="form-group mb-4">
               <label >Speciality</label>
               <input type="text" value="{{$student->speciality}}" name="speciality" class="form-control" placeholder="Enter your Speciality">
            </div>
            <input type="submit" class="btn btn-success" value="Update">
            <input type="reset" class="btn btn-secondary" value="Reset">
            </form></section>
    </div>
</div>
@endif
</div>


    <footer style="text-align: center; background:rgb(139, 3, 3);  color: white; height=55px;line-height: 4; border-radius= 10%; width=100%">
   copyright &copy; Sahil-pillania &copy;2021-2022
 </footer>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
  </body>
</html>


