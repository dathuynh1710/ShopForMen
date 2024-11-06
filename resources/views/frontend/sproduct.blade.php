@extends('frontend/layouts/master')

@section('content')
    <section id="page-header">
        <h2>Trang sản phẩm</h2>
        <p>Save more with coupons & up to 70% off!</p>
    </section>
    <section id="prodetails" class="section-p1">
        <div class="single-product-image">
            <img src="img/products/f1.jpg" alt="" width="100%" id="mainImg" />

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/f1.jpg" class="small-img" width="100%" alt="" />
                </div>
                <div class="small-img-col">
                    <img src="img/products/f3.jpg" class="small-img" width="100%" alt="" />
                </div>
                <div class="small-img-col">
                    <img src="img/products/f4.jpg" class="small-img" width="100%" alt="" />
                </div>
                <div class="small-img-col">
                    <img src="img/products/f2.jpg" class="small-img" width="100%" alt="" />
                </div>
            </div>
        </div>

        <div class="single-product-details">
            <h6>Home / T-Shirt</h6>
            <h4>Áo sơ mi nam</h4>
            <h2>580.000 VNĐ</h2>
            <select name="" id="">
                <option value="">Select Size</option>
                <option value="">XXL</option>
                <option value="">XL</option>
                <option value="">Medium</option>
                <option value="">Small</option>
            </select>
            <input type="number" value="1" />
            <button>Thêm vào giỏ hàng</button>
            <h4>Thông tin sản phẩm</h4>
            <span>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis,
                mollitia? Dolorum nostrum odio ipsam ullam. Atque, provident rerum,
                architecto labore tenetur repellat modi officiis dolorem aut, saepe
                sapiente commodi vel perspiciatis nihil accusamus! Explicabo facere
                suscipit aliquam odit minima ab, quis expedita natus totam vel a
                dolorum sed quia hic! Eum, quisquam numquam tempora corrupti obcaecati
                sit. Molestias impedit iusto cumque voluptatum. Sed vel ut atque
                eveniet quas cupiditate magni hic voluptatem in expedita, sit animi
                numquam ipsam ea cum fuga quidem asperiores nulla. Enim perspiciatis
                molestiae, asperiores doloremque repellendus eveniet assumenda
                molestias labore error nisi debitis, a sit? Porro reiciendis dolorum
                quia maiores, sequi hic explicabo vitae odit, facere consectetur
                doloremque nihil! Dolores ducimus cupiditate fugit molestias.
                Molestiae enim veniam repellendus cum voluptatum voluptas nisi eveniet
                vero incidunt. Repudiandae unde quae labore sapiente vitae doloremque
                corporis praesentium animi, eaque illum, nemo consequuntur?
                Accusantium rem expedita error provident alias saepe.
            </span>
        </div>
    </section>

    <!---- sản phẩm liên quan -------->
    <section id="product1" class="section-p1">
        <h2>Các sản phẩm liên quan</h2>
        <!-- <p>Summer Collection New Mordern Design</p> -->
        <div class="pro-container">
            <div class="pro">
                <img src="./img/products/f1.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="./img/products/f2.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="./img/products/f3.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="./img/products/f4.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>
@endsection
