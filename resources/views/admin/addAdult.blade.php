@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add an adult cat') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{action('AdminController@create')}}" enctype="multipart/form-data">
                        @csrf

                        <!-- IMAGE-->
                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" id="namesInputs"
                                    class="form-control @error('name') is-invalid @enderror" name="image"
                                    value="{{ old('image') }}" required autocomplete="image" autofocus>
                            </div>
                        </div>

                        <!-- NAME-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" id="namesInputs"
                                    class="form-control @error('name') is-invalid @enderror" name="catName"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <!-- AGE-->
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control" name="age" value="{{ old('age') }}"
                                    required autocomplete="email">
                            </div>
                        </div>

                        <!-- SEX-->
                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                            <div class="col-md-6">
                                <input id="sex" type="text" class="form-control @error('password') is-invalid @enderror"
                                    name="sex" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- DESCRIPTION-->
                        <div class="form-group row">
                            <label for="description"
                                class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text"
                                    class="form-control @error('password') is-invalid @enderror" name="description"
                                    required autocomplete="new-password"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="register" class="btn btn-info">
                                    {{ __('Send') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection