﻿@extends('clients/layouts/master')
@section('title', 'Contact')

@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" rel="nofollow">Home</a>
                    <span></span> Contact us
                </div>
            </div>
        </div>
        <section class="pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 m-auto">
                        <div class="contact-from-area padding-20-row-col wow FadeInUp">
                            <h3 class="mb-10 text-center">Contact Us</h3>
                            <p class="text-muted mb-30 text-center font-sm">We will get back to you asap!</p>
                            <form name="frmCreate" class="contact-form-style text-center" id="contact-form" action="#"
                                method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="email" placeholder="Your Email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="telephone" placeholder="Your Phone" type="tel">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="subject" placeholder="Subject" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="textarea-style mb-30">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <button class="submit submit-auto-width btn-save" type="submit">Send
                                            message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('custom-js')
    <script>
        $(function() {
            $('.btn-save').on('click', function(e) {
                e.preventDefault();
                const name = $('#name').val();
                const email = $('#email').val();
                const telephone = $('#telephone').val();
                const subject = $('#subject').val();
                const message = $('#message').val();
                if (!name || !email || !telephone || !subject || !message) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi',
                        text: 'Vui lòng điền đầy đủ thông tin!',
                    });
                    return false;
                }
                $('form[name="frmCreate"]').submit();
                Swal.fire(
                    'Đã lưu!',
                    'Dữ liệu đã được lưu thành công.',
                    'success',
                );
            });
        });
    </script>
@endsection
