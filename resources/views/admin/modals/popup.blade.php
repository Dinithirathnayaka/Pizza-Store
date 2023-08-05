

<!DOCTYPE html>
<html lang="en">
    <head>
    

        <title>Admin Panel</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">

        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
        
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  
        @yield('styles')
        <!-- Fonts -->
       

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="">
 
        <div id="addCategoryPopup" class="popup">
            <div class="popup-content">
                <h2>Add Category</h2>
                <!-- Add form elements to input category details -->
                <!-- Example:
                <input type="text" name="category_name" placeholder="Category Name">
                <textarea name="category_description" placeholder="Category Description"></textarea>
                -->
                <button class="close-btn" onclick="closePopup()">Close</button>
                <button class="submit-btn" onclick="submitCategory()">Submit</button>
            </div>
        </div>
    </body>
</html>