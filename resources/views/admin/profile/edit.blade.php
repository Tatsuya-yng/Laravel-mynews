{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィール編集画面')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール編集画面</h2>
            </div>
        </div>
　　    <form action="" method="post" enctype="multipart/form-data">

            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-group row">
                <label class="col-md-2" for="name">氏名</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2" for="gender">性別</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="gender" value="{{ $profile_form->gender }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2" for="hobby">趣味</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="hobby" rows="5">{{ $profile_form->hobby}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2" for="introduction">自己紹介欄</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="introduction" rows="5">{{ $profile_form->introduction }}</textarea>
                </div>
            </div>
            
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
    　　</form>
    </div>
@endsection
