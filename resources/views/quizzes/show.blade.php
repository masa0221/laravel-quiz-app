@extends('layouts.base')
@section('title', 'Quiz 管理 - 問題の内容')

@section('content')
  <h1>Quiz 管理 - 問題の内容</h1>
  @if (empty($quiz))
  <div class="col mt-3 mb-5">
    <span>問題が見つかりませんでした</span>
  </div>
  @else
  <div class="col mt-3 mb-5">
    <h2>問題</h2>
    <div class="pl-2">
      <div class="mt-1">
        <p>{!! nl2br(e($quiz->question)) !!}</p>
      </div>

      <div class="mt-1">
        <ol class="pl-4" style="list-style-type: upper-alpha">
            <li>{{ $quiz->answer_a }}</li>
            <li>{{ $quiz->answer_b }}</li>
            <li>{{ $quiz->answer_c }}</li>
            <li>{{ $quiz->answer_d }}</li>
        </ol>
      </div>
    </div>
  </div>

  <div class="col mt-3 mb-5">
    <h2>答え</h2>
    <div class="pl-2">
      <span>選択肢: {{ $quiz->correct_answer }}</span>
      <p>
          {!! nl2br(e($quiz->explanation)) !!}
      </p>
    </div>
  </div>
  <div class="mt-3 mb-5 text-center">
    <a href="{{ route('quizzes.index') }}" type="button" class="btn btn-link">一覧に戻る</a>
  </div>
  @endif
@endsection
