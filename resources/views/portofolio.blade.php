@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="card mt-4 py-4 px-4">
            <div class="row">
                <div class="col-md-12 col-lg-2 text-center align-content-center">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                        class="rounded-circle img-size " alt="Photo">
                </div>
                <div class="col-md-12 col-lg-5 mt-4 mt-lg-0 align-content-center">
                    <h2 id="data-name">Danta</h2>
                    <p id="data-role">Full Stack Developer</p>
                    <div>
                        <button class="btn btn-success">Kontak</button>
                        <button class="btn btn-resume">Resume</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 mt-4 mt-lg-0 align-content-center">
                    <div class="row">
                        <div class="col-lg-4"><b>Availability</b></div>
                        <div class="col-lg-8" id="data-availability">Full Time</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"><b>Age</b></div>
                        <div class="col-lg-8" id="data-age">24 years</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"><b>Location</b></div>
                        <div class="col-lg-8" id="data-location">Jakarta</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"><b>Years of Experience</b></div>
                        <div class="col-lg-8" id="data-experience">2 years</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"><b>Email</b></div>
                        <div class="col-lg-8" id="data-email">rsudanta20@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card px-4 py-4 mt-4 container">
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name..">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control" name="role" id="role" placeholder="Role..">
                </div>
                <div class="mb-3">
                    <label for="availability" class="form-label">Availability</label>
                    <select class="form-select" name="availability" id="availability">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" name="age" id="age" placeholder="Usia..">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="Location..">
                </div>
                <div class="mb-3">
                    <label for="experience" class="form-label">Years of Experience</label>
                    <input type="text" class="form-control" name="experience" id="experience"
                        placeholder="Years of Experience..">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email..">
                </div>
                <button type="submit" class="btn btn-success w-100 btn-sm" id="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
