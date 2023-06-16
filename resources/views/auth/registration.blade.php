@extends('layout')
  
@section('content')

<style>
    button#submit-btn {
  background: #04a88c;
  border-radius: 10px;
  color: #fff;
  display: block;
  font-size: 18px;
  font-weight: 700;
  height: 60px;
  letter-spacing: 1.5px;
  line-height: 60px;
  text-align: center;
  width: 100%;
  max-width: 320px;
  margin:0 auto;
}

button#submit-btn:hover {
  background: #024c3f;
  cursor: pointer;
}

button#submit-btn:disabled {
  background: #999;
  cursor: not-allowed;
}</style>

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
            <form method="post" action="{{ route('register.post') }}" onsubmit="return false;">
                @csrf
                <div class="register_bg_wrap register_form">
                    <h1 class="register_title">会員登録</h1>
                    <img src="{{asset('assets/user/images/form/banner.png')}}" alt="バナー" style="width:100%; text-align:center; margin-bottom:25px;">
                    <ul class="form_list register">
                        <li class="form_item">
                            <h2 class="form_title">ニックネーム<span>必須</span></h2>
                            <input type="text" id="name" name="name" class="form_input" placeholder="" v-model="userInfos.data.name">
                            <p class="form_error_text"></p>
                        </li>
                        <li class="form_item">
                            <h2 class="form_title">生年月日<span>必須</span></h2>
                            <div class="form_birth_block">
                                <select name="birthday_year" class="form_select FormSelect" id="birthdayYear">
                                    <option value="">年</option>
                                    <option value="1932" >1932</option>
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
                                <input type="text" id="zip_code" name="zip_code" class="form_input" placeholder="1600023" v-model="userInfos.data.zip_code">
                                <button type="button" class="form_zip_btn" click="getAddressInfoByZipcode">エリアを自動入力</button>
                            </div>
                            <div class="form_place_block">
                                <select name="prefecture_id" class="form_select FormSelect active" id="prefecture_dropdown">
                                     <option value="">選択してください</option>                                    
                                     @foreach ($prefectureData as $prefecture)
                                        <option name="prefecture_id" value="{{ $prefecture->id }}">{{ $prefecture->name}}</option>
                                     @endforeach              
                                    
                                   
                                </select>                                
                                <select name="city_id" class="form_select FormSelect active city_id" id="city_dropdown">
                                    <option value="null">選択してください</option>
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
                                    <input type="radio" id="gender" name="gender" value="1" v-model="userInfos.data.gender">
                                    <span>女性</span>
                                </label>
                                <label class="form_gender_label">
                                    <input type="radio" id="gender" name="gender" value="2" v-model="userInfos.data.gender">
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
                                id="email"
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
                                    id="password"
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
                    <!-- <button
                        type="button"
                        id="mmm"
                        class="common_btn01 center w320"
                        :class="{ disabled: v$.$silentErrors.length > 0 }" 
                        onclick="submit();"
                    >確認画面に進む</button> -->
                    <button
                        type="button"
                        id="submit-btn"
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
                        <input type="checkbox" name="qualifications[]" value="'+id+'" >\
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

    // if ($('#name').val() === '' || $('#birthdayYear').val() === '' || $('#birthdayMonth').val() === '' || $('#birthdayDay').val() === '' || $('#gender').val() === '' || $('#postcode').val() === '' || $('#prefecture_dropdown').val() === '' || $('#qualification_list').val() === '' || $('#email').val() === '' || $('#password').val() === '') {
    //        document.getElementById('submit-btn').disabled = true;
    // } else {
    //        document.getElementById('submit-btn').disabled = false;
    // }
    if ($('#name').val() === '' || $('#birthdayYear').val() === '' || $('#birthdayMonth').val() === '' || $('#birthdayDay').val() === '' || $('#zip_code').val() === '' || $('prefecture_dropdown').val() === '' || $('#email').val() === '' || $('#password').val() === '' || $('#gender').val() === '' || $('input[name="qualifications[]"]:checked').length == 0 || !$('input[name="terms"]').is(':checked')) {
           document.getElementById('submit-btn').disabled = true;
    } else {
           document.getElementById('submit-btn').disabled = false;
    }
    $('#name, #birthdayYear, #qualification_list, input[name="terms"], #birthdayMonth, #birthdayDay, #gender, #zip_code, #prefecture_dropdown,  #password, #email, input[name="terms"]').on('input change', function() {
       if ($('#name').val() === '' || $('#birthdayYear').val() === '' || $('#birthdayMonth').val() === '' || $('#birthdayDay').val() === '' || $('#zip_code').val() === '' || $('#prefecture_dropdown').val() === '' || $('#email').val() === '' || $('#password').val() === '' || $('#gender').val() === '' ||$('input[name="qualifications[]"]:checked').length == 0 || !$('input[name="terms"]').is(':checked') ) {
           document.getElementById('submit-btn').disabled = true;
       } else {
           document.getElementById('submit-btn').disabled = false;
       }
   });
   
//     $('#name, #birthdayYear, #birthdayMonth, #birthdayDay, #gender, #postcode, #prefecture_dropdown, #postcode, #city_dropdown, #qualification_list, #password, #email').on('input change', function() {
//        if ($('#name').val() === '' || $('#birthdayYear').val() === '' || $('#birthdayMonth').val() === '' || $('#birthdayDay').val() === '' || $('#gender').val() === '' || $('#postcode').val() === '' || $('#prefecture_dropdown').val() === '' || $('#qualification_list').val() === '' || $('#email').val() === '' || $('#password').val() === '') {
//            document.getElementById('submit-btn').disabled = true;
//        } else {
//            document.getElementById('submit-btn').disabled = false;
//        }
//    });

    $('#prefecture_dropdown').on('change', function() {
        // Get selected value
        var selected_prefecture_id = $(this).val();

        console.log('Selected prefecture ID: ' + selected_prefecture_id);
        
        // Make an AJAX request to retrieve matching cities
        $.ajax({
            url: '/get-cities-by-prefecture-id',
            type: 'GET',
            dataType: 'json',
            data: { prefecture_id: selected_prefecture_id },
            success: function(data) {
                // Clear second dropdown
                $('#city_dropdown').empty();

                // Populate second dropdown with matching cities
                $.each(data, function(key, value) {
                    $('#city_dropdown').append('<option name="city_id" value="' + value.id + '">' + value.name + '</option>');
                });
            }
        });
    });
    // $.ajax({
    // url: "/get-prefecture-region",
    // type: "GET",
    // success: function(data){
    //     // Display fetched data in the data div
    //     $("#qualification").empty();
    //     $("#prefecture_select").append('<option :value="null">選択してください</option>');
    //     for(var i=0;i<data.prefectureData.length;i++){
    //         $("#prefecture_select").append(templateLOption(data.prefectureData[i].id, data.prefectureData[i].name));
    //     }
    //     j
    //     // $(".PrefectureSelect").on("click", function () {
    //     //     $(".AreaSearch")
    //     //         .find(".school-sp_popup_fixed_submit")
    //     //         .prop("disabled", false);
    //     // });
    // }
    // });

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