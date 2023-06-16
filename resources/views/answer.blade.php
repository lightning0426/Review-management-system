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
            <form>
                <div class="step post_bg_wrap post_start" >
                    <h1 class="post_title01">口コミを投稿する</h1>
                            
                    <div class="post_bnr_block">
                        <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/bnr01_both_new.png" alt="記念キャンペーン">
                    </div>
                    <div class="common_pc">
                        <button type="button" @click="goTo(2)" class="post_btn">
                            口コミを投稿<img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/btn_icon.svg" alt="口コミを投稿">
                        </button>
                    </div>
       
                
                    <div class="common_sp">
                        <button type="button" @click="goTo()" class="post_btn">
                            口コミを投稿<img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/btn_icon.svg" alt="口コミを投稿">
                        </button>
                    </div>
                    <div class="post_privacy_block">
                        <h3 class="post_privacy_title">保育ひろばは、<br class="common_sp_640">ユーザー様の個人情報を守ります</h3>
                        <p class="post_privacy_text">
                            投稿者情報は、年代・性別等の一般的な属性部分のみを掲載します。個人情報を適切に管理し、裁判所または行政機関からの開示命令・要請がない限り、ユーザー様の同意なく第三者に開示することはありません。
                        </p>
                    </div>
                    <h2 class="post_title02">
                        口コミにおける個人情報は<br class="common_sp_640">下記のように表示されます
                    </h2>
                    <ul class="post_review_list">
                        <li class="post_review_item" 
                        style="border: 1px #555555 solid; border-radius: 10px; padding: 25px 25px 20px; background-color: white;">
                            <div class="post_review_head">
                                <div class="post_review_head_main">
                                    <p class="post_review_head_subtitle">
                                        昭和女子大学附属 昭和こども園 の口コミ・評判
                                    </p>
                                    <div class="post_review_head_title_block">
                                        <h3 class="post_review_head_title">業務量</h3>
                                        <p class="post_review_head_text good-color">
                                            <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/face_icon01.svg" alt="良い点"	>良い点	
                                        </p>
                                    </div>
                                </div>
                                <div class="post_review_head_sub">
                                    <p class="post_review_head_rate_title">評価 :</p>
                                    <div class="post_review_head_rate">
                                        <ul class="school_star_list">
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg" alt="star10">
                                            </li>
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg" alt="star10">
                                            </li>
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg" alt="star10">
                                            </li>
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star08.svg" alt="star8">
                                            </li>
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg" alt="star0">
                                            </li>
                                        </ul>
                                        <p class="post_review_head_rate_num">3.8</p>
                                    </div>
                                </div>
                            </div>
                            <p class="post_review_info">
                                <span>〇〇〇〇さん(女性・正社員)</span>
                                <span>勤務時期:2019年~2021年</span>
                            </p>
                            <div class="post_review_box">
                                <p class="post_review_text PostText">
                                    <span data-text="予習・復習を含めた勉強スケジュールや、宿題の量を日ごとに細かく管理してくれました。試験本番までの自分の道筋が明確にできた点がよかったです。完全個別指導で親身になって対応してくれたので、安心して任せられました。">予習・復習を含めた勉強スケジュールや、宿題の量を日ごとに細かく管理してくれました。試験本番までの自分の道筋が明確にできた点がよかったです。完全個別指導で親身になって対応してくれたので、安心して任せられました。</span>
                                    <button type="button" class="post_review_read_more ReadMoreBtn">もっと見る</button>
                                </p>
                            </div>
                            <div class="post_review_btnarea">
                                <button type="button" class="post_review_like_btn LikeBtn">
                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon.svg" alt="like" class="normal">
                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon_active.svg" alt="like" class="active">
                                    <span>いいね！</span>
                                    <small>27</small>
                                </button>
                                <p class="post_review_report_btn PopBtn" data-pop="Report">報告する</p>
                            </div>
                        </li>
                    </ul>
                </div>       
                
                <div class="step post_bg_wrap post_start" >
                    <h1 class="post_title01">口コミを投稿する</h1>
                            
                    <div class="post_bnr_block">
                        <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/bnr01_both_new.png" alt="記念キャンペーン">
                    </div>
                    <div class="common_pc">
                        <button type="button" @click="goTo(2)" class="post_btn">
                            口コミを投稿<img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/btn_icon.svg" alt="口コミを投稿">
                        </button>
                    </div>
       
                    <template v-if="showSearch">
                        <div class="post_search_main">
                            <h2 class="post_title03">口コミを投稿する保育施設の検索</h2>
                            <div class="post_search_block">
                            <input type="text" name="" class="post_search_input" placeholder="ネオキャリア" autofocus v-model="nurseryNameInput" @keypress.enter="enterSearchNursery" >
                            <button type="button" class="post_search_submit_btn" @click="searchNursery">
                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/serch_icon.svg" alt="search">
                            </button>
                            </div>
                            <p class="post_info_text">
                            <span>※匿名でご回答いただけます</span><span>※在籍中もしくは退職済​みの保育園が対象です。</span>
                            </p>
                        </div>
                        <div class="post_search_sub">
                            <searched-nurseries-component :searched-nurseries="searchedNurseries.data" :go-to="goTo" :select-nursery="selectNursery" :user-id=1392></searched-nurseries-component>
                            <div class="align_center">
                            <button type="button" class="post_others_link" @click="goTo()">見つからない場合はこちら</button>
                            </div>
                        </div>
                    </template>
                
                    <div class="common_sp">
                        <button type="button" @click="goTo()" class="post_btn">
                            口コミを投稿<img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/btn_icon.svg" alt="口コミを投稿">
                        </button>
                    </div>
                    <div class="post_privacy_block">
                        <h3 class="post_privacy_title">保育ひろばは、<br class="common_sp_640">ユーザー様の個人情報を守ります</h3>
                        <p class="post_privacy_text">
                            投稿者情報は、年代・性別等の一般的な属性部分のみを掲載します。個人情報を適切に管理し、裁判所または行政機関からの開示命令・要請がない限り、ユーザー様の同意なく第三者に開示することはありません。
                        </p>
                    </div>
                    <h2 class="post_title02">
                        口コミにおける個人情報は<br class="common_sp_640">下記のように表示されます
                    </h2>
                    <ul class="post_review_list">
                        <li class="post_review_item" 
                        style="border: 1px #555555 solid; border-radius: 10px; padding: 25px 25px 20px; background-color: white;">
                            <div class="post_review_head">
                                <div class="post_review_head_main">
                                    <p class="post_review_head_subtitle">
                                        昭和女子大学附属 昭和こども園 の口コミ・評判
                                    </p>
                                    <div class="post_review_head_title_block">
                                        <h3 class="post_review_head_title">業務量</h3>
                                        <p class="post_review_head_text good-color">
                                            <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/face_icon01.svg" alt="良い点"	>良い点	
                                        </p>
                                    </div>
                                </div>
                                <div class="post_review_head_sub">
                                    <p class="post_review_head_rate_title">評価 :</p>
                                    <div class="post_review_head_rate">
                                        <ul class="school_star_list">
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg" alt="star10">
                                            </li>
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg" alt="star10">
                                            </li>
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg" alt="star10">
                                            </li>
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star08.svg" alt="star8">
                                            </li>
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg" alt="star0">
                                            </li>
                                        </ul>
                                        <p class="post_review_head_rate_num">3.8</p>
                                    </div>
                                </div>
                            </div>
                            <p class="post_review_info">
                                <span>〇〇〇〇さん(女性・正社員)</span>
                                <span>勤務時期:2019年~2021年</span>
                            </p>
                            <div class="post_review_box">
                                <p class="post_review_text PostText">
                                    <span data-text="予習・復習を含めた勉強スケジュールや、宿題の量を日ごとに細かく管理してくれました。試験本番までの自分の道筋が明確にできた点がよかったです。完全個別指導で親身になって対応してくれたので、安心して任せられました。">予習・復習を含めた勉強スケジュールや、宿題の量を日ごとに細かく管理してくれました。試験本番までの自分の道筋が明確にできた点がよかったです。完全個別指導で親身になって対応してくれたので、安心して任せられました。</span>
                                    <button type="button" class="post_review_read_more ReadMoreBtn">もっと見る</button>
                                </p>
                            </div>
                            <div class="post_review_btnarea">
                                <button type="button" class="post_review_like_btn LikeBtn">
                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon.svg" alt="like" class="normal">
                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon_active.svg" alt="like" class="active">
                                    <span>いいね！</span>
                                    <small>27</small>
                                </button>
                                <p class="post_review_report_btn PopBtn" data-pop="Report">報告する</p>
                            </div>
                        </li>
                    </ul>
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
    export default {
    data() {
        return {
        step: 1,
        // Add other data properties here
        };
    },
    methods: {
        showPostForm() {
        this.step = 2;
        },
        // Add other methods here
    },
    };

    var currentStep = 0;
    $(".step > .nextButton").onClick(){

    var steps =         $(".step);
    for(let );
    steps[i].hide();
    steps[++currentStep].show();
    }

// function templateLOption(id, name) {
//     var temp = '<option value="'+id+'" >'+name+'</option>';
//     return temp;
// }

// function templateQOption(id, name) {
//     var temp = '<li class="form_check_item">\
//                     <label class="form_check_label">\
//                         <input type="checkbox" name="qualifications[]" value="'+id+'" >\
//                         <span>'+name+'</span>\
//                     </label>\
//                 </li>'
//     return temp;
// }
// $(document).ready(function() {
    
//     $("#birthdayYear").empty();
//     $("#birthdayMonth").empty();
//     $("#birthdayDay").empty();
    
//     $("#birthdayYear").append('<option value="">年</option>');
//     $("#birthdayMonth").append('<option value="">月</option>');
//     $("#birthdayDay").append('<option value="">日</option>');
//     for (i=1932;i<2006;i++)
//         $("#birthdayYear").append('<option value="'+i+'" >'+i+'</option>');
//     for (i=1;i<=12;i++)
//         $("#birthdayMonth").append('<option value="'+i+'" >'+i+'</option>');
//     for (i=1;i<=31;i++)
//         $("#birthdayDay").append('<option value="'+i+'" >'+i+'</option>');

// // AJAX call on button click

//     // if ($('#name').val() === '' || $('#birthdayYear').val() === '' || $('#birthdayMonth').val() === '' || $('#birthdayDay').val() === '' || $('#gender').val() === '' || $('#postcode').val() === '' || $('#prefecture_dropdown').val() === '' || $('#qualification_list').val() === '' || $('#email').val() === '' || $('#password').val() === '') {
//     //        document.getElementById('submit-btn').disabled = true;
//     // } else {
//     //        document.getElementById('submit-btn').disabled = false;
//     // }
//     if ($('#name').val() === '' || $('#birthdayYear').val() === '' || $('#birthdayMonth').val() === '' || $('#birthdayDay').val() === '' || $('#zip_code').val() === '' || $('prefecture_dropdown').val() === '' || $('#email').val() === '' || $('#password').val() === '' || $('#gender').val() === '' || $('input[name="qualifications[]"]:checked').length == 0 || !$('input[name="terms"]').is(':checked')) {
//            document.getElementById('submit-btn').disabled = true;
//     } else {
//            document.getElementById('submit-btn').disabled = false;
//     }
//     $('#name, #birthdayYear, #qualification_list, input[name="terms"], #birthdayMonth, #birthdayDay, #gender, #zip_code, #prefecture_dropdown,  #password, #email, input[name="terms"]').on('input change', function() {
//        if ($('#name').val() === '' || $('#birthdayYear').val() === '' || $('#birthdayMonth').val() === '' || $('#birthdayDay').val() === '' || $('#zip_code').val() === '' || $('#prefecture_dropdown').val() === '' || $('#email').val() === '' || $('#password').val() === '' || $('#gender').val() === '' ||$('input[name="qualifications[]"]:checked').length == 0 || !$('input[name="terms"]').is(':checked') ) {
//            document.getElementById('submit-btn').disabled = true;
//        } else {
//            document.getElementById('submit-btn').disabled = false;
//        }
//    });
   
// //     $('#name, #birthdayYear, #birthdayMonth, #birthdayDay, #gender, #postcode, #prefecture_dropdown, #postcode, #city_dropdown, #qualification_list, #password, #email').on('input change', function() {
// //        if ($('#name').val() === '' || $('#birthdayYear').val() === '' || $('#birthdayMonth').val() === '' || $('#birthdayDay').val() === '' || $('#gender').val() === '' || $('#postcode').val() === '' || $('#prefecture_dropdown').val() === '' || $('#qualification_list').val() === '' || $('#email').val() === '' || $('#password').val() === '') {
// //            document.getElementById('submit-btn').disabled = true;
// //        } else {
// //            document.getElementById('submit-btn').disabled = false;
// //        }
// //    });

//     $('#prefecture_dropdown').on('change', function() {
//         // Get selected value
//         var selected_prefecture_id = $(this).val();

//         console.log('Selected prefecture ID: ' + selected_prefecture_id);
        
//         // Make an AJAX request to retrieve matching cities
//         $.ajax({
//             url: '/get-cities-by-prefecture-id',
//             type: 'GET',
//             dataType: 'json',
//             data: { prefecture_id: selected_prefecture_id },
//             success: function(data) {
//                 // Clear second dropdown
//                 $('#city_dropdown').empty();

//                 // Populate second dropdown with matching cities
//                 $.each(data, function(key, value) {
//                     $('#city_dropdown').append('<option name="city_id" value="' + value.id + '">' + value.name + '</option>');
//                 });
//             }
//         });
//     });
//     // $.ajax({
//     // url: "/get-prefecture-region",
//     // type: "GET",
//     // success: function(data){
//     //     // Display fetched data in the data div
//     //     $("#qualification").empty();
//     //     $("#prefecture_select").append('<option :value="null">選択してください</option>');
//     //     for(var i=0;i<data.prefectureData.length;i++){
//     //         $("#prefecture_select").append(templateLOption(data.prefectureData[i].id, data.prefectureData[i].name));
//     //     }
//     //     j
//     //     // $(".PrefectureSelect").on("click", function () {
//     //     //     $(".AreaSearch")
//     //     //         .find(".school-sp_popup_fixed_submit")
//     //     //         .prop("disabled", false);
//     //     // });
//     // }
//     // });

//     $.ajax({
//     url: "/get-qualification",
//     type: "GET",
//     success: function(data){
//         // Display fetched data in the data div
//         $("#qualification_list").empty();
//         for(var i=0;i<data.qualificationData.length;i++){
//             $("#qualification_list").append(templateQOption(data.qualificationData[i].id, data.qualificationData[i].name));
//         }
        
//         // $(".PrefectureSelect").on("click", function () {
//         //     $(".AreaSearch")
//         //         .find(".school-sp_popup_fixed_submit")
//         //         .prop("disabled", false);
//         // });
//     }
//     });
// });
        
</script>
@endsection