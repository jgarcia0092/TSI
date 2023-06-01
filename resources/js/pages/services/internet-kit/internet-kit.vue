<template>
    <div class="container-fluid p-0 d-flex justify-content-center">
        <div class="page-header bg-white page-content p-5">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a class="text-orange" href="#">Wifi Services</a></li>
                    <li class="breadcrumb-item active">Internet Kits</li>
                    <li class="breadcrumb-item active" aria-current="page">4G and 4G MEGA Internet Kit</li>
                </ol>
            </nav>
            <div class="row mt-6">
                <div class="col-lg-6 pr-5">
                    <lingallery :items="slidingItems" :responsive="true" accentColor="#e67e22" />
                    <VueFaqAccordion class="mt-5" :items="accordionItems" activeColor="#000" borderColor="#C0C0C0" />
                </div>
                <div class="col-lg-6 pl-5">
                    <h1 class="title mt-0">4G & 4G MEGA Internet Kit</h1>
                    <h4 class="mt-5">Simply plug and play with our Quick Start Guide. No IT experience, software downloads, or special knowledge is required to set up our Internet Kit. We'll deliver to your office or hotel via FedEx.<br/><br/>You may also rent multiple kits if your event requires more than 15 device connections.</h4>
                    <h3 class="title mt-5 text-uppercase">Number of device Connections</h3>
                    <div>
                        <input type="radio" id="4g" value="4g" v-model="internetKit" />
                        <label class="text-black ml-1" for="4g"><b>4G Internet Kit:</b> connect up to 15 devices</label>
                    </div>
                    <div>
                        <input type="radio" id="4g-mega" value="4g-mega" v-model="internetKit" />
                        <label class="text-black ml-1" for="4g-mega"><b>4G MEGA Internet Kit:</b> connect up to 100 devices</label>
                    </div>
                    <h3 class="title mt-5 text-uppercase">Rental Period</h3>
                    <FunctionalCalendar :isDateRange="true" />
                    <div class="d-flex align-items-center mt-5">
                        <h4 class="title text-dark">QTY: </h4>
                        <number-input class="ml-3" :value="quantity" />
                    </div>
                    <div class="calc-container mt-5">
                        <h4 class="font-italic text-dark">Average Venue Cost: $4000</h4>
                        <h3 class="title text-dark">Our Price: <span class="text-red">$2,450</span></h3>
                        <div class="mt-5"><a class="add-to-cart" href="#">add to cart</a></div>
                        <div class="mt-4"><a class="checkout" href="#">CHECKOUT</a></div>
                    </div>
                </div>
            </div>
            <div class="row mt-7">
                <div class="col-md-8 mx-auto text-center">
                    <subscriber></subscriber>
                </div>
            </div>
        </div>
    </div>
</template>

<script src="./internet-kit.js"></script>

<style lang="scss">
    @import './internet-kit.scss';
</style>
