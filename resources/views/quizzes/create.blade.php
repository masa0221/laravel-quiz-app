@extends('layouts.base')
@section('title', 'Quiz 管理 - 問題の追加')

@section('content')
  <h1>Quiz 管理 - 問題の追加</h1>
  <form method="POST" action="">
    @csrf
    <div class="mt-3 mb-5">
      <h2>問題</h2>
      <div class="form-group">
        <label for="questionTextarea">問題文</label>
        <textarea name="question" class="form-control" id="questionTextarea" rows="3"></textarea>
      </div>

      <div class="mt-1 ">
        <span>選択肢</span>
        <div class="input-group flex-nowrap my-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="answer-a">A</span>
          </div>
          <input name="answer_a" type="text" value="" class="form-control" placeholder="Aの答えを入力" aria-label="回答A" aria-describedby="answer-a">
        </div>
        <div class="input-group flex-nowrap my-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="answer-b">B</span>
          </div>
          <input name="answer_b" type="text" value="" class="form-control" placeholder="Bの答えを入力" aria-label="回答B" aria-describedby="answer-b">
        </div>
        <div class="input-group flex-nowrap my-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="answer-c">C</span>
          </div>
          <input name="answer_c" type="text" value="" class="form-control" placeholder="Cの答えを入力" aria-label="回答C" aria-describedby="answer-c">
        </div>
        <div class="input-group flex-nowrap my-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="answer-d">D</span>
          </div>
          <input name="answer_d" type="text" value="" class="form-control" placeholder="Dの答えを入力" aria-label="回答D" aria-describedby="answer-d">
        </div>
      </div>
    </div>

    <div class="mt-3 mb-5">
      <h2>正しい答え</h2>
      <div class="form-group">
        <label for="correctAnswerSelect">正しい選択肢</label>
        <select name="correct_answer" class="form-control" id="correctAnswerSelect">
          <option>正しい回答を選択...</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
        </select>
      </div>
      <div class="form-group">
        <label for="explanationTextarea">解説</label>
        <textarea name="explanation" class="form-control" id="explanationTextarea" rows="3"></textarea>
      </div>
    </div>
    <div class="mt-3 mb-5">
      <button type="submit" class="btn btn-primary">追加</button>
      <a href="./" type="button" class="btn btn-link">戻る</a>
    </div>
  </form>
@endsection
