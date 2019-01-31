<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body style="background-color:grey;">
        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="jumbotron jumbotron-fluid" style="background-color: #d9d9d9">
            <div class="container">
                <h1 class="display-3">Fluid jumbo heading</h1>
                <p class="lead">Jumbo helper text</p>
                <hr class="my-2">
            </div>
        </div>

        <div class="container">
            <div class="jumbotron" style="background-color:#8080ff; color:snow">
                    <h1 class="display-3">Jumbo heading</h1>
                    <p class="lead">Jumbo helper text</p>
                    <hr class="my-2">
                {{ Form::open(['route' => 'daftar.store', 'method' => 'POST'] ) }}                
                <div class="form-group">
                    <label for="name">Name</label>
                    {{ Form::text('name', null, ['id'=>'name', 'class' => 'form-control', 'placeholder' => 'Name', 'required'])}}
                </div>

                <div class="form-group">
                    <label for="b_date">Birth Date</label>
                    {{ Form::date('b_date', null, ['class' => 'form-control', 'placeholder' => 'Some Date', 'required'])}}
                </div>

                <div class="form-group">
                    <label for="b_place">Birth Place</label>
                    {{ Form::text('b_place', null, ['class' => 'form-control', 'placeholder' => 'Some Place', 'required'])}}
                </div>
     
                <div class="form-group">
                    <label for="numba">Your phone number</label>
                    {{ Form::number('numba', null, ['class' => 'form-control', 'placeholder' => 'Some number', 'required'])}}
                </div>

                <div class="form-group">
                        <label for="gender">Your identify yourself as...</label> <br>
                        {{ Form::select('gender',array(
                            'Male',
                            'Female',
                            'Spagetti Monster',
                            'A pan',
                            'An Euclidian object (except a pan)',
                            'A Non Euclidian object (except a pan)',
                            'An eldritch horror',
                            'A sentient AI',
                            'None of the above',
                        ))}}
                </div>

                <label for="result">Just pick one</label>
                <div>
                    <div class="radio">
                        {{ Form::radio('result', 'option 1') }} Option 1
                    </div>                
                    <div class="radio">
                        {{ Form::radio('result', 'option 2') }} Option 2
                    </div>
                    <div class="radio">
                        {{ Form::radio('result', 'option 3') }} Option 2
                    </div>
                </div>

                <br>

                <div class="form-group">
                        <label for="photo">Photo</label> <br>
                        {{ Form::file('image')}}
                </div>

                <p class="lead">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Simpan</button>
                </p>
                {{ Form::close() }}
            </div>
        </div>

        <div class="container">
            <div class="jumbotron" style="background-color:#8080ff; color:snow">
                
                    <h1 class="text-center"> 
                        <a href="#blin" style="color:snow" data-toggle="collapse" >Data Table</a> 
                    </h1>
                    <hr class="my-2">
                

                <div class="container">
                    <div id="blin" class="collapse">
                        <table class="table table-striped table-bordered" border="1" cellpadding="10" cellspacing="0" style="background-color: grey; text-align: center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Birth Date</th>
                                    <th>Birth Place</th>
                                    <th>Phone Number</th>
                                    <th>Gender</th>
                                    <th>Option</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
</body>
</html>
