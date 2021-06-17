@extends('layouts.app')

@section('content')
    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{ url('/img/hmm2.jpg') }}" alt="First slide">
                    {{--                    <div class="container">--}}
                    {{--                        <div class="carousel-caption text-left">--}}
                    {{--                            <h1>Example headline.</h1>--}}
                    {{--                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>--}}
                    {{--                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{ url('/img/hmm.jpg') }}" alt="Second slide">
                    {{--                    <div class="container">--}}
                    {{--                        <div class="carousel-caption">--}}
                    {{--                            <h1>Another example headline.</h1>--}}
                    {{--                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>--}}
                    {{--                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{ url('/img/hmm3.jpg') }}" alt="Third slide">
                    {{--                    <div class="container">--}}
                    {{--                        <div class="carousel-caption text-right">--}}
                    {{--                            <h1>One more for good measure.</h1>--}}
                    {{--                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>--}}
                    {{--                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing ">

            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top p-5" src="{{ url('/img/deadline.svg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Assign Due Dates</h4>
                            {{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                            {{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top p-5" src="{{ url('/img/goal.svg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Keep Goals and Objectives Separate</h4>
                            {{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                            {{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card text-center " style="width: 18rem;">
                        <img class="card-img-top p-5" src="{{ url('/img/repeat.svg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Revise Your To-Do Lists Daily</h4>
                            {{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                            {{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                    </div>
                </div>
            </div>


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Increases <span class="text-muted">Productivity.</span>
                    </h2>
                    <p class="lead">A to do list allows you to prioritize the tasks that are more important. This means you don’t waste time on tasks that don’t require your immediate attention. Your list will help you stay focused on the tasks that are the most important.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="{{ url('/img/pic2.webp') }}"
                         alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Helps <span
                            class="text-muted">with motivation</span></h2>
                    <p class="lead">To do lists are a great motivational tool because you can use them to clarify your goals. You can divide your long-term goal into smaller, more achievable short-term goals and as you tick each one off your list, your confidence will increase.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="{{ url('/img/pic3.jpg') }}"
                         alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">


            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>
@endsection
