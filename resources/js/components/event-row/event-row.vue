<template>
    <div class="row">
        <img class="col-md-4" :src="event.imageUrl" />
        <div class="col-md-8 pl-5">
            <h3 class="title my-0">{{ event.title }}</h3>
            <h4 class="text-orange mt-0">{{ event.date }}</h4>
            <h4 class="mt-5">{{ event.desc }}</h4>
        </div>
    </div>
</template>

<script src="./event-row.js"></script>

<style lang="scss">
    @import './event-row.scss';
</style>
