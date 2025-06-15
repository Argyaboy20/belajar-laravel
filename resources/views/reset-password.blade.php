
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Upscale.id</title>
</head>

<body style="background-color: #F2F4F6">
    <div style="height: 100vh" class="w-100 d-flex justify-content-center align-items-center">
        <div class="card rounded" style="width: 28rem;">
            <div class="card-body">
                <h4>Reset Password</h4>
                <p>Harap memasukkan alamat email untuk mereset password anda.</p>
                <form action="/reset-password" method="POST">
                    <input type="hidden" name="_token" value="7gYw065Sk3Dx2kTvGQ0lwtRBuHSXXzpFYSW973OJ">                    <div class="form-group">

                        <input type="email" name="email" value="" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email">
                        
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Kirim</button>

                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>