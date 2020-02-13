{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'マイプロフィール')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>マイプロフィール</h2>
            </div>
        </div>
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
                <p>{{ $profile_form->name }}</p>
            </div>
        </div>
          <div class="form-group row">
            <label class="col-md-2" for="gender">性別</label>
            <div class="col-md-10">
                <p>{{ $profile_form->gender }}</p>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="hobby">趣味</label>
            <div class="col-md-10">
                <p>{{ $profile_form->hobby}}</p>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="introduction">自己紹介欄</label>
            <div class="col-md-10">
                <p>{{ $profile_form->introdution }}</p>
            </div>
        </div>
        <td>
         <div>
          <a href="{{ action('Admin\ProfileController@edit', ['id' => $profile_form->id]) }}">編集</a>
         </div>
        </td>
       </div>
</div>
@endsection
