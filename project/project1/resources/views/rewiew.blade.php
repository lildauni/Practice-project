@extends('layout')
@section('title')
    Rewiews
@endsection
@section('main_content')
@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="container" style="max-width: 500px">
        <form action="/rewiew/check" method="post">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" id="email" placeholder="Enter email" class="form-control">
            </div>
            <div class="mb-3">
                <input type="text" name="subject" id="subject" placeholder="Enter rewiew" class="form-control">
            </div>
            <div class="mb-3">
                <textarea name="message" id="message" class="form-control" placeholder="Enter message"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Send</button>
            </div>
        </form>
    </div>
    <br>
    <h1>All rewiews</h1>
    @foreach($rewiews as $el)
        <div class="alert alert-warning">
            <h3>{{ $el->subject }}</h3>
            <b>{{ $el->email }}</b>
            <p>{{ $el->message }}</p>
        </div>
    @endforeach
@endsection
