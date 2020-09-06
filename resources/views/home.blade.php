@extends('layouts.master')

@section('content')
<div class="container">
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

                    You are logged in! <br>
                    @if (auth()->user()->role == 'admin')
                        <br><a href="/siswa"><button type="button" class="btn btn-dark">Go to Data Siswa</button></a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
