@extends('layout')
  
@section('content')
<main class="common_main">
  <div class="company_wrap">
    <div class="company_inner">
      <div class="common_inner">
        <div class="pankuzu_block mb15">
          <ul class="pankuzu_list">
            <li class="pankuzu_item">
              <a href="/" class="pankuzu_link">ホーム</a>
            </li>
            <li class="pankuzu_item">
              法人一覧
            </li>
          </ul>
        </div>
        <div class="company_mv_block">
          <div class="company_mv_main">
            <h1 class="company_mv_title">
              法人名から保育士の<br class="common_sp_640">口コミ・評判を探す
            </h1>
          </div>
          <form action="/company" method="get">
            <div class="company_mv_search_block">
              <p class="company_mv_search_title">キーワード検索</p>
              <div class="company_mv_search_main">
                <input type="text" name="keyword" value="" class="company_mv_search_input" placeholder="キーワードで検索">
                <button type="submit" class="company_mv_search_btn">
                  <img src="{{asset('assets/user/images/company/sarch_icon.svg')}}" alt="search">
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="company-all_main_block">
          <ul class="company-all_list">
            @foreach ($companyData as $item)
            <li class="company-all_item">
              <div class="company_box">
                <h3 class="company_title">
                    {{$item['name']}}
                </h3>
                <p class="company_place">
                    <span>〒 {{$item['postcode']}}</span>{{$item['prefecture_name']}} {{$item['city_name']}} {{$item['prefecture_name']}}{{$item['city_name']}}{{$item['address']}}
                </p>
                <div class="school_content_relative">
                  @if ($item['review_count'] == 0)
                      <div class="school_rate_block blur_active">
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
                <ul class="company_info_list">
                    <li class="company_info_item">
                      <p class="company_info_title">口コミ</p>
                      <div class="company_info_main">
                        <img src="{{asset('assets/user/images/company/talk_icon.svg')}}" alt="口コミ">
                        <p class="company_info_num"><span>{{$item['review_count']}}</span>件</p>
                      </div>
                    </li>
                    <li class="company_info_item">
                      <p class="company_info_title">保育施設</p>
                      <div class="company_info_main">
                        <img src="{{asset('assets/user/images/company/home_icon.svg')}}" alt="保育施設">
                        <p class="company_info_num"><span>{{$item['nursery_count']}}</span>件</p>
                      </div>
                    </li>
                </ul>
                <a href="/company/{{$item['id']}}" class="company_detail_btn">
                  <span class="common_pc">詳細を見る</span>
                  <span class="common_sp">口コミ・評判を見る</span>
                </a>
              </div>
            </li>
            @endforeach
          </ul>
          @if ($companyData->total()>0)
            <div class="pager_block">
              <p class="pager_text">全{{$companyData->total()}}件中{{$companyData->firstItem()}}~{{$companyData->lastItem()}}項目を表示中</p>
              <div class="pager_main">
                @php
                  $currentPageNumber = $companyData->currentPage();
                @endphp
                @if (!$companyData->onFirstPage())
                  <a href="{{$companyData->previousPageUrl()}}" class="pager_prev">
                    次へ<img src="{{asset('assets/user/images/common/pager_prev_arrow.svg')}}" alt="次へ">
                  </a>
                @endif
                <ul class="pager_list">
                  @if($currentPageNumber>3)
                    <li class="pager_item">
                      <a href="{{$companyData->url(1)}}" class="pager_link">{{1}}</a>
                    </li>                                    
                  @endif
                  @if($currentPageNumber>4)
                    <li>
                    …
                    </li>                            
                  @endif
                  @for ($i = max(1, $currentPageNumber-2); $i <= min($currentPageNumber+2, $companyData->lastPage()); $i++)
                    <li class="pager_item">
                      <a href="{{$companyData->url($i)}}" class="pager_link {{$currentPageNumber==$i?'active':''}}">{{$i}}</a>
                    </li>                                    
                  @endfor
                  @if($currentPageNumber+3<$companyData->lastPage())
                    <li>
                    …
                    </li>                            
                  @endif
                  @if($currentPageNumber+2<$companyData->lastPage())
                    <li class="pager_item">
                      <a href="{{$companyData->url($companyData->lastPage())}}" class="pager_link">{{$companyData->lastPage()}}</a>
                    </li>                                    
                  @endif
                </ul>
                @if ($companyData->hasMorePages())
                  <a href="{{$companyData->nextPageUrl()}}" class="pager_next">
                    次へ<img src="{{asset('assets/user/images/common/pager_next_arrow.svg')}}" alt="次へ">
                  </a>
                @endif
              </div>
            </div>
          @endif
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
let keyword = {!! json_encode($keyword) !!};
$('input[name="keyword"]').val(keyword);
</script>
@endsection