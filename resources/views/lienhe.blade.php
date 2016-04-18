@extends('master')



@section('content')
    <div id="content-header-wrapper">
        <h2 class="page-title">Liên hệ</h2>
    </div>
    <div id="googleMap" class="contact_map"></div>
    <!--    contact form-->
    <div class="top-content">
        <div class="inner-bg">
            <div class="row">
                <div class="col-sm-8 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h2>Phản hồi</h2>
<!--                            <p>Điền thông tin vào mẫu để liên lạc với chúng tôi:</p>-->
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <div class="form-bottom contact-form">
                        <form role="form" action="assets/contact.php" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="contact-email">Email</label>
                                <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-subject">Subject</label>
                                <input type="text" name="subject" placeholder="Chủ đề..." class="contact-subject form-control" id="contact-subject">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-message">Message</label>
                                <textarea name="message" placeholder="Nội dung tin nhắn..." class="contact-message form-control" id="contact-message"></textarea>
                            </div>
                            <button type="submit" class="btn">Send message</button>
                        </form>
                    </div>
                </div>

                <div class="col-sm-4 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h2>Liên hệ</h2>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-info-circle"></i>
                        </div>
                    </div>
                    <div class="form-bottom contact-info">
                        <ul class="contact-details-list">
                            <li class="clearfix">Km 9, đường Nguyễn Trãi</li>
                            <li class="clearfix contact-details-address">Quận Thanh Xuân, Hà Nội</li>
                            <li class="clearfix">
                                <span class="contact-label">Điện thoại:</span>
                                <ol>
                                    <li>123 456-789</li>
                                </ol>
                            </li>
                            <li class="clearfix">
                                <span class="contact-label">Di động:</span>
                                <ol>
                                    <li>123 456-789</li>
                                </ol>
                            </li>
                            <li class="clearfix">
                                <span class="contact-label">Fax:</span>
                                <ol>
                                    <li>123 456-789</li>
                                </ol>
                            </li>
                            <li class="clearfix">
                                <span class="contact-label">Email:</span>
                                <ol>
                                    <li>shui0211@gmail.com</li>
                                </ol>
                            </li>
                            <li class="clearfix">
                                <span class="contact-label">Skype:</span>
                                <ol>
                                    <li>shui0211</li>
                                </ol>
                            </li>
                        </ul><!-- End .contact-details -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop