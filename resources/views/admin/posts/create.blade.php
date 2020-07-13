@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <h1 class="mt-3 mb-3">Crea post</h1>
                </div>

                <form class="" action="{{route('admin.posts.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="titolo">Titolo</label>
                        <input type="text" name="title" class="form-control" id="titolo" placeholder="Titolo post" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="testo">Testo articolo</label>
                        <textarea type="text" name="content" class="form-control" id="testo" placeholder="Scrivi qualcosa...">{{ old('content') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>


            </div>

        </div>

    </div>

@endsection
