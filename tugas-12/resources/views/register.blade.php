@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Silahkan Isi Data Kamu!</div>
                <div class="card-body">
                    <form method="post" action="/register">
                        @csrf
                        <h3 class="mb-4">Daftar</h3>
                        <div class="form-group">
                            <label for="first_name">Nama Depan:</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Nama Belakang:</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                                <label class="form-check-label" for="male">Pria</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required>
                                <label class="form-check-label" for="female">Wanita</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="other" value="Other" required>
                                <label class="form-check-label" for="other">lainnya</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kebangsaan:</label>
                            <select class="form-select" name="nationality" id="nationality" required>
                                <option selected>Kebangsaan</option>
                                <option value="Indonesian">Indonesian</option>
                                <option value="Malaysian">Malaysian</option>
                                <option value="Singaporean">Singaporean</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bahasa:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="language" id="indonesia" value="Indonesia">
                                <label class="form-check-label" for="indonesia">Indonesia</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="language" id="english" value="English">
                                <label class="form-check-label" for="english">English</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="language" id="other-language" value="Other">
                                <label class="form-check-label" for="other-language">Other</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Bio:</label>
                            <textarea class="form-control" name="bio" id="bio" cols="30" rows="10" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
