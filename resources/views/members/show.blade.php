@extends('layouts.app')

@section('title', 'Informações do Membro')

@section('content')

<div class="row justify-content-center">
    <div class="col-8">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <h3 class="profile-username text-center">{{$member->name}}</h3>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>
                            <i class="fas fa-hashtag"></i>ID
                        </b>
                        <a class="float-right">{{$member->id}} </a>
                    </li>
                    <li class="list-group-item">
                        <b>
                            <i class="fas fa-hashtag"></i>E-mail
                        </b>
                        <a class="float-right">{{$member->email}} </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection