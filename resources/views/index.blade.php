<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is tasting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .container {
            width: 50%;
            background:#fff;
        }
        body {
            background: #80808080;
        }
    </style>
</head>
<body>
    <div class="container p-5 mt-5">
        <h5>Rigister Form</h5>
        @php $html = "<p>this is html</p>"; @endphp
        {!! $html !!}
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="Name" class="form-control" id="Name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form> 
            </div>
        </div>
    </div>
    
</body>
</html>