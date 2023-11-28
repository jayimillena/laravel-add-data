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
                    <a href="{{ route('home') }}">Add names</a>
                    <table class="table table-stripped">
                      <thead>
                        <tr>
                          <td>ID</td>
                          <td>Fullname</td>
                          <td>Age</td>
                          <td>Address</td>
                        </tr>
                      <thead>
                      <tbody>
                        @foreach ($names as $name)
                        <tr> 
                          <td>{{ $name->id }}</td>  
                          <td>{{ $name->fullname }}</td>  
                          <td>{{ $name->age }}</td>  
                          <td>{{ $name->address }}</td>  
                        </tr>
                        @endforeach
                      </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </body>
</html>
