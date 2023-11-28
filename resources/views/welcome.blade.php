<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Project</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row align-content-center">
                <div class="col-6">
                    <form action="">
                        <h2>Add Record</h2>
                        <div class="input-form">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control mb-2" name="fullname" value="" placeholder="Fullname" />    
                        </div>
                        <div class="input-form">
                            <label for="age">Age</label>
                            <input type="number" class="form-control mb-2" name="age" value="" placeholder="Age" />    
                        </div>
                        <div class="input-form">
                            <label for="address">Address</label>
                            <textarea name="address" class="form-control mb-2" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="input-form">
                            <input class="btn btn-primary" type="submit" name="save" value="Save" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
