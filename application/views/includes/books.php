<section id="books" class="section-sm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between">
                    <h2 class="mb-0 text-nowrap mr-3">Kitaplar</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                    <div>
                        <a href="<?php echo base_url("welcome/all_books") ?>"
                            class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">Hepsini görüntüle</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- course list -->
        <div class="row justify-content-center">
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0"
                        src="<?php echo base_url("assets/"); ?>images/courses/course-1.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                            <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                        </ul>
                        <a href="<?php echo base_url("welcome/books_pages") ?>">
                            <h4 class="card-title">Photography</h4>
                        </a>
                        <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor
                            incididunt ut labore et dolore magna.</p>
                        <a href="<?php echo base_url("welcome/books_pages") ?>" class="btn btn-primary btn-sm">Devamını oku
                            </a>
                    </div>
                </div>
            </div>
            <!-- course item -->

        </div>
    </div>
</section>