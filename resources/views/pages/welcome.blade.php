@extends('template/main')

@section('content')
    <div class="mt-5">
        <h1>Welcome Subheading</h1>

        <nav class="bread" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Welcome</li>
            </ol>
        </nav>

        <div class="mt-5">
            <p></p>
        </div>

        <div class="divTxtSect1">
            <div class="txt1 mt-5 pb-5">
                <h1 class="titreSect1">Hello CodingSchool</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo veniam placeat ab iure, dolorem optio. </p>
            </div> 

            <div class="txt2 mt-5 mb-3">
                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quibusdam quos blanditiis aliquam, harum aperiam.</h6>
                <button class="mt-3 text-light bg-primary button1">About</button>
            </div>
        </div>

        <div class="mt-5 mb-3 bonus">
            <h3><b>Bonus :</b></h3>
            <p><b>URL actuelle :</b> </p>
            <p><b>URL précédente :</b> </p>
        </div>
    </div>

@endsection