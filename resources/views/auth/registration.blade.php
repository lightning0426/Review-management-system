@extends('layout')
  
@section('content')
<main class="common_main" id="signup_main">
    <div id="initData" data-user-infos=null>
    <div class="register_wrap">
        <div class="common_inner_s">
            <div class="pankuzu_block">
                <ul class="pankuzu_list">
                    <li class="pankuzu_item">
                        <a href="/" class="pankuzu_link">ホーム</a>
                    </li>
                    <li class="pankuzu_item">
                        会員登録
                    </li>
                </ul>
            </div>
            <form method="post" action="/confirm" onsubmit="return false;">
                <div class="register_bg_wrap register_form">
                    <h1 class="register_title">会員登録</h1>
                    <img src="{{asset('assets/user/images/form/banner.png')}}" alt="バナー" style="width:100%; text-align:center; margin-bottom:25px;">
                    <ul class="form_list register">
                        <li class="form_item">
                            <h2 class="form_title">ニックネーム<span>必須</span></h2>
                            <input type="text" name="name" class="form_input" placeholder="" v-model="userInfos.data.name">
                            <p class="form_error_text"></p>
                        </li>
                        <li class="form_item">
                            <h2 class="form_title">生年月日<span>必須</span></h2>
                            <div class="form_birth_block">
                                <select name="birthday_year" class="form_select FormSelect" id="birthdayYear">
                                    <option value="">年</option>
                                    <option value="1932">1932</option>
                                    <option value="2005">2005</option>
                                </select>
                                <p class="form_birth_text">年</p>
                                <select name="birthday_month" class="form_select FormSelect" id="birthdayMonth">
                                    <option value="">月</option>
                                    <option value="1">01</option>
                                    <option value="12">12</option>
                                </select>
                                <p class="form_birth_text">月</p>
                                <select name="birthday_day" class="form_select FormSelect" id="birthdayDay">
                                    <option value="">日</option>
                                    <option value="1">01</option>
                                    <option value="31">31</option>
                                </select>
                                <p class="form_birth_text">日</p>
                            </div>
                            <p class="form_error_text"></p>
                            <p class="form_error_text"></p>
                            <p class="form_error_text"></p>
                        </li>
                        <li class="form_item">
                            <h2 class="form_title">口コミを見たいエリア<span>必須</span></h2>
                            <div class="form_zip_block">
                                <p class="form_zip_title">郵便番号</p>
                                <input type="text" name="zip_code" class="form_input" placeholder="1600023" v-model="userInfos.data.zip_code">
                                <button type="button" class="form_zip_btn" click="getAddressInfoByZipcode">エリアを自動入力</button>
                            </div>
                            <div class="form_place_block">
                                <select name="prefecture_id" class="form_select FormSelect active" id="prefecture_select">
                                </select>
                                <select name="city_id" class="form_select FormSelect active city_id" v-model="userInfos.data.city_id">
                                    <option :value="null">選択してください</option>
                                    {{-- <option :value="city.id" v-for="city in userCities" :key="city.id">{{ city.name }}</option> --}}
                                </select>
                            </div>
                            <p class="form_error_text"></p>
                            <p class="form_error_text"></p>
                            <p class="form_error_text"></p>
                        </li>
                        <li class="form_item">
                            <h2 class="form_title">性別<span>必須</span></h2>
                            <div class="form_gender_block">
                                <label class="form_gender_label">
                                    <input type="radio" name="gender" value="2" v-model="userInfos.data.gender">
                                    <span>女性</span>
                                </label>
                                <label class="form_gender_label">
                                    <input type="radio" name="gender" value="1" v-model="userInfos.data.gender">
                                    <span>男性</span>
                                </label>
                            </div>
                            <p class="form_error_text"></p>
                        </li>
                        <li class="form_item">
                            <h2 class="form_title">保有資格<span>1つ以上を選択</span></h2>
                            <ul class="form_check_list" id="qualification_list">
                            </ul>
                            <p class="form_error_text"></p>
                        </li>
                        <li class="form_item">
                            <h2 class="form_title">メールアドレス<span>必須</span></h2>
                            <input
                                type="email"
                                name="email"
                                class="form_input"
                                placeholder=""
                                v-model="userInfos.data.email"
                            >
                            <p class="form_error_text"></p>
                        </li>
                        <li class="form_item">
                            <h2 class="form_title">パスワード<span>必須</span></h2>
                            <div class="form_pwd_block">
                                <input
                                    type="password"
                                    name="password"
                                    class="form_input"
                                    placeholder=""
                                    v-model="userInfos.data.password"
                                >
                                <button type="button" class="form_pwd_btn PwdBtn">
                                    <img src="{{asset('assets/user/images/form/pwd_active_icon.svg')}}" alt="見る" class="normal_icon">
                                    <img src="{{asset('assets/user/images/form/pwd_icon.svg')}}" alt="見ない" class="active_icon">
                                </button>
                            </div>
                            <p style="font-family: dnp-shuei-mgothic-std; margin-top:5px; ">※8字以上で設定してください</p>
                            
                        </li>
                    </ul>
                    <div class="form_privacy_block">
                        <label class="form_priacty_label">
                            <input type="checkbox" name="terms" value="1" v-model="userInfos.data.terms">
                            <p class="form_privacy_text">
                                <a href="https://www.neo-career.co.jp/policy/" target="_blank" rel="noopener noreferrer">個人情報の取り扱いについて</a> / <a href="/terms" target="_blank" rel="noopener noreferrer">利用規約</a><span>を確認し、同意します。</span>
                            </p>
                        </label>
                    </div>
                    <button
                        type="button"
                        class="common_btn01 center w320"
                        :class="{ disabled: v$.$silentErrors.length > 0 }"
                        onclick="submit();"
                    >確認画面に進む</button>
                </div>
            </form>
        </div>
    </div>
</main>

<!-- login popup -->
<div class="popup_filter" id="LoginFilter"></div>
<div class="popup_wrap" id="LoginWindow">
    <button type="button" class="popup_close_btn PopCloseBtn">
        <img src="{{asset('assets/user/images/popup/close_icon.svg')}}" alt="close">
    </button>
    <div class="popup_inner">
        <p class="popup_title">
            こちらの機能をお使い頂くには<br>
            会員登録が必要です
        </p>
        <a href="/register" class="common_btn01 radius-small">会員登録(無料)</a>
        <div class="align_center">
            <a href="/login" class="popup_login_link">ログインはこちら</a>
        </div>
    </div>
</div>

<script>

function templateLOption(id, name) {
    var temp = '<option value="'+id+'" >'+name+'</option>';
    return temp;
}

function templateQOption(id, name) {
    var temp = '<li class="form_check_item">\
                    <label class="form_check_label">\
                        <input type="checkbox" name="qualifications[]" value="'+id+'" v-model="userInfos.data.qualifications">\
                        <span>'+name+'</span>\
                    </label>\
                </li>'
    return temp;
}
$(document).ready(function() {
    
    $("#birthdayYear").empty();
    $("#birthdayMonth").empty();
    $("#birthdayDay").empty();
    
    $("#birthdayYear").append('<option value="">年</option>');
    $("#birthdayMonth").append('<option value="">月</option>');
    $("#birthdayDay").append('<option value="">日</option>');
    for (i=1932;i<2006;i++)
        $("#birthdayYear").append('<option value="'+i+'" >'+i+'</option>');
    for (i=1;i<=12;i++)
        $("#birthdayMonth").append('<option value="'+i+'" >'+i+'</option>');
    for (i=1;i<=31;i++)
        $("#birthdayDay").append('<option value="'+i+'" >'+i+'</option>');

// AJAX call on button click
    $.ajax({
    url: "/get-prefecture-region",
    type: "GET",
    success: function(data){
        // Display fetched data in the data div
        $("#qualification").empty();
        $("#prefecture_select").append('<option :value="null">選択してください</option>');
        for(var i=0;i<data.prefectureData.length;i++){
            $("#prefecture_select").append(templateLOption(data.prefectureData[i].id, data.prefectureData[i].name));
        }
        
        // $(".PrefectureSelect").on("click", function () {
        //     $(".AreaSearch")
        //         .find(".school-sp_popup_fixed_submit")
        //         .prop("disabled", false);
        // });
    }
    });

    $.ajax({
    url: "/get-qualification",
    type: "GET",
    success: function(data){
        // Display fetched data in the data div
        $("#qualification_list").empty();
        for(var i=0;i<data.qualificationData.length;i++){
            $("#qualification_list").append(templateQOption(data.qualificationData[i].id, data.qualificationData[i].name));
        }
        
        // $(".PrefectureSelect").on("click", function () {
        //     $(".AreaSearch")
        //         .find(".school-sp_popup_fixed_submit")
        //         .prop("disabled", false);
        // });
    }
    });
});
        
</script>
@endsection