@extends('layout')

@section('content')
<main class="common_main" id="nursery_main">
  <div id="initData"
      data-prefectures=[{"id":1,"area_master_id":1,"name":"\u5317\u6d77\u9053","alphabet":"hokkaido","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":2,"area_master_id":2,"name":"\u9752\u68ee\u770c","alphabet":"aomori","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":3,"area_master_id":2,"name":"\u5ca9\u624b\u770c","alphabet":"iwate","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":4,"area_master_id":2,"name":"\u5bae\u57ce\u770c","alphabet":"miyagi","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":5,"area_master_id":2,"name":"\u79cb\u7530\u770c","alphabet":"akita","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":6,"area_master_id":2,"name":"\u5c71\u5f62\u770c","alphabet":"yamagata","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":7,"area_master_id":2,"name":"\u798f\u5cf6\u770c","alphabet":"fukushima","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":8,"area_master_id":3,"name":"\u8328\u57ce\u770c","alphabet":"ibaraki","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":9,"area_master_id":3,"name":"\u6803\u6728\u770c","alphabet":"tochigi","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":10,"area_master_id":3,"name":"\u7fa4\u99ac\u770c","alphabet":"gunma","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":11,"area_master_id":3,"name":"\u57fc\u7389\u770c","alphabet":"saitama","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":12,"area_master_id":3,"name":"\u5343\u8449\u770c","alphabet":"chiba","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":13,"area_master_id":3,"name":"\u6771\u4eac\u90fd","alphabet":"tokyo","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":14,"area_master_id":3,"name":"\u795e\u5948\u5ddd\u770c","alphabet":"kanagawa","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":15,"area_master_id":4,"name":"\u65b0\u6f5f\u770c","alphabet":"niigata","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":16,"area_master_id":4,"name":"\u5bcc\u5c71\u770c","alphabet":"toyama","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":17,"area_master_id":4,"name":"\u77f3\u5ddd\u770c","alphabet":"ishikawa","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":18,"area_master_id":4,"name":"\u798f\u4e95\u770c","alphabet":"fukui","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":19,"area_master_id":4,"name":"\u5c71\u68a8\u770c","alphabet":"yamanashi","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":20,"area_master_id":4,"name":"\u9577\u91ce\u770c","alphabet":"nagano","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":21,"area_master_id":5,"name":"\u5c90\u961c\u770c","alphabet":"gifu","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":22,"area_master_id":5,"name":"\u9759\u5ca1\u770c","alphabet":"shizuoka","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":23,"area_master_id":5,"name":"\u611b\u77e5\u770c","alphabet":"aichi","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":24,"area_master_id":5,"name":"\u4e09\u91cd\u770c","alphabet":"mie","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":25,"area_master_id":6,"name":"\u6ecb\u8cc0\u770c","alphabet":"shiga","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":26,"area_master_id":6,"name":"\u4eac\u90fd\u5e9c","alphabet":"kyoto","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":27,"area_master_id":6,"name":"\u5927\u962a\u5e9c","alphabet":"osaka","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":28,"area_master_id":6,"name":"\u5175\u5eab\u770c","alphabet":"hyogo","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":29,"area_master_id":6,"name":"\u5948\u826f\u770c","alphabet":"nara","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":30,"area_master_id":6,"name":"\u548c\u6b4c\u5c71\u770c","alphabet":"wakayama","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":31,"area_master_id":7,"name":"\u9ce5\u53d6\u770c","alphabet":"tottori","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":32,"area_master_id":7,"name":"\u5cf6\u6839\u770c","alphabet":"shimane","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":33,"area_master_id":7,"name":"\u5ca1\u5c71\u770c","alphabet":"okayama","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":34,"area_master_id":7,"name":"\u5e83\u5cf6\u770c","alphabet":"hiroshima","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":35,"area_master_id":7,"name":"\u5c71\u53e3\u770c","alphabet":"yamaguchi","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":36,"area_master_id":8,"name":"\u5fb3\u5cf6\u770c","alphabet":"tokushima","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":37,"area_master_id":8,"name":"\u9999\u5ddd\u770c","alphabet":"kagawa","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":38,"area_master_id":8,"name":"\u611b\u5a9b\u770c","alphabet":"ehime","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":39,"area_master_id":8,"name":"\u9ad8\u77e5\u770c","alphabet":"kochi","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":40,"area_master_id":9,"name":"\u798f\u5ca1\u770c","alphabet":"fukuoka","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":41,"area_master_id":9,"name":"\u4f50\u8cc0\u770c","alphabet":"saga","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":42,"area_master_id":9,"name":"\u9577\u5d0e\u770c","alphabet":"nagasaki","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":43,"area_master_id":9,"name":"\u718a\u672c\u770c","alphabet":"kumamoto","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":44,"area_master_id":9,"name":"\u5927\u5206\u770c","alphabet":"oita","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":45,"area_master_id":9,"name":"\u5bae\u5d0e\u770c","alphabet":"miyazaki","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":46,"area_master_id":9,"name":"\u9e7f\u5150\u5cf6\u770c","alphabet":"kagoshima","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"},{"id":47,"area_master_id":9,"name":"\u6c96\u7e04\u770c","alphabet":"okinawa","created_at":"2022-10-26T07:53:40.000000Z","updated_at":"2022-10-26T07:53:40.000000Z"}]            data-cities=[]            data-facility-types=[{"id":1,"name":"\u8a8d\u53ef\u4fdd\u80b2\u5712","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":2,"name":"\u8a8d\u8a3c\u4fdd\u80b2\u5712","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":3,"name":"\u4e8b\u696d\u6240\u5185\u4fdd\u80b2","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":4,"name":"\u9662\u5185\u4fdd\u80b2","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":5,"name":"\u5c0f\u898f\u6a21\u4fdd\u80b2","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":6,"name":"\u5bb6\u5ead\u7684\u4fdd\u80b2\uff08\u4fdd\u80b2\u30de\u30de\uff09","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":7,"name":"\u5e7c\u7a1a\u5712","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":8,"name":"\u8a8d\u5b9a\u3053\u3069\u3082\u5712","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":9,"name":"\u8a17\u5150\u6240","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":10,"name":"\u75c5\u5150\u30fb\u75c5\u5f8c\u5150\u4fdd\u80b2\u5ba4","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":11,"name":"\u5150\u7ae5\u767a\u9054\u652f\u63f4\u65bd\u8a2d","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":12,"name":"\u5b50\u80b2\u3066\u3072\u308d\u3070","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":13,"name":"\u5b66\u7ae5","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":14,"name":"\u30d9\u30d3\u30fc\u30b7\u30c3\u30bf\u30fc\u30fb\u30ca\u30cb\u30fc","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-10-26T07:54:43.000000Z"},{"id":15,"name":"\u305d\u306e\u4ed6","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-11-02T05:02:41.000000Z"},{"id":16,"name":"\u4fdd\u80b2\u5712","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-11-02T05:00:14.000000Z"},{"id":17,"name":"\u8a2a\u554f\u578b\u4fdd\u80b2","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-11-02T05:03:26.000000Z"},{"id":18,"name":"\u653e\u8ab2\u5f8c\u7b49\u30c7\u30a4\u30b5\u30fc\u30d3\u30b9","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-11-02T05:04:23.000000Z"},{"id":19,"name":"\u4f01\u696d\u4e3b\u5c0e\u578b\u4fdd\u80b2","created_at":"2022-10-26T07:54:43.000000Z","updated_at":"2022-11-02T05:05:26.000000Z"}]            data-nursery-search-params={"prefecture_id":"","city_ids":[],"facility_type_ids":[],"keyword":null,"sort":"total_score","prefecture_ids":[],"old_prefecture_id":""}        >
  </div>
  <div class="school_wrap">
      <div class="school_inner">
          <div class="pankuzu_block">
              <div class="common_inner">
                  <ul class="pankuzu_list">
                      <li class="pankuzu_item">
                          <a href="https://hoikuhiroba-kuchikomi.com" class="pankuzu_link">ホーム</a>
                      </li>
                                                                          </ul>
              </div>
          </div>
          <div class="common_inner">
              <h1 class="school-all_title">
                  保育園一覧
              </h1>
              <div class="common_sp">
                  <form method="get" action="https://hoikuhiroba-kuchikomi.com/nurseries">
                      <h3 class="school-sp_search_title">検索条件</h3>
                      <div class="school-sp_search_block">
                          <div class="school-all_aside_keyword">
                              <input
                                  type="text"
                                  name="keyword"
                                  class="school-all_aside_input"
                                  placeholder="キーワードを入力"
                                  v-model="nurserySearchParams.data.keyword"
                              >
                              <button type="submit" class="school-all_aside_search_btn">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/search_icon_gray.svg" alt="search">
                              </button>
                          </div>
                          <ul class="school-sp_search_list">
                              <li class="school-sp_search_item">
                                  <p class="school-sp_search_item_title">
                                      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/place_icon.svg" alt="都道府県" class="place_icon">都道府県
                                  </p>
                                  <p class="school-sp_search_item_text PopBtn" :class="{ active: selectedPrefectureName !== '指定なし' }" data-pop="PlaceIndex">
                                      <span>{{ selectedPrefectureName }}</span>
                                  </p>
                              </li>
                              <li class="school-sp_search_item">
                                  <p class="school-sp_search_item_title">
                                      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/area_icon.svg" alt="市区町村" class="area_icon">市区町村
                                  </p>
                                  <p class="school-sp_search_item_text PopBtn" :class="{ active: selectedCityNames !== '指定なし' }" data-pop="Area" v-if="selectedPrefectureName !== '指定なし'">
                                      <span>{{ selectedCityNames }}</span>
                                  </p>
                              </li>
                              <li class="school-sp_search_item">
                                  <p class="school-sp_search_item_title">
                                      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/type_icon.svg" alt="施設形態" class="type_icon">施設形態
                                  </p>
                                  <p class="school-sp_search_item_text PopBtn" :class="{ active: selectedFacilityTypeNames !== '指定なし' }" data-pop="Type">
                                      <span>{{ selectedFacilityTypeNames }}</span>
                                  </p>
                              </li>
                          </ul>
                          
                          <input type="hidden" name="old_prefecture_id" :value="nurserySearchParams.data.prefecture_id">
                          <div class="school-sp_popup_block SchoolPop" id="PlaceIndexWindow" style="display: none;">
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
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="8" >
          <span>茨城県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="9" >
          <span>栃木県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="10" >
          <span>群馬県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="11" >
          <span>埼玉県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="12" >
          <span>千葉県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="13" >
          <span>東京都</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="14" >
          <span>神奈川県</span>
      </label>
  </li>
</ul>
                                  </div>
                                  <div class="school-sp_popup_place_box" id="hokkaido_tohoku">
                                      <h3 class="school-sp_popup_place_title">北海道・東北</h3>
                                      <ul class="school-sp_popup_place_list">
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="1" >
          <span>北海道</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="2" >
          <span>青森県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="3" >
          <span>岩手県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="4" >
          <span>宮城県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="5" >
          <span>秋田県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="6" >
          <span>山形県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="7" >
          <span>福島県</span>
      </label>
  </li>
</ul>
                                  </div>
                                  <div class="school-sp_popup_place_box" id="hokuriku">
                                      <h3 class="school-sp_popup_place_title">北陸・甲信越</h3>
                                      <ul class="school-sp_popup_place_list">
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="15" >
          <span>新潟県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="16" >
          <span>富山県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="17" >
          <span>石川県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="18" >
          <span>福井県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="19" >
          <span>山梨県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="20" >
          <span>長野県</span>
      </label>
  </li>
</ul>
                                  </div>
                                  <div class="school-sp_popup_place_box" id="tokai">
                                      <h3 class="school-sp_popup_place_title">東海</h3>
                                      <ul class="school-sp_popup_place_list">
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="21" >
          <span>岐阜県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="22" >
          <span>静岡県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="23" >
          <span>愛知県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="24" >
          <span>三重県</span>
      </label>
  </li>
</ul>
                                  </div>
                                  <div class="school-sp_popup_place_box" id="kinki">
                                      <h3 class="school-sp_popup_place_title">関西</h3>
                                      <ul class="school-sp_popup_place_list">
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="25" >
          <span>滋賀県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="26" >
          <span>京都府</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="27" >
          <span>大阪府</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="28" >
          <span>兵庫県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="29" >
          <span>奈良県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="30" >
          <span>和歌山県</span>
      </label>
  </li>
</ul>
                                  </div>
                                  <div class="school-sp_popup_place_box" id="tyugoku_shikoku">
                                      <h3 class="school-sp_popup_place_title">中国・四国</h3>
                                      <ul class="school-sp_popup_place_list">
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="31" >
          <span>鳥取県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="32" >
          <span>島根県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="33" >
          <span>岡山県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="34" >
          <span>広島県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="35" >
          <span>山口県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="36" >
          <span>徳島県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="37" >
          <span>香川県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="38" >
          <span>愛媛県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="39" >
          <span>高知県</span>
      </label>
  </li>
</ul>
                                  </div>
                                  <div class="school-sp_popup_place_box" id="kyusyu">
                                      <h3 class="school-sp_popup_place_title">九州・沖縄</h3>
                                      <ul class="school-sp_popup_place_list">
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="40" >
          <span>福岡県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="41" >
          <span>佐賀県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="42" >
          <span>長崎県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="43" >
          <span>熊本県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="44" >
          <span>大分県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="45" >
          <span>宮崎県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="46" >
          <span>鹿児島県</span>
      </label>
  </li>
      <li class="school-sp_popup_place_item PrefectureSelect">
      <label class="school-sp_popup_place_label">
          <input type="radio" name="prefecture_id" value="47" >
          <span>沖縄県</span>
      </label>
  </li>
</ul>
                                  </div>
                              </div>
                              <div class="school-sp_popup_fixed_btnarea AreaSearch">
                                  <button type="submit" class="school-sp_popup_fixed_submit" disabled>条件を確定する</button>
                              </div>
                          </div>
                          <div class="school-sp_popup_block SchoolPop" id="AreaWindow" style="display: none;">
                              <div class="school-sp_popup_head mb0">
                                  <h3 class="school-sp_popup_title">
                                      市区町村で絞り込む
                                  </h3>
                                  <button type="button" class="school-sp_popup_close_btn PopCloseBtn">キャンセル</button>
                              </div>
                              <div class="school-sp_popup_inner btn_fixed">
                                  <h3 class="school-sp_popup_place_title">{{ selectedPrefectureName }}の市町村</h3>
                                  <label class="school-all_aside_area_label">
                                      <input type="checkbox" name="" value="" @change="checkAllCities">
                                      <span class="all">すべて選択</span>
                                  </label>
                                  <ul class="school-sp_popup_area_list">
                                      <li class="school-sp_popup_area_item" v-for="city in cities" :key="`sp-${city.id}`">
                                          <label class="school-all_aside_area_label">
                                              <input
                                                  type="checkbox"
                                                  name="city_ids[]"
                                                  :value="city.id"
                                                  v-model="nurserySearchParams.data.city_ids"
                                              >
                                              <span>{{ city.name }}({{ city.opened_nurseries_count }})</span>
                                          </label>
                                      </li>
                                  </ul>
                              </div>
                              <div class="school-sp_popup_fixed_btnarea">
                                  <button type="submit" class="school-sp_popup_fixed_submit">条件を確定する</button>
                              </div>
                          </div>
                          <!-- 業態 -->
                          <div class="school-sp_popup_block SchoolPop" id="TypeWindow" style="display: none;">
                              <div class="school-sp_popup_head mb0">
                                  <h3 class="school-sp_popup_title">
                                      施設形態で検索する
                                  </h3>
                                  <button type="button" class="school-sp_popup_close_btn PopCloseBtn">キャンセル</button>
                              </div>
                              <div class="school-sp_popup_inner btn_fixed">
                                  <ul class="school-all_aside_type_list">
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="1"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>認可保育園(10)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="2"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>認証保育園(1)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="3"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>事業所内保育(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="4"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>院内保育(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="5"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>小規模保育(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="6"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>家庭的保育（保育ママ）(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="7"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>幼稚園(2)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="8"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>認定こども園(1)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="9"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>託児所(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="10"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>病児・病後児保育室(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="11"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>児童発達支援施設(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="12"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>子育てひろば(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="13"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>学童(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="14"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>ベビーシッター・ナニー(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="15"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>その他(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="16"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>保育園(4)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="17"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>訪問型保育(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="18"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>放課後等デイサービス(0)</span>
                                              </label>
                                          </li>
                                                                                      <li class="school-all_aside_type_item">
                                              <label class="school-all_aside_type_label">
                                                  <input
                                                      type="checkbox"
                                                      name="facility_type_ids[]"
                                                      :value="19"
                                                      v-model="nurserySearchParams.data.facility_type_ids"
                                                  >
                                                  <span>企業主導型保育(2)</span>
                                              </label>
                                          </li>
                                                                              </ul>
                              </div>
                              <div class="school-sp_popup_fixed_btnarea">
                                  <button type="submit" class="school-sp_popup_fixed_submit">条件を確定する</button>
                              </div>
                          </div>
                      </div>

                      <!-- 路線ver -->
                      
                      
                  </form>
              </div>
              <div class="school-all_result_block">
                  <div class="school-all_result_textarea">
                      <div class="school-all_result_main">
                          <p class="school-all_result_title">条件にあう保育園情報</p>
                          <p class="school-all_result_num"><span>22302</span>件</p>
                      </div>
                      <p class="school-all_result_text">(1~20件目を表示中)</p>
                  </div>
                  <div class="school-all_select_block">
                      <p class="school-all_select_title">表示順</p>
                      <select name="sort" class="school-all_select" v-model="nurserySearchParams.data.sort" @change="sortNurseries">
                                                              <option value="total_score">総合評価順</option>
                                                              <option value="number_of_reports">口コミの多い順</option>
                                                      </select>
                  </div>
              </div>
              <div class="school-all_layout_block">
                  <aside class="school-all_layout_aside">
                      <h3 class="school-all_aside_title">条件を絞り込む</h3>
                      <form method="get" action="https://hoikuhiroba-kuchikomi.com/nurseries">
                          <div class="school-all_aside_keyword">
                              <input type="text" name="keyword" class="school-all_aside_input" placeholder="キーワードを入力" v-model="nurserySearchParams.data.keyword">
                              <button type="submit" class="school-all_aside_search_btn">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/search_icon_gray.svg" alt="search">
                              </button>
                          </div>
                          <div class="mb30">
                              <div class="school-all_aside_box">
                                  <h3 class="school-all_aside_box_title">
                                      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/area_icon.svg" alt="エリアで検索する" class="area_icon">エリアで検索する
                                  </h3>
                                                                          <select name="prefecture_id" class="school-all_aside_select" v-model="nurserySearchParams.data.prefecture_id" @change="loadCities">
                                      <option :value="''">選択してください</option>
                                                                                      <option value="1">北海道</option>
                                                                                      <option value="2">青森県</option>
                                                                                      <option value="3">岩手県</option>
                                                                                      <option value="4">宮城県</option>
                                                                                      <option value="5">秋田県</option>
                                                                                      <option value="6">山形県</option>
                                                                                      <option value="7">福島県</option>
                                                                                      <option value="8">茨城県</option>
                                                                                      <option value="9">栃木県</option>
                                                                                      <option value="10">群馬県</option>
                                                                                      <option value="11">埼玉県</option>
                                                                                      <option value="12">千葉県</option>
                                                                                      <option value="13">東京都</option>
                                                                                      <option value="14">神奈川県</option>
                                                                                      <option value="15">新潟県</option>
                                                                                      <option value="16">富山県</option>
                                                                                      <option value="17">石川県</option>
                                                                                      <option value="18">福井県</option>
                                                                                      <option value="19">山梨県</option>
                                                                                      <option value="20">長野県</option>
                                                                                      <option value="21">岐阜県</option>
                                                                                      <option value="22">静岡県</option>
                                                                                      <option value="23">愛知県</option>
                                                                                      <option value="24">三重県</option>
                                                                                      <option value="25">滋賀県</option>
                                                                                      <option value="26">京都府</option>
                                                                                      <option value="27">大阪府</option>
                                                                                      <option value="28">兵庫県</option>
                                                                                      <option value="29">奈良県</option>
                                                                                      <option value="30">和歌山県</option>
                                                                                      <option value="31">鳥取県</option>
                                                                                      <option value="32">島根県</option>
                                                                                      <option value="33">岡山県</option>
                                                                                      <option value="34">広島県</option>
                                                                                      <option value="35">山口県</option>
                                                                                      <option value="36">徳島県</option>
                                                                                      <option value="37">香川県</option>
                                                                                      <option value="38">愛媛県</option>
                                                                                      <option value="39">高知県</option>
                                                                                      <option value="40">福岡県</option>
                                                                                      <option value="41">佐賀県</option>
                                                                                      <option value="42">長崎県</option>
                                                                                      <option value="43">熊本県</option>
                                                                                      <option value="44">大分県</option>
                                                                                      <option value="45">宮崎県</option>
                                                                                      <option value="46">鹿児島県</option>
                                                                                      <option value="47">沖縄県</option>
                                                                              </select>
                                  <ul class="school-all_aside_area_list">
                                      <li class="school-all_aside_area_item" v-for="city in cities" :key="city.id">
                                                                                          <label class="school-all_aside_area_label">
                                              <input type="checkbox" name="city_ids[]" :value="city.id" v-model="nurserySearchParams.data.city_ids">
                                              <span>{{ city.name }}({{ city.opened_nurseries_count }})</span>
                                          </label>
                                      </li>
                                  </ul>
                              </div>
                                                                      <div class="school-all_aside_box">
                                      <h3 class="school-all_aside_box_title">
                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/type_icon.svg" alt="施設形態で検索する" class="type_icon">施設形態で検索する
                                      </h3>
                                      <ul class="school-all_aside_type_list">
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=1" title="認可保育園"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="1" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>認可保育園(10)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=2" title="認証保育園"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="2" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>認証保育園(1)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=3" title="事業所内保育"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="3" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>事業所内保育(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=4" title="院内保育"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="4" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>院内保育(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=5" title="小規模保育"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="5" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>小規模保育(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=6" title="家庭的保育（保育ママ）"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="6" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>家庭的保育（保育ママ）(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=7" title="幼稚園"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="7" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>幼稚園(2)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=8" title="認定こども園"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="8" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>認定こども園(1)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=9" title="託児所"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="9" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>託児所(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=10" title="病児・病後児保育室"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="10" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>病児・病後児保育室(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=11" title="児童発達支援施設"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="11" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>児童発達支援施設(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=12" title="子育てひろば"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="12" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>子育てひろば(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=13" title="学童"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="13" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>学童(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=14" title="ベビーシッター・ナニー"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="14" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>ベビーシッター・ナニー(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=15" title="その他"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="15" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>その他(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=16" title="保育園"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="16" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>保育園(4)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=17" title="訪問型保育"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="17" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>訪問型保育(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=18" title="放課後等デイサービス"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="18" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>放課後等デイサービス(0)</span>
                                                  </label>
                                              </li>
                                                                                              <li class="school-all_aside_type_item">
                                                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids[]=19" title="企業主導型保育"></a>
                                                  <label class="school-all_aside_type_label">
                                                      <input type="checkbox" name="facility_type_ids[]" value="19" v-model="nurserySearchParams.data.facility_type_ids">
                                                      <span>企業主導型保育(2)</span>
                                                  </label>
                                              </li>
                                                                                      </ul>
                                  </div>
                                                              </div>
                          <button type="submit" class="common_btn02">条件を確定する</button>
                      </form>
                  </aside>
                                              <div class="school-all_layout_main">
<ul class="school-all_list">
              <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">西綾瀬りりおっこ保育園</h2>
  <p class="school_place_text">
      社会福祉法人東中川会 / 東京都足立区西綾瀬4-2-4
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star07.svg' alt='star07'>
                          </li>
          </ul>
          <p class="school_rate_num">4.7</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>8</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon02.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      広い園庭とテラスがあり、沢山の子ども達が園庭に出ても安全に遊べるスペースがありました。テラスも広く、2階のテラスでは乳児組がのびのびと水遊びを楽しんでいました。園舎は新しくはなかったですが、掃除も行き届き綺麗に保たれていて気持ち良く仕事ができました。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/18485/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">たいすい中央保育園</h2>
  <p class="school_place_text">
      社会福祉法人博秀会 / 三重県四日市市鵜の森1-10-20
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star05.svg' alt='star05'>
                          </li>
          </ul>
          <p class="school_rate_num">4.5</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>5</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon01.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">主任・園長との人間関係</h3>
                  <p class="school_talk_text">
                      仕事での悩みや相談は、とてもしやすく聞いて下さります。コミュニケーションもしっかり取れています。園長をはじめ、主任、副主任の方も優しく指導してくれます。また職員の人間関係を考慮してクラス配置もしてくれます。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/22795/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">企業主導型保育</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">Solaie Kids東武動物公園</h2>
  <p class="school_place_text">
      株式会社WITHホールディングス / 埼玉県南埼玉郡宮代町百間2-1-33
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star04.svg' alt='star04'>
                          </li>
          </ul>
          <p class="school_rate_num">4.4</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>8</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon02.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      窓が大きく開いていて全面ガラス張りです。明るく室内の様子がよく見えるので、保護者の方も、保育士も、子どもの様子がよく見えて安心です。屋根付きのバルコニーもあるので雨の日でも戸外の空気を吸ってリフレッシュできます！
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/22738/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">ちびっこランド姫路南園</h2>
  <p class="school_place_text">
      ちびっこランド姫路南園 / 兵庫県姫路市飾磨区上野田5丁目105
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star04.svg' alt='star04'>
                          </li>
          </ul>
          <p class="school_rate_num">4.4</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>8</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon03.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      園舎も綺麗で広々とし、気持ちの良い空間が沢山あります。先生も動きやすく部屋分けも綺麗にされておりトイレが複数あるのがまた保育をする上でとても便利です。
園庭も広く、横長でもあり幅もあります。
決まった砂場はありませんが柔らかい土のエリアもあり走ったり登ったりと運動遊びにも抜群です。
何より先生が楽しんでいます。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/705/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">幼稚園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">横須賀上町教会附属めぐみ幼稚園</h2>
  <p class="school_place_text">
      宗教法人日本基督教団横須賀上町教会　横須賀上町教会附属めぐみ幼稚園 / 神奈川県横須賀市上町2-43
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star04.svg' alt='star04'>
                          </li>
          </ul>
          <p class="school_rate_num">4.4</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>8</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon01.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      園舎は古いが温かみがある。数年前に改修工事を行なったため園舎の中はかなり綺麗になっている。保育室や園庭は広くはないが、園児数も少ないため狭く感じることはない。遊具は豊富ではないが、その分自然を取り入れた遊びも充実している。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/18017/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">幼稚園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">牛浜幼稚園</h2>
  <p class="school_place_text">
      学校法人髙橋文化学園 / 東京都福生市熊川960番地
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star02.svg' alt='star02'>
                          </li>
          </ul>
          <p class="school_rate_num">4.2</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>3</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon01.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      園庭がとても広く緑があり自然を感じられ子供達ものびのびとお外遊びを楽しめる環境です。全クラスが外に出ていても狭さを感じません。保育室も充分な広さがあり、1部屋ずつきちっとわかれているので、隣の部屋の音等気にならず集中して保育ができました。死角になるところがないのでこどもたちの様子が見やすかったです。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/22629/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">企業主導型保育</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">tenkids南花畑園</h2>
  <p class="school_place_text">
      株式会社Ten / 東京都足立区南花畑1丁目2-6 メゾンフルール1F
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star02.svg' alt='star02'>
                          </li>
          </ul>
          <p class="school_rate_num">4.2</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>3</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon02.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">職員同士の人間関係</h3>
                  <p class="school_talk_text">
                      みんな優しくて分からない事も丁寧に教えてくれるので、とても良い環境です！休憩時間には、プライベートの会話をして盛りあがったりしています。挨拶・感謝の気持ちを大切にしているので、自然と人間関係も良くなっています。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/22618/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">ゆめいろ保育園</h2>
  <p class="school_place_text">
      社会福祉法人夢工房 / 神奈川県横浜市鶴見区矢向3-11-48
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star02.svg' alt='star02'>
                          </li>
          </ul>
          <p class="school_rate_num">4.2</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>6</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon01.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      園内は木を基調とした温かみのある雰囲気。新しい施設なのか清潔があり、どこもとても綺麗です。園庭は中庭のみですが十分な広さ。大きな遊具一つと半分は走り回ることが出来、伸び伸びと遊ぶことができます。死角は少なく保育しやすいと思います。乳児は部屋を出てすぐに園庭があり、タイヤがあり登ったり降りたり、またお家のようにして遊んだり、砂場がありました。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/14586/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認定こども園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">わかば海津北こども園</h2>
  <p class="school_place_text">
      社会福祉法人誠心愛育会　わかば海津北こども園 / 岐阜県海津市海津町鹿野21-1　わかば海津北こども園
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star02.svg' alt='star02'>
                          </li>
          </ul>
          <p class="school_rate_num">4.2</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>3</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon02.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">職員同士の人間関係</h3>
                  <p class="school_talk_text">
                      上司の人への心配りや配慮を丁寧に行えば　職員間の仲も良く　その日の活動や準備に対しても　相談し合いながら　段取りよく助け合って物事を進めて行けたので　信頼関係も築けて　園内だけでなく親身に相談し合える仲間にで会えました。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/8166/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">アンジェリカ東品川保育園</h2>
  <p class="school_place_text">
      株式会社WITHホールディングス / 東京都品川区東品川4ー8ー8 新幹ビル1F
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star01.svg' alt='star01'>
                          </li>
          </ul>
          <p class="school_rate_num">4.1</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>8</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon02.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      ホールがきちんとあり、学芸会的な行事の際には舞台もきちんと設置されて本格的な舞台で披露出来るのは素晴らしいと思いました。なかなか、ここまで考えている園は無いと思います。運動会も同じ建物内で充分に出来る運動場を借りて出来るのも、別に小学校などの運動場を借りて行うよりも、荷物の移動ひとつとっても便利だと思いました。ただ、園庭はコンクリートで特に砂場も無かったのが残念でした。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認証保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">保育園夢未来錦糸町園</h2>
  <p class="school_place_text">
      株式会社我喜大笑 / 東京都墨田区太平3-3-12 アドバンス喜月ビル1階
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star01.svg' alt='star01'>
                          </li>
          </ul>
          <p class="school_rate_num">4.1</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>8</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon01.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">職員同士の人間関係</h3>
                  <p class="school_talk_text">
                      職員同士仲はいいですが、馴れ合いをするわけでもなく、何でも言い合える風通しの良い関係です。制作や保育内容に関しては、他のクラスとも相談することで、園全体で子ども達の育ちを考えられるようになっています。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/22679/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">明泰保育園</h2>
  <p class="school_place_text">
      社会福祉法人豊総会 / 愛知県一宮市木曽川町三ツ法寺字宮西３２８
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star01.svg' alt='star01'>
                          </li>
          </ul>
          <p class="school_rate_num">4.1</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>5</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon02.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      園舎は立て替えてそんなに経ってないので、とても綺麗です。平屋で、木を活かした施設になっています。
乳児は床暖があり、過ごしやすいです。
園庭には、そこまで大きくはありませんが、1クラスが充分に走って遊べる空間はあります。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/17300/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">長寿院保育園</h2>
  <p class="school_place_text">
      宗教法人長寿院保育園 / 兵庫県明石市人丸町2-26
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star09.svg' alt='star09'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
          </ul>
          <p class="school_rate_num">3.9</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>4</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon01.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      園庭がすごく広いため、十分に体を動かして遊ぶことができる。運動会も広々と使って行うことができるのでとても良いと思う。園舎は歴史ある保育園だが、汚いことはなく、清潔感もある。季節に応じて可愛く飾り付けられており、楽しい空間になっている。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/19964/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">えみ保育園</h2>
  <p class="school_place_text">
      社会福祉法人横浜鶴声会 / 神奈川県横浜市鶴見区獅子ケ谷2丁目15−18
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star08.svg' alt='star08'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
          </ul>
          <p class="school_rate_num">3.8</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>3</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon02.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">主任・園長との人間関係</h3>
                  <p class="school_talk_text">
                      話をしやすい雰囲気で、現場の意見を話しやすく、聞いてくれます。保育現場の経験も長いので、困った時には親身にアドバイスをくれ、日々の保育についても助けてくれています。働きやすい環境で、子育てしながらでもフォローが手厚く働きやすい職場です。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/22777/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">北区立王子本町保育園</h2>
  <p class="school_place_text">
      社会福祉法人ゆうゆう　北区立王子本町保育園 / 東京都北区王子本町３丁目３−３
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star08.svg' alt='star08'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
          </ul>
          <p class="school_rate_num">3.8</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>6</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon02.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      都内の保育園で園庭があるのはとても珍しいと思います。広々として、自然豊かな園庭で
子どもたちは好きな遊びを自然を通して遊ぶことができて素敵な環境です。
更に、ホールがあり、雨や夏の暑い日など広々と体を動かすこともできます。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9272/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">きらら子どもの家</h2>
  <p class="school_place_text">
      社会福祉法人みどり会 / 神奈川県横浜市金沢区能見台5-20-16
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star08.svg' alt='star08'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
          </ul>
          <p class="school_rate_num">3.8</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>7</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon02.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      園庭にはアスレチックの遊具や砂場もあり、子どもたちがのびのびと遊べます。安全対策もかなり重視して見ていたので、高さがある遊具ですが在職中も大きな怪我に繋がる事例はありませんでした。園舎も綺麗で、モンテッソーリに関する施設なので設備も整っています。駅近で通いやすいです。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/16045/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">シャローム三育保育園</h2>
  <p class="school_place_text">
      シャローム三育保育園 / 神奈川県横浜市瀬谷区二ツ橋町469
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star08.svg' alt='star08'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
          </ul>
          <p class="school_rate_num">3.8</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>8</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon01.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      私が離職後に園庭は大幅にリニューアルしたのですが、活発に子どもたちが遊べる空間となっています。また、事務所からも園庭が見えるので大人の目が多いのも助かります。夏は滑り台をウオータースライダーにしたりと楽しんでいました。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/1084/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">中延保育園</h2>
  <p class="school_place_text">
      品川区 / 東京都品川区西中延1丁目6番16号
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star08.svg' alt='star08'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
          </ul>
          <p class="school_rate_num">3.8</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>6</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon01.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">職員同士の人間関係</h3>
                  <p class="school_talk_text">
                      公立園は正社員の先生方が数年ごとに入れ替わります。そのためか程よい距離間で職員同士が関わっているように感じました。また正社員の他にもパートさんが沢山いたす。どの先生も優しい先生ばかりです。色々と教えてくださり仕事がしやすかったです。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/22763/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">認定こども園みなみ幼稚園</h2>
  <p class="school_place_text">
      学校法人熊見学園 / 大阪府八尾市竹渕西3-199
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star08.svg' alt='star08'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
          </ul>
          <p class="school_rate_num">3.8</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>8</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon02.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      園舎は少し古くなっていますが問題は無いかと思います。園庭も広くもなく狭くもなく。大きな遊具が2つあり子どもたちは楽しんで遊んでいました。グルグル滑り台も大人気でした。怪獣の滑り台は勢いが凄くて年少の初め頃は少し危ないかなとおもいます。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/16135/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                    <li class="school-all_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">ほくせい保育園</h2>
  <p class="school_place_text">
      いなべ市立ほくせい保育園 / 三重県いなべ市北勢町阿下喜2166
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star08.svg' alt='star08'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
          </ul>
          <p class="school_rate_num">3.8</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>3</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon01.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      完成してまだ間もない保育園なので、とても綺麗な園舎です。田舎ということもあり園庭も広く、遊具も子どもたちはすごく楽しそうに遊んでいます。未満児さんと以上児さんとの園庭も分かれているので安心して保育ができます。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/22787/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>            </ul>
<div class="pager_block">
  <p class="pager_text">全22302件中1~20項目を表示中</p>
  <div class="pager_main">
                  <ul class="pager_list">
                                                                                                                  <li class="pager_item">
                          <a class="pager_link active">
                              1
                          </a>
                      </li>
                                                                                                                              <li class="pager_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/nurseries?prefecture_id=&amp;sort=total_score&amp;old_prefecture_id=&amp;page=2" class="pager_link">
                              2
                          </a>
                      </li>
                                                                                                                              <li class="pager_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/nurseries?prefecture_id=&amp;sort=total_score&amp;old_prefecture_id=&amp;page=3" class="pager_link">
                              3
                          </a>
                      </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class="pager_item">
                  …
              </li>
                                              <li class="pager_item">
                  <a href="https://hoikuhiroba-kuchikomi.com/nurseries?prefecture_id=&amp;sort=total_score&amp;old_prefecture_id=&amp;page=1116" class="pager_link">
                      1116
                  </a>
              </li>
                      </ul>
                      <a href="https://hoikuhiroba-kuchikomi.com/nurseries?prefecture_id=&amp;sort=total_score&amp;old_prefecture_id=&amp;page=2" class="pager_next">
              次へ<img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/pager_next_arrow.svg" alt="次へ">
          </a>
              </div>
</div>


<!-- Event popup -->
<div class="popup_filter" id="EventPopFilter"></div>
<div class="popup_wrap" id="EventPopWindow" style="background-color: transparent; padding: 10px 10px; max-width: 550px;">
<button type="button" class="popup_close_btn PopCloseBtn">
  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/popup/close_icon.svg" alt="close">
</button>
<div class="align_center">
          <a href="https://hoikuhiroba-kuchikomi.com/register?utm_source=popup&utm_medium=banner&utm_campaign=202303" target="_blank" rel="noopener noreferrer">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/popup/event_popup_march.png" alt="event" style="width: 100%; position: relative; left: 50%; transform: translateX(-50%);">
  </a>
      </div>
</div>

</div>                                            </div>
          </div>
      </div>
      <section class="common_campaign_block top">
<div class="common_inner">
          <div class="campaign_layout_block">
      <div class="campaign_search_block">
          <h2 class="campaign_search_main_title">保育士による<br class="common_sp_640">口コミ・評判を探す</h2>
          <div class="campaign_search_box">
              <h3 class="campaign_search_title">法人名で口コミを探す</h3>
              <a href="https://hoikuhiroba-kuchikomi.com/company" class="campaign_search_btn">法人一覧を見る</a>
          </div>
                              <div class="campaign_search_box">
                  <h3 class="campaign_search_title">施設形態から口コミを探す</h3>
                  <ul class="campaign_search_list" id="CampaignList">
                                                      <li class="campaign_search_item ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=1" class="campaign_search_link">認可保育園</a>
                          </li>
                                                      <li class="campaign_search_item ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=2" class="campaign_search_link">認証保育園</a>
                          </li>
                                                      <li class="campaign_search_item ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=3" class="campaign_search_link">事業所内保育</a>
                          </li>
                                                      <li class="campaign_search_item ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=4" class="campaign_search_link">院内保育</a>
                          </li>
                                                      <li class="campaign_search_item ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=5" class="campaign_search_link">小規模保育</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=6" class="campaign_search_link">家庭的保育（保育ママ）</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=7" class="campaign_search_link">幼稚園</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=8" class="campaign_search_link">認定こども園</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=9" class="campaign_search_link">託児所</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=10" class="campaign_search_link">病児・病後児保育室</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=11" class="campaign_search_link">児童発達支援施設</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=12" class="campaign_search_link">子育てひろば</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=13" class="campaign_search_link">学童</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=14" class="campaign_search_link">ベビーシッター・ナニー</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=15" class="campaign_search_link">その他</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=16" class="campaign_search_link">保育園</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=17" class="campaign_search_link">訪問型保育</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=18" class="campaign_search_link">放課後等デイサービス</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=19" class="campaign_search_link">企業主導型保育</a>
                          </li>
                                              </ul>
                  <button type="button" class="campaign_more_btn" id="CampaignBtn"><span></span></button>
              </div>
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/character/icon07.svg" alt="保育士による口コミ・評判を探す" class="campaign_search_icon">
                      </div>
      <div class="campaign_post_block">
          <h2 class="campaign_post_title">口コミを投稿する</h2>
          <p class="campaign_post_text">
              あなたの知っているちょっとした情報が、誰かにとっては大きな一歩を踏み出す力へと変わります。保育士の保育園選びに、助け合いの輪を広げませんか？
          </p>
          <div class="campaign_post_btnarea">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/character/icon08_pc.svg" alt="口コミを投稿する" class="common_pc_640 campaign_post_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/character/icon08_sp.svg" alt="口コミを投稿する" class="common_sp_640 campaign_post_icon">
                                      <div class="campaign_post_btn PopBtn" style="cursor: pointer" data-pop="Login">口コミを投稿</div>
                              </div>
      </div>
  </div>
  
</div>
</section>            <section class="common_area_block school">
<div class="common_inner">
  <div class="common_pc_640" >
      <h2 class="common_title01">
          エリアから気になる保育園を見つける
      </h2>
      <div class="common_area_main">
          <div class="common_area_box">
              <p class="common_area_title">東京23区</p>
              <ul class="area_list">
                      <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/chiyodaku" class="area_link">千代田区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/chuuouku" class="area_link">中央区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/minatoku" class="area_link">港区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/shinjukuku" class="area_link">新宿区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/bunkyouku" class="area_link">文京区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/taitouku" class="area_link">台東区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/sumidaku" class="area_link">墨田区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/koutouku" class="area_link">江東区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/shinagawaku" class="area_link">品川区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/meguroku" class="area_link">目黒区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/ootaku" class="area_link">大田区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/setagayaku" class="area_link">世田谷区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/shibuyaku" class="area_link">渋谷区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/nakanoku" class="area_link">中野区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/suginamiku" class="area_link">杉並区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/toshimaku" class="area_link">豊島区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/kitaku" class="area_link">北区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/arakawaku" class="area_link">荒川区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/itabashiku" class="area_link">板橋区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/nerimaku" class="area_link">練馬区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/adachiku" class="area_link">足立区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/katsushikaku" class="area_link">葛飾区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/edogawaku" class="area_link">江戸川区</a>
                      </li>
                                      </ul>
          </div>
          <div class="common_area_box">
              <p class="common_area_title">全国主要都市</p>
              <ul class="area_list">
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/hokkaido/sapporoshi" class="area_link">札幌市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/miyagi/sendaishi" class="area_link">仙台市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/saitama/saitamashi" class="area_link">さいたま市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/chiba/chibashi" class="area_link">千葉市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/kanagawa/kawasakishi" class="area_link">川崎市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/kanagawa/yokohamashi" class="area_link">横浜市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/niigata/niigatashi" class="area_link">新潟市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/shizuoka/hamamatsushi" class="area_link">浜松市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/kanagawa/sagamiharashi" class="area_link">相模原市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/shizuoka/shizuokashi" class="area_link">静岡市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/aichi/nagoyashi" class="area_link">名古屋市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/kyoto/kyotoshi" class="area_link">京都市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/osaka/oosakashi" class="area_link">堺市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/hyogo/koubeshihi" class="area_link">神戸市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/okayama/okayamashi" class="area_link">岡山市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/hiroshima/hiroshimashi" class="area_link">広島市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/fukuoka/kitakyuushuushi" class="area_link">福岡市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/kumamoto/kumamotoshi" class="area_link">熊本市</a>
                      </li>
                                      </ul>
          </div>
      </div>
      <div class="common_area_sub">
          <ul class="common_area_list">
              <li class="common_area_item">
                  <div class="common_area_box">
                      <p class="common_area_title">北海道・東北</p>
                      <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/hokkaido" class="area_link">北海道</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/aomori" class="area_link">青森県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/iwate" class="area_link">岩手県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/miyagi" class="area_link">宮城県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/akita" class="area_link">秋田県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/yamagata" class="area_link">山形県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/fukushima" class="area_link">福島県</a>
  </li>
</ul>                        </div>
                  <div class="common_area_box">
                      <p class="common_area_title">関東</p>
                      <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/ibaraki" class="area_link">茨城県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tochigi" class="area_link">栃木県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/gunma" class="area_link">群馬県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/saitama" class="area_link">埼玉県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/chiba" class="area_link">千葉県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tokyo" class="area_link">東京都</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kanagawa" class="area_link">神奈川県</a>
  </li>
</ul>                        </div>
              </li>
              <li class="common_area_item">
                  <div class="common_area_box">
                      <p class="common_area_title">信越・北陸・東海</p>
                      <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/niigata" class="area_link">新潟県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/toyama" class="area_link">富山県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/ishikawa" class="area_link">石川県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/fukui" class="area_link">福井県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/yamanashi" class="area_link">山梨県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/nagano" class="area_link">長野県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/gifu" class="area_link">岐阜県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/shizuoka" class="area_link">静岡県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/aichi" class="area_link">愛知県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/mie" class="area_link">三重県</a>
  </li>
</ul>                        </div>
                  <div class="common_area_box">
                      <p class="common_area_title">近畿</p>
                      <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/shiga" class="area_link">滋賀県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kyoto" class="area_link">京都府</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/osaka" class="area_link">大阪府</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/hyogo" class="area_link">兵庫県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/nara" class="area_link">奈良県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/wakayama" class="area_link">和歌山県</a>
  </li>
</ul>                        </div>
              </li>
              <li class="common_area_item">
                  <div class="common_area_box">
                      <p class="common_area_title">中国・四国</p>
                      <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tottori" class="area_link">鳥取県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/shimane" class="area_link">島根県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/okayama" class="area_link">岡山県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/hiroshima" class="area_link">広島県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/yamaguchi" class="area_link">山口県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tokushima" class="area_link">徳島県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kagawa" class="area_link">香川県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/ehime" class="area_link">愛媛県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kochi" class="area_link">高知県</a>
  </li>
</ul>                        </div>
                  <div class="common_area_box">
                      <p class="common_area_title">九州</p>
                      <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/fukuoka" class="area_link">福岡県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/saga" class="area_link">佐賀県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/nagasaki" class="area_link">長崎県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kumamoto" class="area_link">熊本県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/oita" class="area_link">大分県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/miyazaki" class="area_link">宮崎県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kagoshima" class="area_link">鹿児島県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/okinawa" class="area_link">沖縄県</a>
  </li>
</ul>                        </div>
              </li>
          </ul>
      </div>
  </div>
  <div class="common_sp_640">
      <h2 class="common_title01">
          エリアから気になる<br>保育園を見つける
      </h2>
      <ul class="common_area-sp_list">
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">東京23区</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/chiyodaku" class="area_link">千代田区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/chuuouku" class="area_link">中央区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/minatoku" class="area_link">港区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/shinjukuku" class="area_link">新宿区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/bunkyouku" class="area_link">文京区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/taitouku" class="area_link">台東区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/sumidaku" class="area_link">墨田区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/koutouku" class="area_link">江東区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/shinagawaku" class="area_link">品川区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/meguroku" class="area_link">目黒区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/ootaku" class="area_link">大田区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/setagayaku" class="area_link">世田谷区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/shibuyaku" class="area_link">渋谷区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/nakanoku" class="area_link">中野区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/suginamiku" class="area_link">杉並区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/toshimaku" class="area_link">豊島区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/kitaku" class="area_link">北区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/arakawaku" class="area_link">荒川区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/itabashiku" class="area_link">板橋区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/nerimaku" class="area_link">練馬区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/adachiku" class="area_link">足立区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/katsushikaku" class="area_link">葛飾区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/edogawaku" class="area_link">江戸川区</a>
                          </li>
                                              </ul>
              </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">全国主要都市</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/hokkaido/sapporoshi" class="area_link">札幌市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/miyagi/sendaishi" class="area_link">仙台市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/saitama/saitamashi" class="area_link">さいたま市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/chiba/chibashi" class="area_link">千葉市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/kanagawa/kawasakishi" class="area_link">川崎市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/kanagawa/yokohamashi" class="area_link">横浜市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/niigata/niigatashi" class="area_link">新潟市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/shizuoka/hamamatsushi" class="area_link">浜松市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/kanagawa/sagamiharashi" class="area_link">相模原市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/shizuoka/shizuokashi" class="area_link">静岡市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/aichi/nagoyashi" class="area_link">名古屋市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/kyoto/kyotoshi" class="area_link">京都市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/osaka/oosakashi" class="area_link">堺市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/hyogo/koubeshihi" class="area_link">神戸市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/okayama/okayamashi" class="area_link">岡山市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/hiroshima/hiroshimashi" class="area_link">広島市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/fukuoka/kitakyuushuushi" class="area_link">福岡市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/kumamoto/kumamotoshi" class="area_link">熊本市</a>
                          </li>
                                              </ul>
              </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">北海道・東北</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/hokkaido" class="area_link">北海道</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/aomori" class="area_link">青森県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/iwate" class="area_link">岩手県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/miyagi" class="area_link">宮城県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/akita" class="area_link">秋田県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/yamagata" class="area_link">山形県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/fukushima" class="area_link">福島県</a>
  </li>
</ul>                    </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">関東</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/ibaraki" class="area_link">茨城県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tochigi" class="area_link">栃木県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/gunma" class="area_link">群馬県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/saitama" class="area_link">埼玉県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/chiba" class="area_link">千葉県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tokyo" class="area_link">東京都</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kanagawa" class="area_link">神奈川県</a>
  </li>
</ul>                    </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">信越・北陸・東海</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/niigata" class="area_link">新潟県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/toyama" class="area_link">富山県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/ishikawa" class="area_link">石川県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/fukui" class="area_link">福井県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/yamanashi" class="area_link">山梨県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/nagano" class="area_link">長野県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/gifu" class="area_link">岐阜県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/shizuoka" class="area_link">静岡県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/aichi" class="area_link">愛知県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/mie" class="area_link">三重県</a>
  </li>
</ul>                    </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">近畿</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/shiga" class="area_link">滋賀県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kyoto" class="area_link">京都府</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/osaka" class="area_link">大阪府</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/hyogo" class="area_link">兵庫県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/nara" class="area_link">奈良県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/wakayama" class="area_link">和歌山県</a>
  </li>
</ul>                    </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">中国・四国</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tottori" class="area_link">鳥取県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/shimane" class="area_link">島根県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/okayama" class="area_link">岡山県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/hiroshima" class="area_link">広島県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/yamaguchi" class="area_link">山口県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tokushima" class="area_link">徳島県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kagawa" class="area_link">香川県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/ehime" class="area_link">愛媛県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kochi" class="area_link">高知県</a>
  </li>
</ul>                    </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">九州・沖縄</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/fukuoka" class="area_link">福岡県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/saga" class="area_link">佐賀県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/nagasaki" class="area_link">長崎県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kumamoto" class="area_link">熊本県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/oita" class="area_link">大分県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/miyazaki" class="area_link">宮崎県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kagoshima" class="area_link">鹿児島県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/okinawa" class="area_link">沖縄県</a>
  </li>
</ul>                    </div>
          </li>
      </ul>
  </div>
</div>
</section>            <div class="common_sp_640">
                      </div>
  </div>
  
  <!-- Event popup -->
  <div class="popup_filter" id="EventPopFilter"></div>
<div class="popup_wrap" id="EventPopWindow" style="background-color: transparent; padding: 10px 10px; max-width: 550px;">
<button type="button" class="popup_close_btn PopCloseBtn">
  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/popup/close_icon.svg" alt="close">
</button>
<div class="align_center">
          <a href="https://hoikuhiroba-kuchikomi.com/register?utm_source=popup&utm_medium=banner&utm_campaign=202303" target="_blank" rel="noopener noreferrer">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/popup/event_popup_march.png" alt="event" style="width: 100%; position: relative; left: 50%; transform: translateX(-50%);">
  </a>
      </div>
</div>

</main>

              <!-- login popup -->
<div class="popup_filter" id="LoginFilter"></div>
<div class="popup_wrap" id="LoginWindow">
  <button type="button" class="popup_close_btn PopCloseBtn">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/popup/close_icon.svg" alt="close">
  </button>
  <div class="popup_inner">
      <p class="popup_title">
          こちらの機能をお使い頂くには<br>
          会員登録が必要です
      </p>
      <a href="https://hoikuhiroba-kuchikomi.com/register" class="common_btn01 radius-small">会員登録(無料)</a>
      <div class="align_center">
          <a href="https://hoikuhiroba-kuchikomi.com/login" class="popup_login_link">ログインはこちら</a>
      </div>
  </div>
</div>
<script>
  selectedPrefectureName="hello";
</script>
@endsection