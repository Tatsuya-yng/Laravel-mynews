
{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィール作成画面')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール新規作成画面</h2>
            </div>
        </div>
    </div>
@endsection
   <form action="{{ action('Admin\NewsController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    <div class="form group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                    <div class="col-md-10">
                        <input type="radio" name="性別" value="男" /> 男　
　　　　　　　　　　　　<input type="radio" name="性別" value="女" /> 女
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                    　　<input type="text" id="hobby" name="hobby">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <input type="text" id="introduction" name="introduction">
                    </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
                  </div>
            

