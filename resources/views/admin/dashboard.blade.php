@extends('layouts.admin')

@section('content')
    <div id="dashboad-page">
        <div class="py-4 admin-page-info">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item " style="margin-top: -1px">
                        <a href="{{ route('home') }}">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
            <div class="row">


                <div class="col-sm-4">
                    <div class="stat-card">
                        <div class="stat-card__content">
                            <p class="text-uppercase mb-1 text-muted">Categories</p>
                            <h2>{{ $categories }}</h2>
                            <div>
                                <span class="text-muted"> <a href="{{ route('admin.category.index') }}"
                                        class="text-underline view-more"> View More </a></span>
                            </div>
                        </div>
                        <div class="stat-card__icon stat-card__icon--success">
                            <div class="stat-card__icon-circle">
                                <i class="fa-solid fa-code-branch"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="stat-card">
                        <div class="stat-card__content">
                            <p class="text-uppercase mb-1 text-muted">Articles</p>
                            <h2>{{ $articles }}</h2>
                            <div>
                                <span class="text-muted"> <a href="{{ route('admin.article.index') }}"
                                        class="text-underline view-more"> View More </a></span>
                            </div>
                        </div>
                        <div class="stat-card__icon stat-card__icon--primary">
                            <div class="stat-card__icon-circle">
                                <i class="fa-solid fa-file-lines"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="stat-card">
                        <div class="stat-card__content">
                            <p class="text-uppercase mb-1 text-muted">Members</p>
                            <h2>{{ $members }}</h2>
                            <div>
                                <span class="text-muted"> <a href="{{ route('admin.member.index') }}"
                                        class="text-underline view-more"> View More </a></span>
                            </div>
                        </div>
                        <div class="stat-card__icon stat-card__icon--success">
                            <div class="stat-card__icon-circle">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="stat-card">
                        <div class="stat-card__content">
                            <p class="text-uppercase mb-1 text-muted">Services</p>
                            <h2>{{ $services }}</h2>
                            <div>
                                <span class="text-muted"> <a href="{{ route('admin.service.index') }}"
                                        class="text-underline view-more"> View More </a></span>
                            </div>
                        </div>
                        <div class="stat-card__icon stat-card__icon--warning">
                            <div class="stat-card__icon-circle">
                                <i class="fa-solid fa-handshake-simple"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="stat-card">
                        <div class="stat-card__content">
                            <p class="text-uppercase mb-1 text-muted">appointments</p>
                            <h2>{{ $appointments }}</h2>
                            <div>
                                <span class="text-muted"> <a href="{{ route('admin.appointment.index') }}"
                                        class="text-underline view-more"> View More </a></span>
                            </div>
                        </div>
                        <div class="stat-card__icon stat-card__icon--danger">
                            <div class="stat-card__icon-circle">
                                <i class=" fa-solid fa-clock"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="stat-card">
                        <div class="stat-card__content">
                            <p class="text-uppercase mb-1 text-muted">responsibilities</p>
                            <h2>{{ $responsibilities }}</h2>
                            <div>
                                <span class="text-muted"> <a href="{{ route('admin.responsibility.index') }}"
                                        class="text-underline view-more"> View More </a></span>
                            </div>
                        </div>
                        <div class="stat-card__icon stat-card__icon--info">
                            <div class="stat-card__icon-circle">
                                <i class="fa-solid fa-hand-holding-hand"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="stat-card">
                        <div class="stat-card__content">
                            <p class="text-uppercase mb-1 text-muted">Testimonials</p>
                            <h2>{{ $testimonials }}</h2>
                            <div>
                                <span class="text-muted"> <a href="{{ route('admin.testimonial.index') }}"
                                        class="text-underline view-more"> View More </a></span>
                            </div>
                        </div>
                        <div class="stat-card__icon stat-card__icon--gray">
                            <div class="stat-card__icon-circle">
                                <i class="fa-solid fa-comment"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="stat-card">
                        <div class="stat-card__content">
                            <p class="text-uppercase mb-1 text-muted">Subscribers</p>
                            <h2>{{ $subscribers }}</h2>
                            <div>
                                <span class="text-muted"> <a href="{{ route('admin.subscriber.index') }}"
                                        class="text-underline view-more"> View More </a></span>
                            </div>
                        </div>
                        <div class="stat-card__icon stat-card__icon--orange">
                            <div class="stat-card__icon-circle">
                                <i class="fa-solid fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="stat-card">
                        <div class="stat-card__content">
                            <p class="text-uppercase mb-1 text-muted">Newsletter</p>
                            <h2>{{ $newsletter }}</h2>
                            <div>
                                <span class="text-muted"> <a href="{{ route('admin.newsletter.index') }}"
                                        class="text-underline view-more"> View More </a></span>
                            </div>
                        </div>
                        <div class="stat-card__icon stat-card__icon--purple">
                            <div class="stat-card__icon-circle">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-sm-4">
                    <div class="stat-card">
                        <div class="stat-card__content">
                            <p class="text-uppercase mb-1 text-muted">offers</p>
                            <h2>{{ $offers }}</h2>
                            <div>
                                <span class="text-muted"> <a href="{{ route('admin.offer.index') }}"
                                        class="text-underline view-more"> View More </a></span>
                            </div>
                        </div>
                        <div class="stat-card__icon stat-card__icon--danger">
                            <div class="stat-card__icon-circle">
                                <i class="fa-solid fa-list"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="stat-card">
                        <div class="stat-card__content">
                            <p class="text-uppercase mb-1 text-muted">orders</p>
                            <h2>{{ $orders }}</h2>
                            <div>
                                <span class="text-muted"> <a href="{{ route('admin.order.index') }}"
                                        class="text-underline view-more"> View More </a></span>
                            </div>
                        </div>
                        <div class="stat-card__icon stat-card__icon--info">
                            <div class="stat-card__icon-circle">
                                <i class="fa-solid fa-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
@endsection
