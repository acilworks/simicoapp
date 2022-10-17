@extends('layouts.main')

@section('container')

<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register Card -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
                <a href="/" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo"></span>
                    <span class="app-brand-text demo text-body fw-bolder">Simico</span>
                </a>

              </div>
            <!-- /Logo -->
            <h4 class="mb-2">Lets starts here!</h4>
            {{-- <p class="mb-4">Make your work easy and fun! 🚀</p> --}}

            <form id="formAuthentication" class="mb-3" action="/register" method="post">
                @csrf

              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control @error('name')is-invalid @enderror"
                  id="name"
                  name="name"
                  placeholder="Enter your name"
                  required 
                  value="{{ old('name') }}"
                  autofocus

                />

                @error('name')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input
                  type="text"
                  class="form-control @error('username')is-invalid @enderror"
                  id="username"
                  name="username"
                  placeholder="Enter your username"
                  required 
                  value="{{ old('username') }}"
                  
                />

                @error('username')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input
                  type="text"
                  class="form-control @error('nik')is-invalid @enderror"
                  id="nik"
                  name="nik"
                  placeholder="Enter your nik"
                  required 
                  value="{{ old('nik') }}"
                  
                />

                @error('nik')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="hp" class="form-label">Phone</label>
                <input
                  type="text"
                  class="form-control @error('hp')is-invalid @enderror"
                  id="hp"
                  name="hp"
                  placeholder="Enter your telegram phone number"
                  required 
                  value="{{ old('hp') }}"

                />
                @error('hp')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input 
                  type="text" 
                  class="form-control @error('email')is-invalid @enderror" 
                  id="email" 
                  name="email" 
                  placeholder="Enter your email" 
                  required 
                  value="{{ old('email') }}"

                  />
                  @error('email')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control @error('password')is-invalid @enderror"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password"
                    required
                  />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                
                  @error('password')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
                @enderror
                </div>
              </div>

              {{-- <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                  <label class="form-check-label" for="terms-conditions">
                    I agree to
                    <a href="javascript:void(0);">privacy policy & terms</a>
                  </label>
                </div>
              </div> --}}
              <button class="btn btn-primary d-grid w-100">Sign up</button>
            </form>

            <p class="text-center">
              <span>Already have an account?</span>
              <a href="/">
                <span>Sign in instead</span>
              </a>
            </p>
          </div>
        </div>
        <!-- Register Card -->
      </div>
    </div>
  </div>

  <!-- / Content -->