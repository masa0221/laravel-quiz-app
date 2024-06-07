<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Quiz 管理</title>
</head>
<body>
<div class="container"> -->

@extends('layouts.base')
@section('title', 'Quiz 管理 - 問題の内容')

@section('content')

  <h1>Quiz 管理 - 問題の内容</h1>
  <div class="col mt-3 mb-5">
    <h2>問題</h2>
    <div class="pl-2">
      <div class="mt-1">
        <p>問題1問題1問題1</p>
      </div>
      <div class="mt-1">
        <ol class="pl-4" style="list-style-type: upper-alpha">
            <li>選択肢A</li>
            <li>選択肢B</li>
            <li>選択肢C</li>
            <li>選択肢D</li>
        </ol>
      </div>
    </div>
  </div>

  <div class="col mt-3 mb-5">
    <h2>答え</h2>
    <div class="pl-2">
      <span>選択肢: A</span>
      <p>
          解説解説解説
      </p>
    </div>
  </div>
  <div class="mt-3 mb-5 text-center">
    <a href="./" type="button" class="btn btn-link">一覧に戻る</a>
  </div>
<!-- </div>
</body>
</html> -->

@endsection