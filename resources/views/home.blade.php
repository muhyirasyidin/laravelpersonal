@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Anda telah login!!</h1>
                    <br>
                    <h3>Silahkan pilih kemana tujuan anda, pada pilihan diatas</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
