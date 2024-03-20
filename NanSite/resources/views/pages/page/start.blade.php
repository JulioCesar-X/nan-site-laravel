@extends('master.main')
<title> Welcome </title>
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-2 align-self-center user-card">
           @component('components.cards.user-card',['user' => $user])@endcomponent
       </div>
    </div>
    <div>
        @component('components.gallery.course-gallery', ['user' => $user])@endcomponent
    </div>

</div>
@endsection
