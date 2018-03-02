@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, blanditiis consectetur distinctio dolor iusto natus ratione reprehenderit vel velit veniam. Alias at eligendi ex, harum ipsa quasi quisquam soluta tenetur.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection