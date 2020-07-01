@extends('layouts.app')

@section('title-block')
    Home
@endsection

@section('content')

    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem cupiditate dolor doloribus enim
        excepturi facilis illo laborum nulla, perferendis quibusdam quo reprehenderit repudiandae sapiente sint
        temporibus unde, vero voluptates.
    </p>

@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
