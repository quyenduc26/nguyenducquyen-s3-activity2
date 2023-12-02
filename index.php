<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        .container{
            border: 5px solid blue ;
        }
        #submit{
            width: 100%;
        }
        .input{
            padding: 10px;
        }
        .form-input{
            margin-top: 20px;
        }
    </style>
    <form class="container" action="result.php" method="post">
        <div class="row form-input">
            <label class="col-md-4 mx-1" for="">Name</label>
            <input class="col-md-7 mx-1 input" type="text" name="name" id="name">
        </div>
        <div class="row form-input">
            <label class="col-md-4 mx-1 input" for="">Club you want to apply</label>
            <select class="col-md-7 mx-1" name="club">
                <option value="Robotic club">Robotic club</option>
                <option value="Football club">Football club</option>
                <option value="Football club">Billards club</option>
                <option value="Football club">Gaming club</option>
            </select>
        </div>
        <!-- radio -->
        <div class="row form-input"> 
            <label class="col-md-4" for="">Be time for you</label>
            <div class="col-md-4">
                <input  type="radio" name="time" value="Saturday mornings"> Saturday mornings 
            </div>
            <div class="col-md-4">
                <input type="radio" name="time" value="Saturday afternoons"> Saturday afternoons
            </div>
           
        </div>
        <div class="row form-input">
            <div class="col-md-4" ></div>
            <div class="col-md-4">
                <input type="radio" name="time" value="Sunday afternoons"> Sunday afternoons
            </div>     
        </div>
        <!-- checkbox -->
        <div class="row form-input">
            <label class="col-md-4" for="">Your Skills</label>
            <div class="col-md-4">
                <input  type="checkbox" class = "checkbox" name="checkbox_arr[]" value="the best coder"> the best coder 
            </div>
            <div class="col-md-4">
                <input type="checkbox" class = "checkbox" name="checkbox_arr[]" value="good in arts"> good in arts
            </div>
        </div>
        <div class="row form-input">
            <div class="col-md-4" ></div>
            <div class="col-md-4">
                <input  type="checkbox" class = "checkbox" name="checkbox_arr[]" value = "a super star "> a super star 
            </div>
            <div class="col-md-4">
                <input type="checkbox" class = "checkbox" name="checkbox_arr[]" value="a crazy dancer "> a crazy dancer                
            </div>
        </div>
        <div class="row form-input">
        <div class="col-md-4" ></div>
        <div class="col-md-4" >
            <input type="checkbox" class = "checkbox" name="checkbox_arr[]" value="singer"> singer
        </div>
        <div class="col-md-4" >
            <input type="checkbox" class = "checkbox" name="checkbox_arr[]" value="good in design"> good in design
        </div>
        </div>
        <div class="row form-input">
        <div class="col-md-4" ></div>
        <div class="col-md-4" >
            <input type="checkbox" class = "checkbox" name="checkbox_arr[]" value="the best eater"> the best eater
        </div>
        <div class="col-md-4" >
            <input type="checkbox" class = "checkbox" name="checkbox_arr[]" value="good in speeches"> good in speeches
        </div>
        </div>
        <!-- submit  -->
        <div class="row form-input"></div>
            <input  class="input mb-3" type="submit" name="submit" value="Submit!" id="submit">
    </form>

</body>
</html>