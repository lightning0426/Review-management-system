@extends('layout')
  
@section('content')
<main class="common_main">
  <div class="company_wrap">
    <div class="company_inner">
      <div class="common_inner">
        <div class="company_mv_block">
          <div class="company_mv_main">
            @foreach ($companyData as $item)
            <div class="pankuzu_block mb15">
              <ul class="pankuzu_list">
                <li class="pankuzu_item">
                  <a href="/" class="pankuzu_link">ホーム</a>
                </li>
                <li class="pankuzu_item">
                  <a href="/company" class="pankuzu_link">法人一覧</a>
                </li>
                <li class="pankuzu_item">
                  {{$item['name']}}
                </li>
              </ul>
            </div>
            <h1 class="company_mv_title">
              {{$item['name']}}<br>
              保育士口コミ・評判
            </h1>
            <p class="company_mv_place">
              {{$item['prefecture_name']}}{{$item['city_name']}}{{$item['address']}}
            </p>
            <div class="company_content_relative">
              @if ($item['review_count'] == 0)
                <div class="company_mv_rate_block  blur_active  ">
                  <p class="company_mv_rate_title">評価 :</p>
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
                  <p class="company_mv_rate_num">{{$item['review_rating']}}</p>
                </div>
                <div class="not_enough_score company_content_absolute company_mv_place" style="top:-35%; left:9.5%; font-size: 15px">
                  <strong>十分な数の評価がありません</strong>
                </div>
              @else
                <div class="company_mv_rate_block ">
                  <p class="company_mv_rate_title">評価 :</p>
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
                  <p class="company_mv_rate_num">{{$item['review_rating']}}</p>
                </div>
              @endif
            </div>
            @endforeach
          </div>
          <div class="company-banner-sp">
            <a href="/register" target="_blank" rel="noopener noreferrer" class="top_mv_bnr_block">
              <img src="{{asset('assets/user/images/top/banner_sp_march.png')}}" alt="オープン記念キャンペーン" class="common_sp_640">
            </a>
          </div>
          @foreach ($companyData as $item)
          <p class="company_mv_text">
              {{$item['name']}}保育園で働いていた保育士の口コミ評判・求人ランキングのスコアは、{{$item['review_rating']}}点となっています。<br>
              保育士スコアは{{$item['name']}}保育園{{$item['nursery_count']}}施設を対象に「保育ひろば」が独自に算出したスコアです。<br>
              法人ごとの保育士口コミ評判を比較することで、保育園への転職・就職・求人応募の際にお役立ていただくことを目的にしています。
          </p>
          @endforeach
        </div>
        <div class="company-banner-pc">
          <a href="/register" target="_blank" rel="noopener noreferrer" class="top_mv_bnr_block">
            <img src="{{asset('assets/user/images/top/banner_pc_march.png')}}" alt="オープン記念キャンペーン" class="common_pc_640">
          </a>
        </div>
      </div>
    </div>
      
    <section class="company_main_block">
      @foreach ($companyData as $item1)
      <div class="common_inner">
        <div class="school-d_tab_block">
          <ul class="school-d_tab_list">
            <li class="school-d_tab_item TabBtn active" data-tab="Tab01">保育園一覧<span>{{$item['nursery_count']}}</span></li>
            <li class="school-d_tab_item TabBtn" data-tab="Tab02">口コミ・評判<span>{{$item['review_count']}}</span></li>
          </ul>
          <img src="{{asset('assets/user/images/school/detail/character02.svg')}}" alt="保育園一覧・口コミ・評判" class="school-d_tab_icon">
        </div>
        <div class="school-d_target_block">
          <div class="school-d_target_box Tab01 active">
            <div class="company_target_box">
              <h2 class="common_title03">
                <span>{{$item1['name']}}</span>
                保育園一覧
              </h2>
              <div class="company_target_main">
                <ul class="company_target_list nursery">
                  @foreach ($cardData as $item)
                    <li class="company_target_item">
                        <div class="school_box">
                        <div class="school_info_block">
                            {{-- @foreach ($item['facility_name'] as $facility)                                     --}}
                                <p class="school_label">{{$item['facility_name'][0]}}</p>
                            {{-- @endforeach --}}
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
              </div>
            </div>
          </div>
                
          <div class="school-d_target_box Tab02">
            <div class="company_target_box">
              <h2 class="common_title03">
                <span>{{$item1['name']}}</span>
                口コミ・評価
              </h2>
              <div class="company_target_main">
                <ul class="school-d_post_list evaluation">
                  @foreach ($reviewData as $item)
                  <li class="school-d_post_item" data-inview_evaluation_id="{{$item->id}}" data-offset="-400" data-nursery_id="{{$item->nursery_id}}">
                    <div class="school-d_post_head">
                      <div class="school-d_post_head_main">
                          <p class="school-d_post_head_subtitle">
                              {{$item->name}} の口コミ・評判
                          </p>
                          <div class="school-d_post_head_title_block">
                              <h3 class="school-d_post_head_title">{{$item->review_type}}</h3>
                              <p class="school-d_post_head_text  good-color ">
                                  <img src="{{asset('assets/user/images/school/detail/face_icon01.svg')}}" alt="良い点">良い点
                              </p>
                          </div>
                      </div>
                      <div class="school-d_post_head_sub">
                        <p class="school-d_post_head_rate_title">評価 :</p>
                        <div class="school-d_post_head_rate">
                          <ul class="school_star_list">
                            @php
                                $cur_rating = $item->rating;
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
                          <p class="school-d_post_head_rate_num">{{$item->rating}}</p>
                        </div>
                      </div>
                    </div>
                    <p class="school-d_post_info">
                      <span>{{$item->user_name}}(女性・その他)</span><span>勤務時期:{{$item->workperiod}}</span>
                    </p>
                    <div class="school-d_post_box">
                      <div class="common_pc_640">
                        <p class="school-d_post_text">{{substr($item->content, 0 ,90)}}...</p>
                      </div>
                      <div class="common_sp_640">
                        <p class="school-d_post_text PostText">
                          <span data-text="{{$item->content}}">{{$item->content}}</span>
                        </p>
                      </div>
                      <div class="comment_not_active">
                        <div class="not_active">
                          <p class="school-d_post_text">{{substr($item->content, 0 ,90)}}...</p>
                        </div>
                        <div class="comment_absolute">
                            <div class="content">
                                <a href="/register" class="register">会員登録してロコミを見る（無料）</a>
                                <a href="/login" class="login">ログインはこちら</a>
                            </div>
                        </div>
                      </div>
                      <div class="school-d_post_read_box PopBtn" data-pop="Read" style="display: none;">
                        <p class="school-d_post_text">
                          {{$item->content}}
                        </p>
                        <p class="school-d_post_read_title">
                          閲覧にはいずれかを選択してください
                        </p>
                        <div class="school-d_post_read_btnarea">
                          <p class="school-d_post_read_text01">口コミの投稿</p>
                          <p class="school-d_post_read_text02">転職サービスに登録</p>
                        </div>
                      </div>
                    </div>
                    <div class="school-d_post_btnarea">
                      <button type="button" class="school-d_post_like_btn PopBtn " data-pop="Login">
                        <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon.svg" alt="like" class="normal">
                        <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon_active.svg" alt="like" class="active">
                        <span>いいね！</span>
                        <small>0</small>
                      </button>
                      <button type="button" class="shool-d_post_report_btn PopBtn" data-pop="Login">
                          報告する
                      </button>
                    </div>
                  </li>  
                  @endforeach                                                                                          
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </section>
    <section class="company_popular_block">
      <div class="common_inner">
        <div class="company_popular_title_block">
          <h2 class="company_popular_title">人気の法人</h2>
          <img src="{{asset('assets/user/images/company/character02.svg')}}" alt="人気の法人" class="company_popular_icon">
        </div>
        <ul class="company-all_list">
          @foreach ($popularData as $item)
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
        <div class="common_sp_640">
          <a href="/company" class="company_popuplar_btn">他の法人も見る</a>
        </div>
      </div>
    </section> 

    <section class="common_qa_block company">
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

    <section class="common_campaign_block company">
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
    <section class="common_area_block company">
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
@endsection