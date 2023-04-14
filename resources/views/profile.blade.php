<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
</head>

<body>
    @include('layout.sidebar')
    <!-- Main Content -->

    <div class="main-content">
        <section class="section">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card ">
                    <form method="post" class="needs-validation" novalidate="">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" value="Regina" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" value="Cahyaningtyas" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the last name
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-7 col-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="regina@gmail.com" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the email
                                    </div>
                                </div>
                                <div class="form-group col-md-5 col-12">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Bio</label>
                                    <textarea class="form-control summernote-simple">.</textarea>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="form-group mb-0 col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                                        <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                                        <div class="text-muted form-text">
                                            You will get new information about products, offers and promotions
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
    </section>
    </div>

</body>


<!-- General JS Scripts -->
<script src="{{ asset('assets/modules/jquery.min.js')}}"></script>
<script src="{{ asset('assets/modules/popper.js')}}"></script>
<script src="{{ asset('assets/modules/tooltip.js')}}"></script>
<script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{ asset('assets/modules/moment.min.js')}}"></script>
<script src="{{ asset('assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<script src="{{ asset('assets/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{ asset('assets/modules/chart.min.js')}}"></script>
<script src="{{ asset('assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{ asset('assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('assets/js/page/index-0.js')}}"></script>

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>
</body>

</html>