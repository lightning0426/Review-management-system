@extends('layout')

@section('content')
@php
    // $selectedPrefectureName = 'Tokyo';
@endphp
<main class="common_main" id="nursery_main">
  <div class="school_wrap">
      <div class="school_inner">
          <div class="pankuzu_block">
              <div class="common_inner">
                  <ul class="pankuzu_list">
                      <li class="pankuzu_item">
                          <a href="/" class="pankuzu_link">ホーム</a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="common_inner">
              <h1 class="school-all_title">
                  保育園一覧
              </h1>
              <div class="common_sp">
                <form method="get" action="/nurseries">
                    <h3 class="school-sp_search_title">検索条件</h3>
                    <div class="school-sp_search_block">
                        <div class="school-all_aside_keyword">
                            <input
                                type="text"
                                name="keyword"
                                class="school-all_aside_input"
                                placeholder="キーワードを入力"
                            >
                            <button type="submit" class="school-all_aside_search_btn">
                                <img src="{{asset('assets/user/images/school/search_icon_gray.svg')}}" alt="search">
                            </button>
                        </div>
                        <ul class="school-sp_search_list">
                            <li class="school-sp_search_item">
                                <p class="school-sp_search_item_title">
                                    <img src="{{asset('assets/user/images/school/place_icon.svg')}}" alt="都道府県" class="place_icon">都道府県
                                </p>
                                <p class="school-sp_search_item_text PopBtn" :class="{ active: selectedPrefectureName !== '指定なし' }" data-pop="PlaceIndex">
                                    <span>{{ $selectedPrefectureName }}</span>
                                </p>
                            </li>
                            <li class="school-sp_search_item">
                                <p class="school-sp_search_item_title">
                                    <img src="{{asset('assets/user/images/school/area_icon.svg')}}" alt="市区町村" class="area_icon">市区町村
                                </p>
                                <p class="school-sp_search_item_text PopBtn" :class="{ active: selectedCityNames !== '指定なし' }" data-pop="Area">
                                    <span>{{ $selectedCityNames }}</span>
                                </p>
                            </li>
                            <li class="school-sp_search_item">
                                <p class="school-sp_search_item_title">
                                    <img src="{{asset('assets/user/images/school/type_icon.svg')}}" alt="施設形態" class="type_icon">施設形態
                                </p>
                                <p class="school-sp_search_item_text PopBtn" :class="{ active: selectedFacilityNames !== '指定なし' }" data-pop="Type">
                                    <span>{{ $selectedFacilityNames }}</span>
                                </p>
                            </li>
                        </ul>
                        
                        {{-- <input type="hidden" name="old_prefecture_id" value=""> --}}
                        <div class="school-sp_popup_block SchoolPop" id="PlaceIndexWindow" style="display: none;">
                            <div class="school-sp_popup_head mb0">
                                <h3 class="school-sp_popup_title">
                                    {{ $selectedPrefectureName }}で絞り込む
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
                                <h3 class="school-sp_popup_place_title">{{ $selectedPrefectureName }}の市町村</h3>
                                <label class="school-all_aside_area_label">
                                    <input type="checkbox" name="allcityies" value="">
                                    <span class="all">すべて選択</span>
                                </label>
                                <ul class="school-sp_popup_area_list" id="city_list_sp">
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
                                <ul class="school-all_aside_type_list"  id="facility_list_sp">
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
                          <p class="school-all_result_num"><span>{{$cardData->total()}}</span>件</p>
                      </div>
                      <p class="school-all_result_text">({{$cardData->firstItem()}}~{{$cardData->lastItem()}}件目を表示中)</p>
                  </div>
                  <div class="school-all_select_block">
                        <p class="school-all_select_title">表示順</p>
                        <select name="sort" class="school-all_select" id="sortType">
                                <option value="byRating">総合評価順</option>
                                <option value="byCount">口コミの多い順</option>
                        </select>
                  </div>
              </div>
              <div class="school-all_layout_block">
                <aside class="school-all_layout_aside">
                    <h3 class="school-all_aside_title">条件を絞り込む</h3>
                    <form method="get" action="/nurseries">
                        <div class="school-all_aside_keyword">
                            <input type="text" name="keyword" class="school-all_aside_input" placeholder="キーワードを入力">
                            <button type="submit" class="school-all_aside_search_btn">
                                <img src="{{asset('assets/user/images/school/search_icon_gray.svg')}}" alt="search">
                            </button>
                        </div>
                        <div class="mb30">
                            <div class="school-all_aside_box">
                                <h3 class="school-all_aside_box_title">
                                    <img src="{{asset('assets/user/images/school/area_icon.svg')}}" alt="エリアで検索する" class="area_icon">エリアで検索する
                                </h3>
                                <select name="prefecture_id" class="school-all_aside_select" id="prefecture_select">
                                    <option value="">選択してください</option>
                                    <option value="1">北海道</option>
                                </select>
                                <ul class="school-all_aside_area_list" id = "city_list">
                                </ul>
                            </div>
                            <div class="school-all_aside_box">
                                    <h3 class="school-all_aside_box_title">
                                        <img src="{{asset('assets/user/images/school/type_icon.svg')}}" alt="施設形態で検索する" class="type_icon">施設形態で検索する
                                    </h3>
                                    <ul class="school-all_aside_type_list" id="facility_list">
                                    </ul>
                                </div>
                            </div>
                        <button type="submit" class="common_btn02">条件を確定する</button>
                    </form>
                </aside>
                <div class="school-all_layout_main">
                    <ul class="school-all_list">
                        @foreach ($cardData as $item)
                            <li class="school-all_item">
                                <div class="school_box">
                                <div class="school_info_block">
                                    @foreach ($item['facility_name'] as $facility)                                    
                                        <p class="school_label">{{$facility}}</p>
                                    @endforeach
                                    <button type="button" class="common_follow_btn PopBtn" data-pop="Login">
                                        <img src="{{asset('assets/user/images/common/follow_add_icon.svg')}}" alt="add" class="normal_icon">
                                        <img src="{{asset('assets/user/images/common/follow_check_icon.svg')}}" alt="checked" class="active_icon">
                                        <span>フォロー</span>
                                    </button>
                                </div>
                                <h2 class="school_title">{{$item['name']}}</h2>
                                <p class="school_place_text">
                                    {{$item['cooperate_name']}} / {{$item['address']}}
                                </p>
                                <div class="school_content_relative">
                                    @if ($item['review_count'] == 0)
                                        <div class="school_rate_block blur score_none active">
                                            <ul class="school_star_list">
                                                <li class="school_star_item">
                                                    <img src="{{asset('assets/user/images/star/star10.svg')}}" alt="star10">
                                                </li>
                                                <li class="school_star_item">
                                                    <img src="{{asset('assets/user/images/star/star10.svg')}}" alt="star10">
                                                </li>
                                                <li class="school_star_item">
                                                    <img src="{{asset('assets/user/images/star/star10.svg')}}" alt="star10">
                                                </li>
                                                <li class="school_star_item">
                                                    <img src="{{asset('assets/user/images/star/star00.svg')}}" alt="star00">
                                                </li>
                                                <li class="school_star_item">
                                                    <img src="{{asset('assets/user/images/star/star00.svg')}}" alt="star00">
                                                </li>
                                            </ul>
                                            <p class="school_rate_num">0.0</p>
                                        </div>
                                        <div class="not_enough_score school_place_text school_content_absolute" style="top: 24%; left: 0%; font-size: 13px;">
                                            <strong>十分な数の評価がありません</strong>
                                        </div>
                                    @else
                                    <div class="school_rate_block blur score_none ">
                                        <ul class="school_star_list">
                                            @php
                                                $cur_rating = $item['review_rating'];
                                            @endphp
                                            @for($i = 0;$i<5;$i++)
                                                @if ($cur_rating>=1)
                                                    <li class=school_star_item>
                                                        <img src='{{asset('assets/user/images/star/star10.svg')}}' alt='star10'>
                                                    </li>
                                                    @php $cur_rating-=1 @endphp
                                                @elseif ($cur_rating>0)
                                                    <li class=school_star_item>
                                                        <img src='{{ asset("assets/user/images/star/star0" . $cur_rating * 10 . ".svg") }}' alt='star{{ $cur_rating * 10 }}'>
                                                    </li>
                                                    @php $cur_rating-=1 @endphp
                                                @else
                                                    <li class=school_star_item>
                                                        <img src='{{asset('assets/user/images/star/star00.svg')}}' alt='star00'>
                                                    </li>
                                                @endif
                                            @endfor
                                        </ul>
                                        <p class="school_rate_num">{{$item['review_rating']}}</p>        
                                    </div>
                                    @endif
                                </div>
                                <p class="school_post_text">
                                    <img src="{{asset('assets/user/images/common/comment_icon.svg')}}" alt="talk">口コミ数<span>{{$item['review_count']}}</span>件
                                </p>
                                <div class="school_content_relative">
                                    @if ($item['review_count'] == 0)
                                        <div class="school_no_block">
                                            <p class="school_no_title"> {{$item['name']}}<br> 口コミ・評判はまだありません </p>
                                            <button type="button" class="common_btn02 PopBtn" data-pop="Login">口コミを投稿</button>
                                        </div>
                                    @else
                                        <div class="school_talk_block">
                                            <div class="school_talk_sub">
                                                <img src='{{asset('assets/user/images/face/good_icon02.svg')}}' alt="良い点">
                                                <p class="shcool_talk_sub_text color-good">良い点</p>
                                            </div>
                                            <div class="school_talk_main">
                                                <h3 class="school_talk_title">園庭・園舎</h3>
                                                <p class="school_talk_text">
                                                    {{$item['content']}}
                                                </p>
                                            </div>
                                        </div>
                                        
                                    @endif
                                </div>
                                <a href="nurseries/22738/kuchikomi" class="school_detail_btn">詳細を見る</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                    @if ($cardData->total()>0)
                        <div class="pager_block">
                            <p class="pager_text">全{{$cardData->total()}}件中{{$cardData->firstItem()}}~{{$cardData->lastItem()}}項目を表示中</p>
                            <div class="pager_main">
                                @php
                                    $currentPageNumber = $cardData->currentPage();
                                @endphp
                                @if (!$cardData->onFirstPage())
                                    <a href="{{$cardData->previousPageUrl()}}" class="pager_prev">
                                        次へ<img src="{{asset('assets/user/images/common/pager_prev_arrow.svg')}}" alt="次へ">
                                    </a>
                                @endif
                                <ul class="pager_list">
                                    @if($currentPageNumber>3)
                                        <li class="pager_item">
                                            <a href="{{$cardData->url(1)}}" class="pager_link">{{1}}</a>
                                        </li>                                    
                                    @endif
                                    @if($currentPageNumber>4)
                                        <li>
                                        …
                                        </li>                            
                                    @endif
                                    @for ($i = max(1, $currentPageNumber-2); $i <= min($currentPageNumber+2, $cardData->lastPage()); $i++)
                                        <li class="pager_item">
                                            <a href="{{$cardData->url($i)}}" class="pager_link {{$currentPageNumber==$i?'active':''}}">{{$i}}</a>
                                        </li>                                    
                                    @endfor
                                    @if($currentPageNumber+3<$cardData->lastPage())
                                        <li>
                                        …
                                        </li>                            
                                    @endif
                                    @if($currentPageNumber+2<$cardData->lastPage())
                                        <li class="pager_item">
                                            <a href="{{$cardData->url($cardData->lastPage())}}" class="pager_link">{{$cardData->lastPage()}}</a>
                                        </li>                                    
                                    @endif
                                </ul>
                                @if ($cardData->hasMorePages())
                                    <a href="{{$cardData->nextPageUrl()}}" class="pager_next">
                                        次へ<img src="{{asset('assets/user/images/common/pager_next_arrow.svg')}}" alt="次へ">
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endif

<!-- Event popup -->
    <div class="popup_filter" id="EventPopFilter"></div>
        <div class="popup_wrap" id="EventPopWindow" style="background-color: transparent; padding: 10px 10px; max-width: 550px;">
            <button type="button" class="popup_close_btn PopCloseBtn">
                <img src="{{asset('assets/user/images/popup/close_icon.svg')}}" alt="close">
            </button>
            <div class="align_center">
                <a href="/register?utm_source=popup&utm_medium=banner&utm_campaign=202303" target="_blank" rel="noopener noreferrer">
                    <img src="{{asset('assets/user/images/popup/event_popup_march.png')}}" alt="event" style="width: 100%; position: relative; left: 50%; transform: translateX(-50%);">
                </a>
            </div>
        </div>
    </div>                                            
</div>
    </div>
</div>
<section class="common_campaign_block top">
    <div class="common_inner">   
        <div class="campaign_layout_block">
        <div class="campaign_search_block">
            <h2 class="campaign_search_main_title">保育士による<br class="common_sp_640">口コミ・評判を探す</h2>
            <div class="campaign_search_box">
            <h3 class="campaign_search_title">法人名で口コミを探す</h3>
            <a href="/company" class="campaign_search_btn">法人一覧を見る</a>
            </div>
            <div class="campaign_search_box">
            <h3 class="campaign_search_title">施設形態から口コミを探す</h3>
            <ul class="campaign_search_list" id="CampaignList">
                @foreach ($facilityData as $row)
                @if ($row->id<6)
                <li class="campaign_search_item">
                    <a href="/nurseries?facility_type_ids%5B%5D={{$row->id}}" class="campaign_search_link">{{$row->name}}</a>
                </li>                              
                @else
                <li class="campaign_search_item  no_active CampaignItem ">
                    <a href="/nurseries?facility_type_ids%5B%5D={{$row->id}}" class="campaign_search_link">{{$row->name}}</a>
                </li>                          
                @endif
                @endforeach
            </ul>
            <button type="button" class="campaign_more_btn" id="CampaignBtn"><span></span></button>
            </div>
            <img src="{{asset('assets/user/images/character/icon07.svg')}}" alt="保育士による口コミ・評判を探す" class="campaign_search_icon">
        </div>
        <div class="campaign_post_block">
            <h2 class="campaign_post_title">口コミを投稿する</h2>
            <p class="campaign_post_text">
                あなたの知っているちょっとした情報が、誰かにとっては大きな一歩を踏み出す力へと変わります。保育士の保育園選びに、助け合いの輪を広げませんか？
            </p>
            <div class="campaign_post_btnarea">
            <img src="{{asset('assets/user/images/character/icon08_pc.svg')}}" alt="口コミを投稿する" class="common_pc_640 campaign_post_icon">
            <img src="{{asset('assets/user/images/character/icon08_sp.svg')}}" alt="口コミを投稿する" class="common_sp_640 campaign_post_icon">
            <div class="campaign_post_btn PopBtn" style="cursor: pointer" data-pop="Login">口コミを投稿</div>
            </div>
        </div>
        </div>
    </div>
</section>     
<section class="common_area_block school">
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
                            @foreach ($prefectureData as $row)
                            @if ($row->main_id == 1)
                                <li class="area_item">
                                <a href="/nurseries?prefecture_id={{$row->id}}" class="area_link">{{$row->name}}</a>
                                </li>            
                            @endif
                            @endforeach
                        </ul>                         
                        </div>
                        <div class="common_area_box">
                        <p class="common_area_title">関東</p>
                        <ul class="area_list">
                            @foreach ($prefectureData as $row)
                            @if ($row->main_id == 2)
                                <li class="area_item">
                                <a href="/nurseries?prefecture_id={{$row->id}}" class="area_link">{{$row->name}}</a>
                                </li>            
                            @endif
                            @endforeach
                        </ul>                        
                        </div>
                </li>
                <li class="common_area_item">
                    <div class="common_area_box">
                        <p class="common_area_title">信越・北陸・東海</p>
                        <ul class="area_list">
                            @foreach ($prefectureData as $row)
                            @if ($row->main_id == 3 || $row->main_id == 4)
                                <li class="area_item">
                                <a href="/nurseries?prefecture_id={{$row->id}}" class="area_link">{{$row->name}}</a>
                                </li>            
                            @endif
                            @endforeach
                        </ul>                             
                        </div>
                        <div class="common_area_box">
                        <p class="common_area_title">近畿</p>
                        <ul class="area_list">
                            @foreach ($prefectureData as $row)
                            @if ($row->main_id == 5)
                                <li class="area_item">
                                <a href="/nurseries?prefecture_id={{$row->id}}" class="area_link">{{$row->name}}</a>
                                </li>            
                            @endif
                            @endforeach
                        </ul>                    
                        </div>
                </li>
                <li class="common_area_item">
                    <div class="common_area_box">
                        <p class="common_area_title">中国・四国</p>
                        <ul class="area_list">
                            @foreach ($prefectureData as $row)
                            @if ($row->main_id == 6)
                                <li class="area_item">
                                <a href="/nurseries?prefecture_id={{$row->id}}" class="area_link">{{$row->name}}</a>
                                </li>            
                            @endif
                            @endforeach
                        </ul>                        
                        </div>
                        <div class="common_area_box">
                        <p class="common_area_title">九州</p>
                        <ul class="area_list">
                            @foreach ($prefectureData as $row)
                            @if ($row->main_id == 7)
                                <li class="area_item">
                                <a href="/nurseries?prefecture_id={{$row->id}}" class="area_link">{{$row->name}}</a>
                                </li>            
                            @endif
                            @endforeach
                        </ul>                          
                        </div>
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
                            <a href="/hokkaido/sapporoshi" class="area_link">札幌市</a>
                        </li>
                        <li class="area_item">
                            <a href="/miyagi/sendaishi" class="area_link">仙台市</a>
                        </li>
                        <li class="area_item">
                            <a href="/saitama/saitamashi" class="area_link">さいたま市</a>
                        </li>
                        <li class="area_item">
                            <a href="/chiba/chibashi" class="area_link">千葉市</a>
                        </li>
                        <li class="area_item">
                            <a href="/kanagawa/kawasakishi" class="area_link">川崎市</a>
                        </li>
                        <li class="area_item">
                            <a href="/kanagawa/yokohamashi" class="area_link">横浜市</a>
                        </li>
                        <li class="area_item">
                            <a href="/niigata/niigatashi" class="area_link">新潟市</a>
                        </li>
                        <li class="area_item">
                            <a href="/shizuoka/hamamatsushi" class="area_link">浜松市</a>
                        </li>
                        <li class="area_item">
                            <a href="/kanagawa/sagamiharashi" class="area_link">相模原市</a>
                        </li>
                        <li class="area_item">
                            <a href="/shizuoka/shizuokashi" class="area_link">静岡市</a>
                        </li>
                        <li class="area_item">
                            <a href="/aichi/nagoyashi" class="area_link">名古屋市</a>
                        </li>
                        <li class="area_item">
                            <a href="/kyoto/kyotoshi" class="area_link">京都市</a>
                        </li>
                        <li class="area_item">
                            <a href="/osaka/oosakashi" class="area_link">堺市</a>
                        </li>
                        <li class="area_item">
                            <a href="/hyogo/koubeshihi" class="area_link">神戸市</a>
                        </li>
                        <li class="area_item">
                            <a href="/okayama/okayamashi" class="area_link">岡山市</a>
                        </li>
                        <li class="area_item">
                            <a href="/hiroshima/hiroshimashi" class="area_link">広島市</a>
                        </li>
                        <li class="area_item">
                            <a href="/fukuoka/kitakyuushuushi" class="area_link">福岡市</a>
                        </li>
                        <li class="area_item">
                            <a href="/kumamoto/kumamotoshi" class="area_link">熊本市</a>
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
                        @foreach ($prefectureData as $row)
                        @if ($row->main_id == 1)
                            <li class="area_item">
                            <a href="/nurseries?prefecture_id={{$row->id}}" class="area_link">{{$row->name}}</a>
                            </li>            
                        @endif
                        @endforeach
                    </ul>                     
                    </div>
            </li>
            <li class="common_area-sp_item">
                <div class="common_area-sp_head AreaBtn">
                    <p class="common_area-sp_title">関東</p>
                    <p class="common_area-sp_btn"></p>
                </div>
                <div class="common_area-sp_main">
                    <ul class="area_list">
                        @foreach ($prefectureData as $row)
                        @if ($row->main_id == 2)
                            <li class="area_item">
                            <a href="/nurseries?prefecture_id={{$row->id}}" class="area_link">{{$row->name}}</a>
                            </li>            
                        @endif
                        @endforeach
                    </ul>                   
                    </div>
            </li>
            <li class="common_area-sp_item">
                <div class="common_area-sp_head AreaBtn">
                    <p class="common_area-sp_title">信越・北陸・東海</p>
                    <p class="common_area-sp_btn"></p>
                </div>
                <div class="common_area-sp_main">
                    <ul class="area_list">
                        @foreach ($prefectureData as $row)
                        @if ($row->main_id == 3 || $row->main_id == 4)
                            <li class="area_item">
                            <a href="/nurseries?prefecture_id={{$row->id}}" class="area_link">{{$row->name}}</a>
                            </li>            
                        @endif
                        @endforeach
                    </ul>                     
                </div>
            </li>
            <li class="common_area-sp_item">
                <div class="common_area-sp_head AreaBtn">
                    <p class="common_area-sp_title">近畿</p>
                    <p class="common_area-sp_btn"></p>
                </div>
                <div class="common_area-sp_main">
                    <ul class="area_list">
                        @foreach ($prefectureData as $row)
                        @if ($row->main_id == 5)
                            <li class="area_item">
                            <a href="/nurseries?prefecture_id={{$row->id}}" class="area_link">{{$row->name}}</a>
                            </li>            
                        @endif
                        @endforeach
                    </ul>                       
                    </div>
            </li>
            <li class="common_area-sp_item">
                <div class="common_area-sp_head AreaBtn">
                    <p class="common_area-sp_title">中国・四国</p>
                    <p class="common_area-sp_btn"></p>
                </div>
                    <div class="common_area-sp_main">
                        <ul class="area_list">
                        @foreach ($prefectureData as $row)
                            @if ($row->main_id == 6)
                            <li class="area_item">
                                <a href="/nurseries?prefecture_id={{$row->id}}" class="area_link">{{$row->name}}</a>
                            </li>            
                            @endif
                        @endforeach
                        </ul>                
                </div>
            </li>
            <li class="common_area-sp_item">
                <div class="common_area-sp_head AreaBtn">
                    <p class="common_area-sp_title">九州・沖縄</p>
                    <p class="common_area-sp_btn"></p>
                </div>
                <div class="common_area-sp_main">
                    <ul class="area_list">
                        @foreach ($prefectureData as $row)-
                        @if ($row->main_id == 7)
                        <li class="area_item">
                            <a href="/nurseries?prefecture_id={{$row->id}}" class="area_link">{{$row->name}}</a>
                        </li>            
                        @endif
                    @endforeach
                    </ul>                    
                </div>
            </li>
        </ul>
    </div>
    </div>
</section>       
<div class="common_sp_640"></div>
  </div>
  
<!-- Event popup -->
<div class="popup_filter" id="EventPopFilter"></div>
    <div class="popup_wrap" id="EventPopWindow" style="background-color: transparent; padding: 10px 10px; max-width: 550px;">
        <button type="button" class="popup_close_btn PopCloseBtn">
            <img src="{{asset('assets/user/images/popup/close_icon.svg')}}" alt="close">
        </button>
        <div class="align_center">
            <a href="/register?utm_source=popup&amp;utm_medium=banner&amp;utm_campaign=202303" target="_blank" rel="noopener noreferrer">
            <img src="{{asset('assets/user/images/popup/event_popup_march.png')}}" alt="event" style="width: 100%; position: relative; left: 50%; transform: translateX(-50%);">
            </a>
        </div>
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

function templateFOption(id, name, count) {

    var temp = '<li class="school-all_aside_type_item">\
                    <a href="/nurseries?facility_type_ids[]='+id+'" title="'+name+'"></a>\
                    <label class="school-all_aside_type_label">\
                        <input type="checkbox" name="facility_type_ids[]" value="'+id+'">\
                        <span>'+name+'('+count+')</span>\
                    </label>\
                </li>'
    return temp;
}

function templeteCityBox(id, name, count, p_id) {
    var temp = '<li class="school-all_aside_area_item">\
                    <a href="/nurseries?prefecture_id='+p_id+'&city_ids[]='+id+'" title="'+name+'"></a>\
                    <label class="school-all_aside_area_label">\
                        <input type="checkbox" name="city_ids[]" value="'+id+'">\
                        <span>'+name+'('+count+')</span>\
                    </label>\
                </li>';
    return temp;
}

function templateLIELMENT(id, name) {
  var temp = '<li class="school-sp_popup_place_item PrefectureSelect">\
                  <label class="school-sp_popup_place_label">\
                      <input type="radio" name="prefecture_id" value="'+id+'">\
                      <span>'+name+'</span>\
                  </label>\
              </li>'
  return temp;
}

function templeteCityBox_SP(id, name, count, p_id) {
    var temp = '<li class="school-sp_popup_area_item">\
                    <label class="school-all_aside_area_label">\
                        <input type="checkbox" name="city_ids[]" value="'+id+'">\
                        <span>'+name+'('+count+')</span>\
                    </label>\
                </li>';
    return temp;
}

function templateFOption_SP(id, name, count) {

var temp = '<li class="school-all_aside_type_item">\
                <label class="school-all_aside_type_label">\
                    <input type="checkbox" name="facility_type_ids[]" value="'+id+'">\
                    <span>'+name+'('+count+')</span>\
                </label>\
            </li>'
return temp;
}

function loadPrefectureData(id) {
    $.ajax({
        url: "/byprefecture?prefecture_id="+id,
        type: "GET",
        success: function(data){
            // Display fetched data in the data div
            $("#city_list").empty();
            $("#facility_list").empty();
            $("#city_list_sp").empty();
            $("#facility_list_sp").empty();

            for(var i=0;i<data.cityDetail.length;i++){
                $("#city_list").append(templeteCityBox(data.cityDetail[i].id, data.cityDetail[i].name, data.cityDetail[i].nursery_count, id));
                $("#city_list_sp").append(templeteCityBox_SP(data.cityDetail[i].id, data.cityDetail[i].name, data.cityDetail[i].nursery_count, id));
            }

            let city_ids = {!! json_encode($city_ids) !!};
            for(var i=0;i<city_ids.length;i++){
                $("input[name='city_ids[]']").each(function() {
                    if ($(this).val() == city_ids[i]) {
                        $(this).prop("checked", true); // check the checkbox
                    }
                });
            }

            for(var i=0;i<data.facilityDetail.length;i++){
                $("#facility_list").append(templateFOption(data.facilityDetail[i].id, data.facilityDetail[i].name, data.facilityDetail[i].facility_count));
                $("#facility_list_sp").append(templateFOption_SP(data.facilityDetail[i].id, data.facilityDetail[i].name, data.facilityDetail[i].facility_count));
            }

            let facility_ids = {!! json_encode($facility_ids) !!};
            for(var i=0;i<facility_ids.length;i++){
                $("input[name='facility_type_ids[]']").each(function() {
                    if ($(this).val() == facility_ids[i]) {
                        $(this).prop("checked", true); // check the checkbox
                    }
                });
            }
        }
    });
}

$("#prefecture_select").on('change', function() {
    loadPrefectureData($("#prefecture_select").val());
})

$("#sortType").on('change', function() {
    var currentUrl = window.location.href;
    var newUrl;
    if (currentUrl.includes('order_type=')) newUrl = currentUrl.replace(/order_type=[^&]+/g, 'order_type=' + $("#sortType").val());
    else {
        if(currentUrl.includes('?')) newUrl=currentUrl+'&order_type='+ $("#sortType").val();
        else newUrl=currentUrl+'?order_type='+ $("#sortType").val();
    }
    window.location.href = newUrl;
})

$(document).ready(function() {

    let keyword = {!! json_encode($keyword) !!};
    $('input[name="keyword"]').val(keyword);
    let order_type = {!! json_encode($order_type) !!};
    if(order_type) $("#sortType").val(order_type);


    $.ajax({
    url: "/get-prefecture-region",
    type: "GET",
    success: function(data){
        $("#prefecture_select").empty();
        $("#prefecture_select").append('<option value="">選択してください</option>');
        for(var i=0;i<data.prefectureData.length;i++){
            $("#prefecture_select").append(templateLOption(data.prefectureData[i].id, data.prefectureData[i].name));
        }

        let prefecture_id = {!! json_encode($prefecture_id) !!};
        $('select[name="prefecture_id"]').val(prefecture_id);
        $('#prefecture_select').trigger('change');
    }
    });

    $.ajax({
    url: "/get-facility",
    type: "GET",
    success: function(data){
        $("#facility_list").empty();
        for(var i=0;i<data.facilityData.length;i++){
            $("#facility_list").append(templateFOption(data.facilityData[i].id, data.facilityData[i].name,0));
        }
    }
    });

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
        
        let prefecture_id = {!! json_encode($prefecture_id) !!};
        $("input[name='prefecture_id'][value='"+prefecture_id+"']").prop("checked", true);
        $("input[name='prefecture_id'][value='"+prefecture_id+"']").prop("checked", true).trigger("checked");
    }
  });
});
</script>
@endsection