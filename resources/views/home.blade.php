@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body bg-black text-white">
                        <h2 class="text-center"> Welcome {{ Auth::user()->name }}</h2>
                        <marquee behavior="" direction="">
                            Become a successful IT professional by channeling my technical knowledge
                            and skills to ensure personal and professional growth and contribute to organizational
                            prosperity. Pursue job opportunities in a competitive environment that will challenge
                            me to push my boundaries and expand my knowledge in the field of informatics
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
