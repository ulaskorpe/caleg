<body>
    <div class="container">
        <div class="tab-content">
            <div class="tab-pane fade show active" role="tabpanel" id="tab-2">
                <div class="row">
                    <div class="col">
                        <p>İsim: {{ $name }}</p>
                        <br>
                        <p>Email: {{ $email }}</p>
                        <br>
                        <p>Adres: {{ $msg }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<!--
    OLD
    <div class="wrapper clearfix" id="wrapperParallax">
        <section class="contact contact-4" id="contact-4">
            <div class="container">
                <div class="contact-panel contact-panel-3">
                    <div class="contact-card">
                        <div class="contact-body">
                            <h5 class="card-heading">
                                {{__('Request A Quote')}}
                            </h5>
                            <p class="card-desc">
                                {{__('We take great pride in everything that we do, control over products allows us to ensure our customers receive the best quality service.')}}
                            </p>
                            <div class="contactForm">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label" for="contact-name">
                                            {{__('Sender Name')}}:
                                        </label>
                                        <p>{{$MailData['sender_name']}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label" for="contact-name">
                                            {{__('Sender Email')}}:
                                        </label>
                                        <p> {{$MailData['sender_email']}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label" for="contact-name">
                                            {{__('Message')}}:
                                        </label>
                                        <p>{{ $MailData['body'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
-->