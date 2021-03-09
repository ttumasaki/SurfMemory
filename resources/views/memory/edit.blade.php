@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
                <div class="card-header">編集画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{route('memory.store')}}">
                    @csrf

                      確認ポイント(必須)<br>
                      <input type="text" name="point" value="{{ $memories->point }}"><br>

                      確認日時(必須)<br>
                      <input type="datetime-local" name="date" value="{{str_replace(" ", "T", $memories->date)}}"><br>

                      波のサイズ(必須)<br>
                      <select name="size">
                        <option value="">---</option>
                        <option value="1" @if($memories->size === 1) selected @endif>フラット〜スネ</option>
                        <option value="2" @if($memories->size === 2) selected @endif>スネ〜ヒザ</option>
                        <option value="3" @if($memories->size === 3) selected @endif>ヒザ〜モモ</option>
                        <option value="4" @if($memories->size === 4) selected @endif>モモ〜コシ</option>
                        <option value="5" @if($memories->size === 5) selected @endif>コシ〜ハラ</option>
                        <option value="6" @if($memories->size === 6) selected @endif>ハラ〜ムネ</option>
                        <option value="7" @if($memories->size === 7) selected @endif>ムネ〜カタ</option>
                        <option value="8" @if($memories->size === 8) selected @endif>カタ〜アタマ</option>
                        <option value="9" @if($memories->size === 9) selected @endif>アタマ〜アタマ半</option>
                        <option value="10" @if($memories->size === 10) selected @endif>アタマ半〜ダブル</option>
                      </select><br>

                      面の状況(必須)<br>
                      <select name="w_condition">
                        <option value="">---</option>
                        <option value="1" @if($memories->w_condition === 1) selected @endif>面ツル</option>
                        <option value="2" @if($memories->w_condition === 2) selected @endif>ザワついている</option>
                        <option value="3" @if($memories->w_condition === 3) selected @endif>ジャンク</option>
                        <option value="4" @if($memories->w_condition === 4) selected @endif>クローズアウト</option>
                      </select><br>

                      波数(必須)<br>
                      <select name="number">
                        <option value="">---</option>
                        <option value="1" @if($memories->number === 1) selected @endif>少ない</option>
                        <option value="2" @if($memories->number === 2) selected @endif>少な目</option>
                        <option value="3" @if($memories->number === 3) selected @endif>普通</option>
                        <option value="4" @if($memories->number === 4) selected @endif>多目</option>
                        <option value="5" @if($memories->number === 5) selected @endif>多い</option>
                      </select><br>

                      波の状態(必須)<br>
                      <select name="state">
                        <option value="">---</option>
                        <option value="1" @if($memories->state === 1) selected @endif>切れた波</option>
                        <option value="2" @if($memories->state === 2) selected @endif>速い波</option>
                        <option value="3" @if($memories->state === 3) selected @endif>つながった波</option>
                        <option value="4" @if($memories->state === 4) selected @endif>ワイドな波</option>
                        <option value="5" @if($memories->state === 5) selected @endif>ダンパー</option>
                        <option value="6" @if($memories->state === 6) selected @endif>トロい波</option>
                        <option value="7" @if($memories->state === 7) selected @endif>トロ速い波</option>
                        <option value="8" @if($memories->state === 8) selected @endif>トロダンパー</option>
                        <option value="9" @if($memories->state === 9) selected @endif>ホレた波</option>
                        <option value="10" @if($memories->state === 10) selected @endif>厚い波</option>
                        <option value="11" @if($memories->state === 11) selected @endif>トロ厚い波</option>
                        <option value="12" @if($memories->state === 12) selected @endif>厚速い波</option>
                        <option value="13" @if($memories->state === 13) selected @endif>三角波</option>
                        <option value="14" @if($memories->state === 14) selected @endif>チューブ</option>
                        <option value="15" @if($memories->state === 15) selected @endif>ショアブレイク</option>
                        <option value="16" @if($memories->state === 16) selected @endif>風波</option>
                        <option value="17" @if($memories->state === 17) selected @endif>フラット</option>
                      </select><br>

                      風向き(必須)<br>
                      <select name="direction">
                        <option value="">---</option>
                        <option value="1" @if($memories->direction === 1) selected @endif>北</option>
                        <option value="2" @if($memories->direction === 2) selected @endif>北東</option>
                        <option value="3" @if($memories->direction === 3) selected @endif>東</option>
                        <option value="4" @if($memories->direction === 4) selected @endif>南東</option>
                        <option value="5" @if($memories->direction === 5) selected @endif>南</option>
                        <option value="6" @if($memories->direction === 6) selected @endif>南西</option>
                        <option value="7" @if($memories->direction === 7) selected @endif>西</option>
                        <option value="8" @if($memories->direction === 8) selected @endif>北西</option>
                      </select><br>

                      人数(必須)<br>
                      <select name="people">
                          <option value="">---</option>
                          <option value="1" @if($memories->people === 1) selected @endif>0人</option>
                          <option value="2" @if($memories->people === 2) selected @endif>1~5人</option>
                          <option value="3" @if($memories->people === 3) selected @endif>5~15人</option>
                          <option value="4" @if($memories->people === 4) selected @endif>16〜30人</option>
                          <option value="5" @if($memories->people === 5) selected @endif>31〜50人</option>
                          <option value="6" @if($memories->people === 6) selected @endif>51人〜</option>
                        </select><br>

                    <input type="submit" class="btn btn-info" value="登録する">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
