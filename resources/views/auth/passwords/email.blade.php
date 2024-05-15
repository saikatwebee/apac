
@extends('layouts.adminauth')
{{-- @extends('layouts.app') --}}
<style>
    #navbarDropdown{
        color: #fba043;
        position: relative;
        left:500px;
        font-size: 1.25rem;
    }
    .justify-content-center {
    margin-top: 80px;
    justify-content: center!important;
}
  .cancelling{
    background: red !important;
    color:white !important;
    border: none !important;
}
.alert {
    padding: 1rem 3rem 1rem 1rem;

}
</style>

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reset password</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" pattern="[a-zA-Z0-9._%+-]+@apacfin\.com"
                                       title="Please enter the official email address" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                                <a href="{{url('admin/dashboard_page/customer_list')}}" type="submit" class="btn btn-primary cancelling">
                                    {{ __('Cancel') }}
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
