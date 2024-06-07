<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Quiz 管理</title>
</head>

<body>
    <span>Quiz管理トップページ</span>
<div class="container"> -->
@extends('layouts.base')
@section('title', 'Quiz 管理')
@section('content')

  <h1>Quiz 管理</h1>
  <div class="row mt-5 mb-3">
    <div class="col text-right">
      <a href="./create" type="button" class="btn btn-primary">追加</a>
    </div>
  </div>
  <div class="row my-3">
    <table class="table" id="quizzes-table">
      <thead class="thead-light">
        <tr>
          <th scope="col" style="width:10%">#</th>
          <th scope="col">問題</th>
          <th scope="col" style="width:10%">操作</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><a href="./show">問題1問題1問題1</a></td>
          <td><button type="button" class="delete-quiz btn btn-danger btn-sm">削除</button></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td><a href="./show">問題2問題2問題2</a></td>
          <td><button type="button" class="delete-quiz btn btn-danger btn-sm">削除</button></td>
        </tr>
      </tbody>
    </table>
  </div>
<!-- </div>
</body>

</html> -->
@endsection