@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
                <div class="card-header">入力画面</div>

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
                      <input type="text" name="point"><br>

                      確認日時(必須)<br>
                      <input type="datetime-local" name="date"><br>

                      波のサイズ(必須)<br>
                      <select name="size">
                        <option value="">---</option>
                        <option value="1">フラット〜スネ</option>
                        <option value="2">スネ〜ヒザ</option>
                        <option value="3">ヒザ〜モモ</option>
                        <option value="4">モモ〜コシ</option>
                        <option value="5">コシ〜ハラ</option>
                        <option value="6">ハラ〜ムネ</option>
                        <option value="7">ムネ〜カタ</option>
                        <option value="8">カタ〜アタマ</option>
                        <option value="9">アタマ〜アタマ半</option>
                        <option value="10">アタマ半〜ダブル</option>
                      </select><br>

                      面の状況(必須)<br>
                      <select name="w_condition">
                        <option value="">---</option>
                        <option value="1">面ツル</option>
                        <option value="2">ザワついている</option>
                        <option value="3">ジャンク</option>
                        <option value="4">クローズアウト</option>
                      </select><br>

                      波数(必須)<br>
                      <select name="number">
                        <option value="">---</option>
                        <option value="1">少ない</option>
                        <option value="2">少な目</option>
                        <option value="3">普通</option>
                        <option value="4">多目</option>
                        <option value="5">多い</option>
                      </select><br>

                      波の状態(必須)<br>
                      <select name="state">
                        <option value="">---</option>
                        <option value="1">切れた波</option>
                        <option value="2">速い波</option>
                        <option value="3">つながった波</option>
                        <option value="4">ワイドな波</option>
                        <option value="5">ダンパー</option>
                        <option value="6">トロい波</option>
                        <option value="7">トロ速い波</option>
                        <option value="8">トロダンパー</option>
                        <option value="9">ホレた波</option>
                        <option value="10">厚い波</option>
                        <option value="11">トロ厚い波</option>
                        <option value="12">厚速い波</option>
                        <option value="13">三角波</option>
                        <option value="14">チューブ</option>
                        <option value="15">ショアブレイク</option>
                        <option value="16">風波</option>
                        <option value="17">フラット</option>
                      </select><br>

                      風向き(必須)<br>
                      <select name="direction">
                        <option value="">---</option>
                        <option value="1">北</option>
                        <option value="2">北東</option>
                        <option value="3">東</option>
                        <option value="4">南東</option>
                        <option value="5">南</option>
                        <option value="6">南西</option>
                        <option value="7">西</option>
                        <option value="8">北西</option>
                      </select><br>

                      人数(必須)<br>
                      <select name="people">
                          <option value="">---</option>
                          <option value="1">0人</option>
                          <option value="2">1~5人</option>
                          <option value="3">5~15人</option>
                          <option value="4">16〜30人</option>
                          <option value="5">31〜50人</option>
                          <option value="6">51人〜</option>
                        </select><br>

                    <input type="submit" class="btn btn-info" value="登録する">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
