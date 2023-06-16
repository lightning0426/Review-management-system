@extends('layout')

@section('content')
<main class="common_main">
<div class="top_wrap">
<div class="top_mv_block">
    <div class="top_mv_inner">
        <div class="top_mv_box">
            <h1 class="top_mv_title">
                <small>保育士さんによる</small>
                <span>保育園の口コミ評判サイト</span>
            </h1>
            <form method="get" action="/nurseries">
                <div class="top_mv_form">
                    <input type="text" name="keyword" class="top_mv_input" placeholder="保育園名・エリア名で検索">
                    <button type="submit" class="top_mv_submit">
                        <img src="{{asset('assets/user/images/top/search_icon_pc.svg')}}" alt="検索" class="common_pc_640">
                        <img src="{{asset('assets/user/images/top/search_icon_sp.svg')}}" alt="検索" class="common_sp_640">
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<a href="/register" target="_blank" rel="noopener noreferrer" class="top_mv_bnr_block">
    <img src="{{asset('assets/user/images/top/banner_pc_march.png')}}" alt="オープン記念キャンペーン" class="common_pc_640">
    <img src="{{asset('assets/user/images/top/banner_sp_march.png')}}" alt="オープン記念キャンペーン" class="common_sp_640">
</a>
<section class="top_area_block">
    <div class="common_inner">
        <h2 class="common_title01">
            エリアから<small>保育園の口コミを探す</small>
        </h2>
        <div class="top_area_popular_block">
            <p class="top_area_popular_title">人気のエリア</p>
            <div class="common_pc">
              <ul class="area_list">
                <li class="area_item">
                  <a href="/tokyo" class="area_link">東京都</a>
                </li>
                <li class="area_item">
                  <a href="/kanagawa" class="area_link">神奈川県</a>
                </li>
                <li class="area_item">
                  <a href="/saitama" class="area_link">埼玉県</a>
                </li>
                <li class="area_item">
                  <a href="/chiba" class="area_link">千葉県</a>
                </li>                
              </ul>
            </div>
            <div class="common_sp">
              <ul class="area_list">
                <li class="area_item">
                  <a href="/tokyo" class="area_link">東京都</a>
                </li>
                <li class="area_item">
                  <a href="/kanagawa" class="area_link">神奈川県</a>
                </li>
                <li class="area_item">
                  <a href="/saitama" class="area_link">埼玉県</a>
                </li>
                <li class="area_item">
                  <a href="/chiba" class="area_link">千葉県</a>
                </li>
              </ul>
            </div>
            <img src="{{asset('assets/user/images/character/icon03.svg')}}" alt="エリアから保育園の口コミを探す" class="top_area_icon">
        </div>
        <div class="common_pc">
            <div class="top_area_main">
                <img src="{{asset('assets/user/images/top/map_pic.png')}}" alt="マップ" class="top_map_pic">
                <div class="top_area_box posi01">
                  <p class="top_area_box_title">近畿</p>
                  <ul class="area_list">
                    @foreach ($prefectureData as $row)
                      @if ($row->main_id == 5)
                        <li class="area_item">
                          <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
                        </li>            
                      @endif
                    @endforeach

                    
                  </ul>                 
                </div>
                <div class="top_area_box posi02">
                  <p class="top_area_box_title">信越・北陸</p>
                  <ul class="area_list">
                    @foreach ($prefectureData as $row)
                      @if ($row->main_id == 3)
                        <li class="area_item">
                          <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
                        </li>            
                      @endif
                    @endforeach
                  </ul>               
                </div>
                <div class="top_area_box posi03">
                  <p class="top_area_box_title">北海道・東北</p>
                  <ul class="area_list">
                    @foreach ($prefectureData as $row)
                      @if ($row->main_id == 1)
                        <li class="area_item">
                          <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
                        </li>            
                      @endif
                    @endforeach
                  </ul>
                </div>
                <div class="top_area_box posi04">
                  <p class="top_area_box_title">関東</p>
                  <ul class="area_list">
                    @foreach ($prefectureData as $row)
                      @if ($row->main_id == 2)
                        <li class="area_item">
                          <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
                        </li>            
                      @endif
                    @endforeach
                  </ul>
                </div>
                <div class="top_area_box posi05">
                  <p class="top_area_box_title">東海</p>
                  <ul class="area_list">
                    @foreach ($prefectureData as $row)
                      @if ($row->main_id == 4)
                        <li class="area_item">
                          <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
                        </li>            
                      @endif
                    @endforeach
                  </ul>  
                </div>
                <div class="top_area_box posi06">
                  <p class="top_area_box_title">九州</p>
                  <ul class="area_list">
                    @foreach ($prefectureData as $row)
                      @if ($row->main_id == 7)
                        <li class="area_item">
                          <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
                        </li>            
                      @endif
                    @endforeach
                  </ul>    
                </div>
                <div class="top_area_box posi07">
                  <p class="top_area_box_title">中国・四国</p>
                  <ul class="area_list">
                    @foreach ($prefectureData as $row)
                      @if ($row->main_id == 6)
                        <li class="area_item">
                          <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
                        </li>            
                      @endif
                    @endforeach
                  </ul>   
                </div>
            </div>
        </div>
        <div class="common_sp">
            <h2 class="top_area_title">エリアを選択してください</h2>
            <ul class="top_area_list">
                <li class="top_area_item">
                  <a href="" class="top_area_link_home_sp" data-area="kanto">関東</a>
                </li>
                <li class="top_area_item">
                  <a href="" class="top_area_link_home_sp" data-area="kinki">関西</a>
                </li>
                <li class="top_area_item">
                  <a href="" class="top_area_link_home_sp" data-area="tokai">東海</a>
                </li>
                <li class="top_area_item">
                    <a href="" class="top_area_link_home_sp" data-area="hokkaido_tohoku">北海道・東北</a>
                </li>
                <li class="top_area_item">
                  <a href="" class="top_area_link_home_sp" data-area="hokuriku">北陸・甲信越</a>
                </li>
                <li class="top_area_item">
                    <a href="" class="top_area_link_home_sp" data-area="tyugoku_shikoku">中国・四国</a>
                </li>
                <li class="top_area_item">
                  <a href="" class="top_area_link_home_sp" data-area="kyusyu">九州・沖縄</a>
                </li>
            </ul>
        </div>
        <div class="school-sp_popup_block SchoolPop AreaHomeSpPop" id="PlaceHomeSpWindow" style="display: none; z-index:50;">
            <form action="/nurseries" method="get">
                <div class="school-sp_popup_head mb0">
                    <h3 class="school-sp_popup_title">
                        都道府県で絞り込む
                    </h3>
                    <button type="button" class="school-sp_popup_close_btn PopCloseBtn">キャンセル</button>
                </div>
                <div class="school-sp_popup_inner btn_fixed">
                    <div class="school-sp_popup_place_box" id="kanto_sp">
                        <h3 class="school-sp_popup_place_title">関東</h3>
                        <ul class="school-sp_popup_place_list">
                          @foreach ($prefectureData as $row)
                            @if ($row->main_id == 2)
                              <li class="school-sp_popup_place_item PrefectureSelect">
                                  <label class="school-sp_popup_place_label">
                                      <input type="radio" name="prefecture_id" value="{{$row->id}}">
                                      <span>{{$row->name}}</span>
                                  </label>
                              </li>
                            @endif
                          @endforeach
                        </ul>
                    </div>
                    <div class="school-sp_popup_place_box" id="hokkaido_tohoku_sp">
                        <h3 class="school-sp_popup_place_title">北海道・東北</h3>
                        <ul class="school-sp_popup_place_list">
                          @foreach ($prefectureData as $row)
                          @if ($row->main_id == 1)
                            <li class="school-sp_popup_place_item PrefectureSelect">
                                <label class="school-sp_popup_place_label">
                                    <input type="radio" name="prefecture_id" value="{{$row->id}}">
                                    <span>{{$row->name}}</span>
                                </label>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                    <div class="school-sp_popup_place_box" id="hokuriku_sp">
                        <h3 class="school-sp_popup_place_title">北陸・甲信越</h3>
                        <ul class="school-sp_popup_place_list">
                          @foreach ($prefectureData as $row)
                          @if ($row->main_id == 3)
                            <li class="school-sp_popup_place_item PrefectureSelect">
                                <label class="school-sp_popup_place_label">
                                    <input type="radio" name="prefecture_id" value="{{$row->id}}">
                                    <span>{{$row->name}}</span>
                                </label>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                    <div class="school-sp_popup_place_box" id="tokai_sp">
                        <h3 class="school-sp_popup_place_title">東海</h3>
                        <ul class="school-sp_popup_place_list">
                          @foreach ($prefectureData as $row)
                          @if ($row->main_id == 4)
                            <li class="school-sp_popup_place_item PrefectureSelect">
                                <label class="school-sp_popup_place_label">
                                    <input type="radio" name="prefecture_id" value="{{$row->id}}">
                                    <span>{{$row->name}}</span>
                                </label>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                    <div class="school-sp_popup_place_box" id="kinki_sp">
                        <h3 class="school-sp_popup_place_title">関西</h3>
                        <ul class="school-sp_popup_place_list">
                          @foreach ($prefectureData as $row)
                          @if ($row->main_id == 5)
                            <li class="school-sp_popup_place_item PrefectureSelect">
                                <label class="school-sp_popup_place_label">
                                    <input type="radio" name="prefecture_id" value="{{$row->id}}">
                                    <span>{{$row->name}}</span>
                                </label>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                    <div class="school-sp_popup_place_box" id="tyugoku_shikoku_sp">
                        <h3 class="school-sp_popup_place_title">中国・四国</h3>
                        <ul class="school-sp_popup_place_list">
                          @foreach ($prefectureData as $row)
                          @if ($row->main_id == 6)
                            <li class="school-sp_popup_place_item PrefectureSelect">
                                <label class="school-sp_popup_place_label">
                                    <input type="radio" name="prefecture_id" value="{{$row->id}}">
                                    <span>{{$row->name}}</span>
                                </label>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                    <div class="school-sp_popup_place_box" id="kyusyu_sp">
                        <h3 class="school-sp_popup_place_title">九州・沖縄</h3>
                        <ul class="school-sp_popup_place_list">
                          @foreach ($prefectureData as $row)
                          @if ($row->main_id == 7)
                            <li class="school-sp_popup_place_item PrefectureSelect">
                                <label class="school-sp_popup_place_label">
                                    <input type="radio" name="prefecture_id" value="{{$row->id}}">
                                    <span>{{$row->name}}</span>
                                </label>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                </div>
                <div class="school-sp_popup_fixed_btnarea AreaSearch">
                    <button type="submit" class="school-sp_popup_fixed_submit" disabled="">条件を確定する</button>
                </div>
            </form>
        </div>
    </div>
</section>

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
                <a href="/nurseries?facility_ids={{$row->id}}" class="campaign_search_link">{{$row->name}}</a>
              </li>                              
            @else
              <li class="campaign_search_item  no_active CampaignItem ">
                <a href="/nurseries?facility_ids={{$row->id}}" class="campaign_search_link">{{$row->name}}</a>
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

<section class="common_qa_block top">
    <div class="common_inner">
        <h2 class="common_title01">よくあるご質問</h2>
        <ul class="qa_list">
            <li class="qa_item">
                <div class="qa_quest_block QABtn">
                    <p class="qa_quest_icon">Q.</p>
                    <h3 class="qa_quest_title">
                        保育士の口コミ・評判を見るのは無料でできますか？
                    </h3>
                </div>
                <div class="qa_answer_block">
                    <p class="qa_answer_text">
                        <span class="qa_answer_icon">A.</span>
                        <span>はい、無料ですべての口コミをご覧いただけます。</span>
                    </p>
                </div>
            </li>
            <li class="qa_item">
                <div class="qa_quest_block QABtn">
                    <p class="qa_quest_icon">Q.</p>
                    <h3 class="qa_quest_title">
                        保育士口コミ・評判の中で、評価が高い保育園の求人を紹介していただきたいです。
                    </h3>
                </div>
                <div class="qa_answer_block">
                    <p class="qa_answer_text">
                        <span class="qa_answer_icon">A.</span>
                        <span>姉妹サービスである<a href="https://hitoshia-hoiku.com/agent/signup" target="_blank" rel="noopener noreferrer" style="display: inline">ヒトシア保育</a>にて口コミの評価が高いご希望に沿った保育園をご紹介することが可能です。</span>
                    </p>
                </div>
            </li>
            <li class="qa_item">
                <div class="qa_quest_block QABtn">
                    <p class="qa_quest_icon">Q.</p>
                    <h3 class="qa_quest_title">
                        保育ひろばに会員登録をしたら何ができるようになりますか？
                    </h3>
                </div>
                <div class="qa_answer_block">
                    <p class="qa_answer_text">
                        <span class="qa_answer_icon">A.</span>
                        <span>気になる保育園や求人を保存し、後日に再度閲覧ができたり、通知を受け取ったりすることが可能になります。</span>
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="common_area_block ">
    <div class="common_inner">
        <div class="common_pc_640" style="display: none;">
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
                                    <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
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
                                  <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
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
                                    <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
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
                                    <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
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
                                  <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
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
                                  <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
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
                                                            <!-- <li class="area_item">
                                    <a href="https://hoikuhiroba-kuchikomi.com/tokyo/chiyodaku" class="area_link">RRS</a> -->
                              @foreach ($dockyoData as $row)
                                @if ($row->flag == 1)
                                  <li class="area_item">
                                    <a href="https://hoikuhiroba-kuchikomi.com/tokyo/chiyodaku" class="area_link">{{$row->name}}</a>
                                  </li>
                                @endif
                              @endforeach
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
                              <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
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
                              <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
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
                              <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
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
                              <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
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
                              <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
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
                              <a href="/{{$row->en_name}}" class="area_link">{{$row->name}}</a>
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

</script>
@endsection