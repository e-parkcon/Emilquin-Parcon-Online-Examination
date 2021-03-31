@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Add New Song</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    New Song
                </div>

                <div class="card-body">

                    <form action="{{ route('song.store') }}" method="POST">
                        @csrf

                        <div class="row g-2">
                            <div class="col-md-12">
                                <label for="title">Title :</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="artist">Name of Artist :</label>
                                <input type="text" class="form-control" name="artist" id="artist" placeholder="Artist" required>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="lyrics">Lyrics :</label>
                                <textarea name="lyrics" id="lyrics" class="form-control" cols="30" rows="10" style="resize: none"></textarea>
                            </div>

                            
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-sm btn-primary">Save New Song</button>
                                <a href="{{ route('home') }}" class="btn btn-sm btn-danger">Back to Lists</a>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection