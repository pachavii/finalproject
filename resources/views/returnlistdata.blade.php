@extends('app')

@section('content')
<div class="container-fluid">
    <div class="container">
        <img src="https://images.unsplash.com/photo-1536965764833-5971e0abed7c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" class="img-fluid cropped">
        <div class="topleft">รายการหนังสือคืน</div>
        </div>
	<br><br><br><br>
    <returnlistdata style="margin-left:30%;" id="{!!$data!!}"></returnlistdata>
</div>
@endsection