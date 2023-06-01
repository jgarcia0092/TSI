<template>
    <div class="p-3">
        <div class="card p-0 m-0 h-100">
            <img class="card-img-top" :src="card.imageUrl" alt="">
            <div class="card-body text-center pb-0">
                <h3><strong>{{ card.title }}</strong></h3>
                <h4><strong>{{ card.desc }}</strong></h4>
                <h4 class="mt-5"><strong>SERVICE SUGGESTION</strong></h4>
                <div class="row mt-5">
                    <a class="col-sm-6 text-orange footer-link border-right">4G Internet Kit</a>
                    <a class="col-sm-6 text-orange footer-link">4G MEGA Internet Kit</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script src="./event-card.js"></script>

<style lang="scss">
    @import './event-card.scss';
</style>