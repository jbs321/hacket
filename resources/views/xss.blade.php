@extends('layouts.app')

@section('content')

<div class="container" style="margin-bottom: 10px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('XSS') }}</div>

                <div class="card-body">
                    <form method="POST" action="/xss">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="message" class="col-md-4 col-form-label text-md-end">{{ __('message') }}</label>

                            <div class="col-md-6">
                                <textarea id="message" type="message" class="form-control @error('message') is-invalid @enderror" name="message" required autocomplete="current-message" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    @foreach ($posts as $post)
        <div class="row justify-content-center" style="margin-bottom: 10px">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $post->name }}
                        <form method="POST" action="/xss/{{$post->id}}" style="float: right">
                            @csrf
                            <button type="submit">X</button>
                        </form>
                    </div>

                    <div class="card-body">
                        {!! $post->message !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection