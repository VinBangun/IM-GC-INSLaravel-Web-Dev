@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Halo, {{ $first_name }} {{ $last_name }} </h3>
                    </div>
                    <div class="card-body">
                        <p class="mb-2"><strong>Nama Depan Kamu:</strong></p>
                        <p>{{ $first_name }}</p>
                        <p class="mb-2"><strong>Nama Belakang Kamu:</strong></p>
                        <p>{{ $last_name }}</p>
                        <p class="mb-2"><strong>Jenis Kelamin:</strong></p>
                        <p>{{ $gender }}</p>
                        <p class="mb-2"><strong>Kebangsaan:</strong></p>
                        <p>{{ $nationality }}</p>
                        <p class="mb-2"><strong>Bahasa Yang Dikuasai:</strong></p>
                        <p>{{ $language }}</p>
                        <p class="mb-2"><strong>Bio:</strong></p>
                        <p>{{ $bio }}</p>
                        <!-- Tampilkan isian lainnya sesuai kebutuhan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
