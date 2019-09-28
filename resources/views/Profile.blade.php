@section('content')
        @extends('layouts.app')
        @section('content')

<section class="carousel" id="main-carousel">
        <!-- Jumbotron -->
        <div class="jumbotron p-0">

            <!-- Card image -->
            <div class="view overlay rounded-top">
            <img src="img/bg-2.jpg" class="img-fluid" alt="Sample image">
            <a href="#">
                <div class="mask rgba-white-slight"></div>
            </a>
            </div>

            <!-- Card content -->
            <div class="card-body text-center mb-3">

            <!-- Title -->
            <h2 class="card-title h3 my-4"><strong>Participatory Sensing in Kenya</strong></h2>
            <!-- Text -->
            <h3 class="card-text py-2">Preconditions for Successful Implementation</h3>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>

        <div class="card-group">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        </div>
@endsection        