@extends('frontend/layouts/master')

@section('content')
    <!---- home page section -------->
    <section id="page-header" class="about-header">
        <h2>Giới thiệu</h2>
        <p>Về chúng tôi</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="img/about/a6.jpg" alt="" />
        <div>
            <h2>Về chúng tôi</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
                dignissimos animi illum maxime fugiat quas omnis adipisci temporibus
                vitae veritatis corporis minus veniam porro facilis numquam, sapiente
                magni eveniet illo ea quasi nobis eaque corrupti et? Non, eius quidem.
                Voluptatem corrupti ducimus ab eligendi quidem ipsam hic perferendis
                porro quasi!Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Harum, itaque doloremque sapiente molestias excepturi voluptatibus.
            </p>
            <abbr title="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam,
                possimus. Aliquam rerum repellendus recusandae suscipit molestias
                quas, ipsum dolorem! Reprehenderit, quasi exercitationem iste quisquam
                aliquid fugit voluptatibus! Quidem, veritatis id!</abbr>
            <marquee behavior="" direction="" bgcolor="#ccc" loop="-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                molestias, rerum excepturi impedit corrupti obcaecati natus voluptatum
                error adipisci architecto!
            </marquee>
        </div>
    </section>

    <!---- feature section -------->
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="./img/features/f1.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f2.png" alt="" />
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f3.png" alt="" />
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f4.png" alt="" />
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f5.png" alt="" />
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f6.png" alt="" />
            <h6>F24/7 Supper</h6>
        </div>
    </section>

    <!---- newletter section start -->

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>
                Get Email updates about our latest shop and
                <span>special offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address" />
            <button class="normal">Sign Up</button>
        </div>
    </section>
@endsection
