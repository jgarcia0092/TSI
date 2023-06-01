<template>
    <div class="container-fluid p-0 d-flex justify-content-center">
        <div class="page-header bg-white page-content p-5">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a class="text-orange" href="#">Wifi Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Venue Wifi</li>
                </ol>
            </nav>
            <div class="row mt-6">
                <div class="col-lg-6 pr-5">
                    <lingallery :items="slidingItems" :responsive="true" accentColor="#e67e22" />
                    <VueFaqAccordion class="mt-5" :items="accordionItems" activeColor="#000" borderColor="#C0C0C0" />
                </div>
                <div class="col-lg-6 pl-5">
                    <h1 class="title mt-0">Venue WiFi</h1>
                    <h4 class="mt-5">Run an event space?<br />Let us install and manage a mind blowing WiFi network. We cover all costs. We carge market rates for group WiFi access during events. You earn a revenue share</h4>
                    <div class="right-content">
                        <div class="request-quote-container mt-5">
                            <h3 class="title text-orange text-center">REQUEST A QUOTE</h3>
                            <hr class="mx-5">
                            <form class="m-5">
                                <h4>Full Name:</h4>
                                <input type="text" class="font-italic p-2 w-100" placeholder="John Smith" />
                                <h4 class="mt-5">Email Address:</h4>
                                <input type="email" class="font-italic p-2 w-100" placeholder="john@company.com" />
                                <h4 class="mt-5">How can we help you?</h4>
                                <textarea class="font-italic w-100 p-2" placeholder="Message" rows="8" />
                                <div class="mt-5 d-flex justify-content-between">
                                    <h4 class="btn-action text-gray">cancel</h4>
                                    <h4 class="btn-action font-weight-bold text-orange">SEND</h4>
                                </div>
                            </form>
                        </div>
                        <h3 class="title text-center">OR</h3>
                        <div class="px-3"><button class="btn btn-talk btn-round w-100 py-3">Talk to an expert <i class="fa fa-commenting-o fa-lg"></i></button></div>
                    </div>
                </div>
            </div>
            <div class="row mt-7">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <subscriber></subscriber>
                </div>
            </div>
        </div>
    </div>
</template>

<script src="./venue-wifi.js"></script>

<style lang="scss">
    @import './venue-wifi.scss';
</style>
