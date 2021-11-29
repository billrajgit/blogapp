@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Form Blog</h1>
    <hr>
    <form action="{{ isset($blog)
                        ?route("blog.update",$blog)
                        :route("blog.store") }}"
        method="post">
        @isset($blog)
            @method("PUT")
        @endisset
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama"
                value="{{ isset($blog)?$blog->nama:"" }}">
        </div>
        <div class="form-group float-right">
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
</div>
@endsection

