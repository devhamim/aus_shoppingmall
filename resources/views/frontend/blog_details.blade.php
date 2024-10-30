@extends('frontend.layout.app')

@section('content')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">Blog Details</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>Home</a>
                        </span>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->

<!--site-main start-->
<div class="site-main">
    <div class="ttm-row sidebar ttm-sidebar-right ttm-bgcolor-grey overflow-hidden clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-9 content-area">
                    <!-- post -->
                    <article class="post ttm-blog-single clearfix">
                        <!-- post-featured-wrapper -->
                        <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                            <div class="ttm-post-featured">
                                <img class="img-fluid" src="{{ asset('uploads/blog') }}/{{ $blogs->first()->image }}" alt="blog-img">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date"><span
                                                class="entry-month entry-year">{{ $blogs->first()->created_at->format('d-M-Y') }}</span></time>
                                    </span>
                                </div>
                            </div>
                        </div><!-- post-featured-wrapper end -->
                        <!-- ttm-blog-single-content -->
                        <div class="ttm-blog-single-content">
                            <div class="ttm-post-entry-header">
                                <div class="post-meta">
                                    @if ($blogs->first()->added_by != null)
                                        <a href="#" class="ttm-meta-line byline">{{ $blogs->first()->rel_to_user->name }}
                                    @endif
                                    </a>
                                    <a href="#" class="ttm-meta-line tags-links"><i
                                            class="ti ti-comment"></i>({{ $blog_comment_count }}) Comments
                                    </a>
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="ttm-box-desc-text">
                                    <h3>{{ $blogs->first()->title }}</h3>
                                    <p>{!! $blogs->first()->description !!}</p>
                                </div>

                                <div class="blog-comment-wrap mb-80">
                                    <div class="sidebar-title mb-50">
                                        <h3>Comments ({{ $blog_comment_count }})</h3>
                                    </div>
                                    <ul>
                                        @foreach ($blog_comment as $comment)
                                        <li>
                                            <div class="blog-comment-avatar">
                                                <img src="{{ asset('frontend') }}/img/blog/comment_avatar01.jpg" alt="">
                                            </div>
                                            <div class="blog-comment-content">
                                                <h5>{{ $comment->name }}</h5><span>{{ $comment->created_at->format('d-M-Y') }}</span>
                                                <p>{{$comment->message}}</p>

                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="ttm-blog-classic-box-comment clearfix">
                                    <div id="comments" class="comments-area">
                                        <div class="comment-respond">
                                            <h3 class="comment-reply-title">Leave a Reply</h3>
                                            <div class="comment-notes margin_bottom25">Your email address will
                                                not be published. </div>
                                            <form name="contact_form" class="comment-form" action="{{ route('blog.comment') }}" method="POST">
                                                @csrf
                                                <p class="comment-form-comment">
                                                    <textarea id="comment" placeholder="Comment" name="message" required cols="45" rows="4" aria-required="true"></textarea>
                                                </p>
                                                <p class="comment-form-author">
                                                    <input id="author" placeholder="Name (required)" name="name" type="text" value="" size="30" aria-required="true" required>
                                                </p>
                                                <p class="comment-form-email">
                                                    <input id="email" placeholder="Email (required)" name="email" required type="text" value="" size="30" aria-required="true">
                                                </p>
                                                <p class="comment-form-url">
                                                    <input id="url" placeholder="Website"
                                                        name="url" type="text" value=""
                                                        size="30">
                                                </p>
                                                <input name="blogs_id" class="form-control" type="hidden" value="{{ $blogs->first()->id }}" />
                                                <p class="comment-cookies">
                                                    <input id="comment-cookies-consent"
                                                        name="comment-cookies-consent" type="checkbox"
                                                        value="yes">
                                                    <label for="comment-cookies-consent">Save my name, email,
                                                        and website in this browser for the next time I
                                                        comment.</label>
                                                </p>
                                                <p class="form-submit margin_top20 margin_bottom0">
                                                    <button
                                                        class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor rajdhani font-weight-bold fs-18"
                                                        type="submit">Post Comment</button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article><!-- ttm-blog-single-content end -->
                </div>
                <div class="col-lg-3 widget-area sidebar-right  mt_100 padding_top100 mb_100 padding_bottom100 res-991-margin_top0 res-991-padding_top0">

                    <aside class="widget widget-recent-post with-title">
                        <h3 class="widget-title">Recent Posts</h3>
                        <ul class="widget-post ttm-recent-post-list">
                            @foreach ($latest_blogs->take(6) as $latest)
                                <li>
                                    <a href="{{ route('our.blog.details', $latest->slug) }}">
                                        <img class="img-fluid" src="{{ asset('uploads/blog') }}/{{ $latest->image }}" alt="post-img">
                                    </a>
                                    <div class="post-detail">
                                        <span class="post-date"><i class="fa fa-calendar"></i>{{ $latest->created_at->format('d-M-Y') }}</span>
                                        <a href="{{ route('our.blog.details', $latest->slug) }}">{{ $latest->title }}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </aside>

                    <aside class="widget widget-banner">
                        <div
                            class="ttm-col-bgcolor-yes ttm-bgcolor-darkgrey col-bg-img-thirteen ttm-col-bgimage-yes ttm-bg padding_top50 padding_left25 padding_right20 padding_bottom50">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="widget-banner-inner">
                                    <h3>First-Class<br>Finance Authority</h3>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur.</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor font-weight-600"
                                        href="{{ route('contect') }}">Get in Touch<i
                                            class="flaticon flaticon-right-arrow font-weight-bold"></i></a>
                                </div>
                            </div>
                        </div>
                    </aside>

                </div>
            </div><!-- row end -->
        </div>
    </div>


</div><!--site-main end-->
@endsection
