@extends('layouts.app')

@section('content')
    <h1>Bem-vindo ao Sistema de Loja Online</h1>
    <div class="d-flex justify-content-around mt-5">
        <a href="{{ route('contents.index') }}" class="btn btn-primary btn-lg">Gerenciar Contents</a>
    </div>
    <div class="d-flex justify-content-around mt-5">
        <img src="https://scontent.fsjp13-1.fna.fbcdn.net/v/t1.18169-9/10372760_829803300373557_4942517070199807797_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=7b2446&_nc_ohc=jkGXqXEMSBkQ7kNvgFjT9t4&_nc_ht=scontent.fsjp13-1.fna&oh=00_AYDwNDCdwsa5q_ofCB2HhHhc7B0iytdWhRqaTWx7G0d5yg&oe=66AE26C3"
            height="500"
            style="border: 5px solid #2C3D50; border-radius: 5px;">
    </div>
@endsection