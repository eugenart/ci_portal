@extends('layout.index')
@section('content')
    <div class="row">
        <div class="col col-md-8 col-lg-8 col-xl-8 group-posts-wrapper row">
            <div class="posts-wrapper col col-md-12 col-lg-12 col-xl-12 row">
                <div class="post-author col col-md-2 col-lg-2 col-xl-2">
                    <img src="https://api.adorable.io/avatars/150/2"
                         alt="">
                </div>
                <div class="col col-md-10 col-lg-10 col-xl-10">
                    <div class="post-body card">

                        <div class="card-header post-card-header">
                            <div class="post-main-info col-md-8 col-lg-8 col-xl-8">
                                <p class="post-title">Special title treatment</p>
                                <p class="post-time-info">Posted at 20:04</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus
                                distinctio
                                dolor eaque earum eligendi enim facere illo labore laborum porro quam qui quia
                                quibusdam,
                                quos
                                ratione rem, sapiente sit, vitae?</p>
                            <div class="post-footer"><span class="post-comment-icon"><i
                                        class="fas fa-comment-alt comment-watcher"></i><span
                                        class="comments-count">2</span></span><span
                                    class="post-comment-author">Кулягина Таисия <span
                                        class="post-author-span">автор</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- end main post -->
                    <div class="comments-rendered comments-rendered-hide">
                        <div class="comment-rendered row col-md-12 col-lg-12 col-xl-12">
                            <div class="post-author comment-img-left col col-md-2 col-lg-2 col-xl-2">
                                <img src="https://api.adorable.io/avatars/150/4"
                                     alt="">
                            </div>
                            <div
                                class="post-body post-body-comment card col-md-10 col-lg-10 col-xl-10 comment-card-right">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus
                                        distinctio
                                        dolor eaque earum eligendi enim facere illo labore laborum porro quam qui quia
                                        quibusdam,
                                        quos
                                        ratione rem, sapiente sit, vitae?</p>
                                    <div class="post-footer"><p class="post-time-info">Posted at 20:04</p><span
                                            class="post-comment-author">Кулягина Таисия</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-rendered row col-md-12 col-lg-12 col-xl-12">
                            <div class="post-author comment-img-left col col-md-2 col-lg-2 col-xl-2">
                                <img src="https://api.adorable.io/avatars/150/1"
                                     alt="">
                            </div>
                            <div
                                class="post-body post-body-comment card col-md-10 col-lg-10 col-xl-10 comment-card-right">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus
                                        distinctio
                                        dolor eaque earum eligendi enim facere illo labore laborum porro quam qui quia
                                        quibusdam,
                                        quos
                                        ratione rem, sapiente sit, vitae?</p>
                                    <div class="post-footer"><p class="post-time-info">Posted at 20:04</p><span
                                            class="post-comment-author">Кулягина Таисия</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="new-comment col-md-12 col-lg-12 col-xl-12 row">
                            <div class="post-author comment-img-left col col-md-2 col-lg-2 col-xl-2">
                                <img src="https://api.adorable.io/avatars/150/8"
                                     alt="">
                            </div>
                            <div
                                class="post-body post-body-comment card col-md-10 col-lg-10 col-xl-10 comment-card-right">
                                <div class="card-body">
                                    <form action="">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Ваш комментарий"
                                                   aria-label="Ваш комментарий" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="button-addon2">Button
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col col-md-4 col-lg-4 col-xl-4 group-info-wrapper">
            <h2>Тут инфа про группы</h2>
        </div>
    </div>
@endsection
