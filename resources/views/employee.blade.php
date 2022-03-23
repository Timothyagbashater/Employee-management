@extends('layouts.app')

@section('content')
<div class="container-fliud">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Employee Registeration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('createEmployee') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="department" class="col-md-4 col-form-label text-md-end">{{ __('Department ') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="department" type="department" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department"> -->
                                <select class="form-select @error('department') is-invalid @enderror" aria-label="Default select example" name="department" value="{{ old('department') }}" required autocomplete="department">
                                    <option selected> Select Department </option>
                                    <option value="Adminstration">Adminstration</option>
                                    <option value="Programming">Programming</option>
                                    <option value="Business">Business</option>
                                    <option value="Legal">Legal </option>

                                    @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="rank" class="col-md-4 col-form-label text-md-end">{{ __(' Rank ') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="rank" type="text" class="form-control @error('rank') is-invalid @enderror" name="rank" value="{{ old('rank') }}" required autocomplete="rank">

                                @error('rank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                                <select class="form-select @error('rank') is-invalid @enderror" aria-label="Default select example" name="rank" value="{{ old('rank') }}" required autocomplete="rank">
                                    <option value=""> Select Rank </option>
                                    <option value="Programmer">Programmer</option>
                                    <option value="Technical Lead">Technical Lead</option>
                                    <option value="Human Resource Manager">Human Resource Manager</option>

                                    @error('rank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </select>
                            </div>

                        </div>


                        <div class="row mb-3">
                            <label for="dob" class="col-md-4 col-form-label text-md-end">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required autocomplete="dob">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('House Address') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="stateOfOrigin" type="text" class="form-control @error('stateOfOrigin') is-invalid @enderror" name="stateOfOrigin" value="{{ old('stateOfOrigin') }}" required autocomplete="stateOfOrigin" autofocus>

                                @error('stateOfOrigin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror -->
                                <select class="form-select @error('country') is-invalid @enderror" aria-label="Default select example" name="country" value="{{ old('country') }}" required autocomplete="country">
                                    <option value=""> Select Country </option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United Arab Emirate">United Arab Emirate </option>
                                    <option value="South Africa">South Africa </option>
                                    <option value="Bokinafasu">Bokinafasu </option>
                                    <option value="Demark">Demark </option>
                                    <option value="Franca">Franca</option>
                                    <option value="Madagaska">Madagaska </option>
                                    <option value="Egypt">Egypt </option>

                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </select>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="stateOfOrigin" class="col-md-4 col-form-label text-md-end">{{ __('State Of Origin') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="stateOfOrigin" type="text" class="form-control @error('stateOfOrigin') is-invalid @enderror" name="stateOfOrigin" value="{{ old('stateOfOrigin') }}" required autocomplete="stateOfOrigin" autofocus>

                                @error('stateOfOrigin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror -->
                                <select class="form-select @error('stateOfOrigin') is-invalid @enderror" aria-label="Default select example" name="stateOfOrigin" value="{{ old('stateOfOrigin') }}" required autocomplete="stateOfOrigin">
                                    <option value=""> Select State Of Origin </option>
                                    <option value="Abia">Abia</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Cross River">Cross River</option>

                                    @error('stateOfOrigin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Local Government Area') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="lga" type="text" class="form-control @error('lga') is-invalid @enderror" lga="lga" value="{{ old('lga') }}" required autocomplete="lga" autofocus>

                                @error('lga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror -->
                                <select class="form-select @error('lga') is-invalid @enderror" aria-label="Default select example" name="lga" value="{{ old('lga') }}" required autocomplete="lga">
                                    <option value=""> Select Local Government Area </option>
                                    <option value="Arochuku">Arochuku</option>
                                    <option value="Buruku">Buruku</option>
                                    <option value="Yakurr">Yakurr</option>

                                    @error('lga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </select>


                                <!-- <div class="mb-3">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="image" required class="course form-control">
                                </div> -->
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Save') }}
                                </button>
                                <!-- <a href="{{URL::route('createEmployee')}}"><button class="btn btn-success">{{__('Save')}}</button></a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection