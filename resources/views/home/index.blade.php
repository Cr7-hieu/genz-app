<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <script src="https://kit.fontawesome.com/174372c11f.js" crossorigin="anonymous"></script> 
    <title>Document</title>
</head>
<body>
   @include('master.header')
    {{-- Main  --}}
    <main id="main">
        {{-- Hero Section - Home Page --}}
        <section id="hero" class="hero">
            <img src="{{asset('asset/images/hero-bg.jpg')}}" alt="" data-aos="fade-in">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Our Website</h2>
                        <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites
                            with Bootstrap</p>
                    </div>
                    <div class="col-lg-5">
                        <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" class="btn btn-primary" value="Sign up">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->
        <!-- ======= Services Section ======= -->
        @include('master.services')
        <!-- End Services Section -->
       
        <!-- Contact Section - Home Page -->
        @include('master.contact')
        <!-- End Contact Section -->
    </main>
    {{-- End Main --}}
    @include('master.footer')



    <script src = "{{asset('asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>