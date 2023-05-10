@extends('layouts.app')

@section('title', 'Home Page | SchemaDoc')

@section('scripts')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/css/libraries.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('content')
    <div>
        <section class="page-title page-title-layout1 bg-overlay">
            <div class="bg-img"><img src="assets/images/page-titles/7.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <h1 class="pagetitle__heading">Providing Care for The Sickest In Community. </h1>
                        <p class="pagetitle__desc">Medcity has been present in Europe since 1990, offering innovative
                            solutions,
                            specializing in medical services for treatment of medical infrastructure.
                        </p>
                    </div><!-- /.col-xl-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->

        <section class="team-layout3 pb-40">
            <div class="container">
                <a href="{{ route('doctor.create') }}" class="btn btn__primary btn__rounded mb-50">
                    <span>Add New Doctor</span>
                    <i class="icon-arrow-right"></i>
                </a>
                <div class="row">
                    @foreach ($doctors as $item)
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="member">
                                <div class="member__img">
                                    <img src="{{ asset('storage/' . $item->photo) }}" alt="member img">
                                </div><!-- /.member-img -->
                                <div class="member__info">
                                    <h5 class="member__name"><a href="doctors-single-doctor1.html">{{ $item->name }}</a></h5>
                                    <p class="member__job">{{ $item->specialization }}</p>
                                    <p class="member__desc">{{ $item->description }}</p>
                                </div><!-- /.member-info -->
                            </div><!-- /.member -->
                        </div><!-- /.col-lg-4 -->
                    @endforeach
                </div> <!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.Team layout 3  -->

        <div class="container">
            @include('includes.footer')
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
