<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoNgen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/partner.css')}}">
    <link rel="stylesheet" defer href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="assets/Header_Logo.webp" type="image/x-icon">
</head>
<body>
    <header>
        <div class="container p-0">
           
           @include('layouts.nav')

        </div>

        <div class="container text-left">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h1 class="text-white">REGISTER AS A PARTNER WORKSHOP</h1>
                    <p>
                        If you would like to be our partner workshop, kindly fill the below form.
                    </p>
                </div>
            </div>
        </div>
    </header>
    <main>

      @if ($errors->any())
      <script>
        swal("Error sending your message", "{{$errors->first()}}", "error");
      </script>
      @endif

      @if (Session::get('message'))
      <script>
        swal("Thank you", "{{Session::get('message')}}", "success");
      </script>
      @endif

        <section class="section-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-1 col-md-8 col-sm-12 text-center">
                        <h2 class="text-uppercase pb-2">Fill the form below to partner and serve Motongen customers</h2>
                        <p>
                           MotoNgen is affiliated with many professional mechanics, workshops and automotive repair facilities throughout the country and across West Africa, to offer professional services to her customers.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 col-lg-10 offset-1 col-md-6 col-sm-12">
                        <form class="row g-3" action="{{url('partner')}}" method="POST">
                          @csrf
                            <div class="col-md-6">
                              <label for="firstname" class="form-label">Name</label>
                              <input type="text" class="form-control form-control-lg" id="name" required name="name">
                            </div>
                           

                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="number" class="form-control form-control-lg" id="phone" name="phone" required>
                              </div>
                              <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                              </div>

                              <div class="col-md-6">
                                <label for="state" class="form-label">State</label>
                                <input type="text" class="form-control form-control-lg" id="state" name="state" required>
                              </div>
                              <div class="col-md-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control form-control-lg" id="city" name="city" required>
                              </div>

                              <div class="col-md-6">
                                <label for="brand" class="form-label">Workshop Name</label>
                                <input type="text" class="form-control form-control-lg" id="brand" name="workshop" required>
                              </div>
                              <div class="col-md-12">
                                <label for="address" class="form-label">Workshop Address</label>
                                <input type="text" class="form-control form-control-lg" id="address" name="address" required>
                              </div>

                             

                            <div class="col-12">
                                <label for="notes" class="form-label">Services and other notes</label>
                                <textarea class="form-control" id="notes" rows="3" name="notes" required></textarea>
                              </div>

                            <div class="col-12 text-center">
                              <button type="submit" class="btn btn-danger px-5">SEND</button>
                            </div>
                          </form>
                        </div>
                    </div>
                    
                </div>
                </div>
        </section>
    </main>
    
    @include('layouts.footer')

    <script  defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>