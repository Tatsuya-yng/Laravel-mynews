@extends('layouts.admin')
@section('title', 'ニュースの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ニュース編集</h2>
                <form action="{{ action('Admin\NewsController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $news_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                    <div class="col-md-10">
                        <input type="radio" name="性別" value="男" /> 男　
　　　　　　　　　　　　<input type="radio" name="性別" value="女" /> 女
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                              <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                    　　<input type="text" id="hobby" name="hobby" value="{{ old('hobby') }}">
                    </div>
                    </div>
                         <div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                        <input type="text" id="introduction" name="introduction" value="{{ old('introduction') }}">
                     </div>
                    </div>
                    　　
                    　　
                            <div class="form-text text-info">
                                設定中: {{ $news_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $news_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection