<header>
  <div class="header_wrap">
      <div class="header_inner">
          <a href="/" class="header_logo" style="">
              <img src="{{asset('assets/user/images/header/logo.svg')}}" alt="保育ひろば">
          </a>
          <form action="/nurseries" method="get">
              <div class="header_search_block">
                  <div class="header_search_main" id="HeaderInput">
                      <input type="text" name="keyword" class="header_search_input" placeholder="">
                      <p class="header_search_placeholder" id="HeaderPlaceHolder">
                          <span>キーワードで探す</span><span>地域で探す</span>
                      </p>
                  </div>
                  <button type="submit" class="header_search_submit">
                      <img src="{{asset('assets/user/images/header/search_icon_white.svg')}}" alt="検索">
                  </button>
              </div>
          </form>
          <div class="header_sub">
              <a href="/register" class="header_register_link">会員登録(無料)</a>
              <button type="button" class="header_menu_btn" id="HeaderMenuBtn">
                  <span class="top"></span>
                  <span class="middle"></span>
                  <span class="bottom"></span>
              </button>
          </div>
      </div>
  </div>

  <div class="header_filter" id="HeaderFilter"></div>
  <div class="header_menu_block" id="HeaderWindow">
      <div class="header_menu_head">
          <a href="/" class="header_logo" style="">
              <img src="{{asset('assets/user/images/header/logo.svg')}}" alt="保育ひろば">
          </a>
          <button type="button" class="header_menu_btn active" id="HeaderCloseBtn">
              <span class="top"></span>
              <span class="middle"></span>
              <span class="bottom"></span>
          </button>
      </div>
                  <!-- before login -->
          <div class="header_menu_inner">
              <div class="header_menu_btnarea">
                  <a href="/login" class="header_login_btn">ログイン</a>
                  <a href="/register" class="header_register_btn">会員登録</a>
              </div>
              <a href="/register" target="_blank" rel="noopener noreferrer" class="top_mv_bnr_block">
                  <img src="{{asset('assets/user/images/header/manu_march.png')}}" alt="記念キャンペーン" class="header_menu_bnr">
              </a>
              <div class="header_menu_search_block">
                  <div class="header_menu_title_block">
                      <p class="header_menu_title">口コミ・評判を探す</p>
                  </div>
                  <form action="/nurseries" method="get">
                      <div class="header_menu_search_main">
                          <input type="text" name="keyword" class="header_menu_search_input" placeholder="キーワードを入力">
                          <button type="submit" class="header_menu_search_submit">
                              <img src="{{asset('assets/user/images/header/search_icon_gray.svg')}}" alt="検索">
                          </button>
                      </div>
                  </form>
              </div>
              
              <div class="header_menu_area_block">
                  <div class="header_menu_title_block">
                      <p class="header_menu_title">エリアから口コミ・評判をさがす</p>
                  </div>
                  <ul class="header_menu_area_list">
                      <li class="header_menu_area_item">
                          <a href="#" class="header_menu_area_link top_area_link" data-area="kanto">関東</a>
                      </li>
                      <li class="header_menu_area_item">
                          <a href="#" class="header_menu_area_link top_area_link" data-area="kinki">関西</a>
                      </li>
                      <li class="header_menu_area_item">
                          <a href="#" class="header_menu_area_link top_area_link" data-area="tokai">東海</a>
                      </li>
                      <li class="header_menu_area_item">
                          <a href="#" class="header_menu_area_link top_area_link" data-area="hokkaido_tohoku">北海道・東北</a>
                      </li>
                      <li class="header_menu_area_item">
                          <a href="#" class="header_menu_area_link top_area_link" data-area="hokuriku">北陸・甲信越</a>
                      </li>
                      <li class="header_menu_area_item">
                          <a href="#" class="header_menu_area_link top_area_link" data-area="tyugoku_shikoku">中国・四国</a>
                      </li>
                      <li class="header_menu_area_item">
                          <a href="#" class="header_menu_area_link top_area_link" data-area="kyusyu">九州・沖縄</a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="school-sp_popup_block SchoolPop AreaPop" id="PlaceWindow" style="display: none;">
          <form action="/nurseries" method="get">
              <div class="school-sp_popup_head mb0">
                  <h3 class="school-sp_popup_title">
                      都道府県で絞り込む
                  </h3>
                  <button type="button" class="school-sp_popup_close_btn PopCloseBtn">キャンセル</button>
              </div>
              <div class="school-sp_popup_inner btn_fixed">
                  <div class="school-sp_popup_place_box" id="kanto">
                      <h3 class="school-sp_popup_place_title">関東</h3>
                      <ul class="school-sp_popup_place_list">
                      </ul>
                  </div>
                  <div class="school-sp_popup_place_box" id="hokkaido_tohoku">
                    <h3 class="school-sp_popup_place_title">北海道・東北</h3>
                    <ul class="school-sp_popup_place_list">
                    </ul>
                  </div>
                  <div class="school-sp_popup_place_box" id="hokuriku">
                    <h3 class="school-sp_popup_place_title">北陸・甲信越</h3>
                    <ul class="school-sp_popup_place_list">
                    </ul>
                  </div>
                  <div class="school-sp_popup_place_box" id="tokai">
                    <h3 class="school-sp_popup_place_title">東海</h3>
                    <ul class="school-sp_popup_place_list">
                    </ul>
                  </div>
                  <div class="school-sp_popup_place_box" id="kinki">
                    <h3 class="school-sp_popup_place_title">関西</h3>
                    <ul class="school-sp_popup_place_list">
                    </ul>
                  </div>
                  <div class="school-sp_popup_place_box" id="tyugoku_shikoku">
                    <h3 class="school-sp_popup_place_title">中国・四国</h3>
                    <ul class="school-sp_popup_place_list">
                    </ul>
                  </div>
                  <div class="school-sp_popup_place_box" id="kyusyu">
                    <h3 class="school-sp_popup_place_title">九州・沖縄</h3>
                    <ul class="school-sp_popup_place_list">
                    </ul>
                  </div>
              </div>
              <div class="school-sp_popup_fixed_btnarea AreaSearch">
                  <button type="submit" class="school-sp_popup_fixed_submit" disabled="">条件を確定する</button>
              </div>
          </form>
      </div>
  </div>
</header>
<script>

function templateLIELMENT(id, name) {
  var temp = '<li class="school-sp_popup_place_item PrefectureSelect">\
                  <label class="school-sp_popup_place_label">\
                      <input type="radio" name="prefecture_id" value="'+id+'">\
                      <span>'+name+'</span>\
                  </label>\
              </li>'
  return temp;
}
$(document).ready(function() {

// AJAX call on button click
  $.ajax({
    url: "/get-prefecture-region",
    type: "GET",
    success: function(data){
      $("#kanto>ul").empty();
      $("#hokkaido_tohoku>ul").empty();
      $("#hokuriku>ul").empty();
      $("#tokai>ul").empty();
      $("#kinki>ul").empty();
      $("#tyugoku_shikoku>ul").empty();kinki
      $("#kyusyu>ul").empty();
      for(var i=0;i<data.prefectureData.length;i++){
        if(data.prefectureData[i].main_id == 7){
          $("#kyusyu>ul").append(templateLIELMENT(data.prefectureData[i].id, data.prefectureData[i].name));
        }
        else if(data.prefectureData[i].main_id == 6){
          $("#tyugoku_shikoku>ul").append(templateLIELMENT(data.prefectureData[i].id, data.prefectureData[i].name));
        }
        else if(data.prefectureData[i].main_id == 5){
          $("#kinki>ul").append(templateLIELMENT(data.prefectureData[i].id, data.prefectureData[i].name));
        }
        else if(data.prefectureData[i].main_id == 4){
          $("#tokai>ul").append(templateLIELMENT(data.prefectureData[i].id, data.prefectureData[i].name));
        }
        else if(data.prefectureData[i].main_id == 3){
          $("#hokuriku>ul").append(templateLIELMENT(data.prefectureData[i].id, data.prefectureData[i].name));
        }
        else if(data.prefectureData[i].main_id == 1){
          $("#hokkaido_tohoku>ul").append(templateLIELMENT(data.prefectureData[i].id, data.prefectureData[i].name));
        }
        else if(data.prefectureData[i].main_id == 2){
          $("#kanto>ul").append(templateLIELMENT(data.prefectureData[i].id, data.prefectureData[i].name));
        }
      }
      
        $(".PrefectureSelect").on("click", function () {
            $(".AreaSearch")
                .find(".school-sp_popup_fixed_submit")
                .prop("disabled", false);
        });
    }
  });
});

</script>
