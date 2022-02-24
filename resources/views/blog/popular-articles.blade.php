<section id="popular-articles" >
    <h2>Most popular item</h2>
    <ul articles-list>
        <template popular-article-template>
            <li>
                <div class="card-popular mb-3 position-relative" style="max-width: 540px; background-color: #cde4f7">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" data-views-counter>
                    </span>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div data-image></div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" data-title></h5>
                                <p class="card-text" data-excerpt></p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </template>

    </ul>
</section>
